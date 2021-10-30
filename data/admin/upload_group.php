<?php
    require "../connect/connect.php";

    $name = $_POST["name_group"];
    $leader = $_POST["leader_group"];
    $link_leader = $_POST["link_leader_group"];
    $file = $_FILES["img_leader_group"]["name"];

    $sql_kt = "select * from groups where name ='$name'";
    
    $query_kt= mysqli_query($conn, $sql_kt);
    if(mysqli_num_rows($query_kt)>0){
        echo 0;
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

                if (move_uploaded_file($_FILES['img_leader_group']['tmp_name'], $target)) {
                    $sql = "INSERT INTO groups(name, leader, link_contact, image_leader) VALUES ('$name','$leader','$link_leader','$file')";
                    $upload_kt=mysqli_query($conn, $sql);
                    if($upload_kt){
                        echo 1;
                    }
                    else{
                        echo 2;
                    }
                } else {
                    echo 2;
                }
            }
        }
    }
    mysqli_close($conn);
