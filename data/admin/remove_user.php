<?php
    require "../connect/connect.php";

    $id = $_POST["id"];
    $img = $_POST["img"];

    $sql = "delete from account where id='$id'";
    if($img == ""){
        $kt = mysqli_query($conn, $sql);
        if($kt){
            echo 1;
        }
        else {
            echo 0;
        }
    }
    else{
        $link = "../../public/img/users/$img";
        if(!unlink($link)){
            echo 0;
        }
        else{
            $kt = mysqli_query($conn, $sql);
            if($kt){
                echo 1;
            }
            else {
                echo 0;
            }
        }
    }

    mysqli_close($conn);
?>