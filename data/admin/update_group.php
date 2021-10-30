<?php
    require "../connect/connect.php";

    $id = $_POST["id_update"];
    $name = $_POST["name_update"];
    $leader = $_POST["leader_update"];
    $link_leader = $_POST["link_leader_update"];
    $file = $_FILES["img_leader_update"]["name"];
    $file_old = $_POST["img_leader_old"];

    if($file==""){
        $sql = "UPDATE groups SET name='$name',leader='$leader',link_contact='$link_leader' WHERE id=$id";
        $upload_kt=mysqli_query($conn, $sql);
        if($upload_kt){
            echo 1;
        }
        else{
            echo 2;
        }
    }
    else{
        $target = "../../public/img/leader/" . basename($file);
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

        if (file_exists($target)) {
            echo 3;
        } else {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo 4;
            } else {
                if($file_old==""){
                    if (move_uploaded_file($_FILES['img_leader_update']['tmp_name'], $target)) {
                        $sql = "UPDATE groups SET name='$name',leader='$leader',link_contact='$link_leader',image_leader='$file' WHERE id=$id";
                        $upload_kt=mysqli_query($conn, $sql);
                        if($upload_kt){
                            echo 1;
                        }
                        else{
                            echo 0;
                        }
                    } else {
                        echo 0;
                    }
                }
                else{
                    $pathName_sl_remove= "../../public/img/leader/".$file_old;
                    if(!unlink($pathName_sl_remove)){
                        echo 0;
                    }
                    else{
                        if (move_uploaded_file($_FILES['img_leader_update']['tmp_name'], $target)) {
                            $sql = "UPDATE groups SET name='$name',leader='$leader',link_contact='$link_leader',image_leader='$file' WHERE id=$id";
                            $upload_kt=mysqli_query($conn, $sql);
                            if($upload_kt){
                                echo 1;
                            }
                            else{
                                echo 0;
                            }
                        } else {
                            echo 0;
                        }
                    }
                }
            }
        }
    }

    mysqli_close($conn);
?>