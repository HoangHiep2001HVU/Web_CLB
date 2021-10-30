<?php
    require "../connect/connect.php";

    if(isset($_POST["id"])){
        $remove_id = $_POST["id"];
        $file = $_POST["img"];

        $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        $pathName_sl="";

        if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"){
            $pathName_sl="../../public/img/".$file;
        }
        else{
            $pathName_sl="../../public/video/".$file;
        }

        if(!unlink($pathName_sl)){
            echo 0;
        }
        else{
            $sql = "delete from contacts where id=$remove_id";
            mysqli_query($conn,$sql);
            echo 1;
        }
    }
    else{
        echo 0;
    }
    
    mysqli_close($conn);
?>