<?php
    require "../connect/connect.php";

    $name = $_POST["name_group"];

    $sql_kt = "select * from groups where name ='$name'";
    
    $query_kt= mysqli_query($conn, $sql_kt);
    if(mysqli_num_rows($query_kt)>0){
        echo 0;
    }
    else{
        $sql = "INSERT INTO groups(name) VALUES ('$name')";
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