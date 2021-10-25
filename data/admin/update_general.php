<?php
    require "../connect/connect.php";

    $id_update = $_POST["id_update"];
    $file = $_FILES['file_update']['name'];
	$header = $_POST['header_update'];
	$note = $_POST['note_update'];
    $type = $_POST['type'];
    $file_choice=$_POST["file_choice"];


    if($file==""){
        $sql = "UPDATE generals SET name='$header ',type='$type',note='$note',file='$file_choice' WHERE id=$id_update";
        mysqli_query($conn, $sql);
        echo 1;
    }
    else{
        $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $target="";
        if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif"){
            $target = "../../public/img/even_img/" . basename($file);
        }
        else{
            $target = "../../public/video/" . basename($file);
        }

        $imageFileType_remove = strtolower(pathinfo($file_choice, PATHINFO_EXTENSION));
        if($imageFileType_remove == "jpg" || $imageFileType_remove == "png" || $imageFileType_remove == "jpeg" || $imageFileType == "gif"){
            $target_remove = "../../public/img/even_img/" . $file_choice;
        }
        else{
            $target_remove = "../../public/video/" . $file_choice;
        }
        if (file_exists($target)) {
            echo 3;
        } else {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"&& $imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov") {
                echo 0;
            } else {
                if(!unlink($target_remove)){
                    echo 0;
                }
                else{
                    if (move_uploaded_file($_FILES['file_update']['tmp_name'], $target)) {
                        $sql = "UPDATE generals SET name='$header',type='$type',note='$note',file='$file' WHERE id=$id_update";
                        mysqli_query($conn, $sql);
                        echo 1;
                    } else {
                        echo 2;
                    }
                }
            }
        }
    }
    mysqli_close($conn);
?>