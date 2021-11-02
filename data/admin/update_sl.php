<?php
    require "../connect/connect.php";

    $id_update = $_POST["id_update"];
    $file = $_FILES['file_update_sl']['name'];
    $header_img = addslashes($_POST['header_update_sl']);
    $note_sl = addslashes($_POST['note_update_sl']);
    $file_choice=$_POST["file_choice"];

    $target = "../../public/img/slide_img/" . basename($file);
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    if($file==""){
        $sql_sl_img = "UPDATE slide_imgs SET name='$header_img ',image='$file_choice',note='$note_sl' WHERE id=$id_update";
        mysqli_query($conn, $sql_sl_img);
        echo 1;
    }
    else{
        if (file_exists($target)) {
            echo 3;
        } else {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo 0;
            } else {
                $pathName_sl_remove= "../../public/img/slide_img/".$file_choice;
                if(!unlink($pathName_sl_remove)){
                    echo 0;
                }
                else{
                    if (move_uploaded_file($_FILES['file_update_sl']['tmp_name'], $target)) {
                        $sql_sl_img = "UPDATE slide_imgs SET name='$header_img ',image='$file',note='$note_sl' WHERE id=$id_update";
                        mysqli_query($conn, $sql_sl_img);
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