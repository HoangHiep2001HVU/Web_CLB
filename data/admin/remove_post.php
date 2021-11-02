<?php
    require "../connect/connect.php";

    $id = $_POST["id"];
    $file = $_POST["file"];

    if($file==""){
        $sql = "delete from replys where id='$id'";
        $kt = mysqli_query($conn, $sql);
        if($kt){
            echo 1;
        }
        else {
            echo 0;
        }
    }else{
        $pathName_sl_remove= "../../public/img/post/".$file;
        if(!unlink($pathName_sl_remove)){
            echo 0;
        }
        else{
            $sql = "delete from replys where id='$id'";
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