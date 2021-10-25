<?php
    require "../connect/connect.php";

    $id = $_POST["id"];

    $sql = "delete from groups where id='$id'";
    $kt = mysqli_query($conn, $sql);
    if($kt){
        echo 1;
    }
    else {
        echo 0;
    }

    mysqli_close($conn);
?>