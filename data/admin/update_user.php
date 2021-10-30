<?php
require "../connect/connect.php";
if (isset($_POST['id_update'])) {
    $id = $_POST['id_update'];
    $name = $_POST['name_update'];
    $birthday = $_POST['birthday_update'];
    $email = $_POST['email_update'];
    $_class = $_POST['_class_update'];
    $sex = $_POST['_gender_update'];
    $role = $_POST['role_update'];
    $file_choice = $_POST['file_choice'];
    $file = $_FILES['file_update']['name'];

    $target = "../../public/img/users/" . basename($file);
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    if($file==""){
        $sql_acc = "UPDATE account SET email='$email',role='$role' WHERE id=$id";
        $sql_user = "UPDATE users SET name='$name',birthday='$birthday',email='$email',class='$_class',sex='$sex' WHERE id=$id";
        mysqli_query($conn, $sql_acc);
        mysqli_query($conn, $sql_user);
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
                if($file_choice==""){
                    if (move_uploaded_file($_FILES['file_update']['tmp_name'], $target)) {
                        $sql_acc = "UPDATE account SET email='$email',role='$role' WHERE id=$id";
                        $sql_user = "UPDATE users SET name='$name',birthday='$birthday',email='$email',class='$_class',sex='$sex',image='$file' WHERE id=$id";
                        mysqli_query($conn, $sql_acc);
                        mysqli_query($conn, $sql_user);
                        echo 1;
                    } else {
                        echo 2;
                    }
                }
                else{
                    if(!unlink($pathName_sl_remove)){
                        echo 0;
                    }
                    else{
                        if (move_uploaded_file($_FILES['file_update']['tmp_name'], $target)) {
                            $sql_acc = "UPDATE account SET email='$email',role='$role' WHERE id=$id";
                            $sql_user = "UPDATE users SET name='$name',birthday='$birthday',email='$email',class='$_class',sex='$sex',image='$file' WHERE id=$id";
                            mysqli_query($conn, $sql_acc);
                            mysqli_query($conn, $sql_user);
                            echo 1;
                        } else {
                            echo 2;
                        }
                    }
                }
            }
        }
    }
    mysqli_close($conn);
}
