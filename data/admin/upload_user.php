<?php
require "../connect/connect.php";
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $_class = $_POST['_class'];
    $sex = $_POST['_gender'];
    $role = $_POST['role'];
    $file = $_FILES['file']['name'];
    $_password = md5($pass_default);

    $Sql_KT = "SELECT * FROM account WHERE email='$email'";

    $result = $conn->query($Sql_KT);

    if ($result->num_rows > 0) {
        echo 0;
    } else {
        if ($file == "") {
            $sql_acc = "INSERT INTO account(email,password,role) VALUES ('$email','$_password','$role')";
            $sql_user = "INSERT INTO users(name, birthday, email, class, sex) VALUES ('$name','$birthday','$email','$_class','$sex')";
            $upload_kt1 = mysqli_query($conn, $sql_acc);
            $upload_kt2 = mysqli_query($conn, $sql_user);
            if ($upload_kt1 && $upload_kt2) {
                echo 1;
            } else {
                echo $conn->error;
                echo 4;
            }
        } else {
            $target = "../../public/img/users/" . basename($file);
            $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

            if (file_exists($target)) {
                echo 3;
            } else {
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    echo 2;
                } else {

                    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
                        $sql_acc = "INSERT INTO account(email,password,role) VALUES ('$email','$_password','$role')";
                        $sql_user = "INSERT INTO users(name, birthday, email, class, sex,image) VALUES ('$name','$birthday','$email','$_class','$sex','$file')";
                        $upload_kt1 = mysqli_query($conn, $sql_acc);
                        $upload_kt2 = mysqli_query($conn, $sql_user);
                        if ($upload_kt1 && $upload_kt2) {
                            echo 1;
                        } else {
                            echo 4;
                        }
                    } else {
                        echo 4;
                    }
                }
            }
        }
    }
}
mysqli_close($conn);
