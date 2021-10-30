<?php
    require "../connect/connect.php";

    $id = $_POST["id"];
    $file = $_POST["img"];

    $pathName_sl_remove= "../../public/img/leader/".$file;
    if(!unlink($pathName_sl_remove)){
        echo 0;
    }
    else{
        $sql = "delete from groups where id='$id'";
        $kt = mysqli_query($conn, $sql);
        if($kt){
            echo 1;
        }
        else {
            echo 0;
        }
    }

    mysqli_close($conn);
?>