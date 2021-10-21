<?php
    require "../connect/connect.php";

    if(isset($_POST["id"])){
        $remove_id = $_POST["id"];
        $remove_name = $_POST["name"];

        $pathName_sl="../public/img/slide_img/"+$remove_name;

        if(!unlink($pathName_sl)){
            echo 0;
        }
        else{
            $sql = "delete from slide_imgs where id=$remove_id";
            mysqli_query($conn,$sql);
            echo 1;
        }
    }
    else{
        echo 0;
    }
?>