<?php
require "../connect/connect.php";

$id_question = $_POST["id_question"];
$id_user = $_POST["user_create"];
$note = $_POST["content_post_user"];
$file = $_FILES["file_content"]["name"];

if($note==""){
    echo 4;
}
else{
    if ($file == "") {
        $sql = "INSERT INTO replys(id_question, user_create, answer, like) VALUES ('$id_question','$id_user','$note',0)";
        $upload_kt = mysqli_query($conn, $sql);
        if ($upload_kt) {
            echo 1;
        } else {
            echo 2;
        }
    } else {
        $target = "../../public/img/post/" . basename($file);
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    
        if (file_exists($target)) {
            echo 0;
        } else {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo 3;
            } else {
    
                if (move_uploaded_file($_FILES['file_content']['tmp_name'], $target)) {
                    $sql = "INSERT INTO replys(id_question, user_create, answer, file, like) VALUES ('$id_question','$id_user','$note','$file',0)";
                    $upload_kt = mysqli_query($conn, $sql);
                    if ($upload_kt) {
                        echo 1;
                    } else {
                        echo 2;
                    }
                } else {
                    echo 2;
                }
            }
        }
    }
}
mysqli_close($conn);
