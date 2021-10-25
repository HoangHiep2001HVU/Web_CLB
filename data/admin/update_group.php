<?php
    require "../connect/connect.php";

    $id = $_POST["id_update"];
    $name = $_POST["name_update"];

    $sql_kt = "select * from groups where name ='$name'";
    
    $query_kt= mysqli_query($conn, $sql_kt);
    if(mysqli_num_rows($query_kt)>0){
        echo 0;
    }
    else{
        $sql = "UPDATE groups SET name='$name' WHERE id=$id";
        $upload_kt=mysqli_query($conn, $sql);
        if($upload_kt){
            echo 1;
        }
        else{
            echo 2;
        }
    }

    mysqli_close($conn);
?>