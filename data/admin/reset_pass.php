<?php
    require "../connect/connect.php";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $_password = md5($pass_default);
        $sql = "UPDATE account SET password='$_password' WHERE id=$id";
        mysqli_query($conn, $sql);
        echo 1;
    }
    else{
        echo 0;
    }
    mysqli_close($conn);
?>