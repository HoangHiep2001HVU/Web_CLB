<?php
    require "../connect/connect.php";

    if(isset($_POST["id"])){
        $remove_id = $_POST["id"];
        $sql = "delete from questions where id=$remove_id";
        $kt = mysqli_query($conn, $sql);
        if($kt){
            echo 1;
        }
        else{
            echo 0;
        }
    }
    else{
        echo 0;
    }
    
    mysqli_close($conn);
?>