<?php
    require "../connect/connect.php";

    $id = $_POST['id_update'];
	$file = $_FILES['logo_update']['name'];
	$method = $_POST['method_update'];
	$link = $_POST['contact_update'];
    $file_old = $_POST['logo_choice'];
	
    if($file == ""){
        $sql = "UPDATE contacts SET method='$method',link='$link' WHERE id=$id";
        mysqli_query($conn, $sql);
		echo 1;
    }
    else{
        if(!unlink("../../public/img/$file_old")){
            echo 0;
        }
        else{
            //lấy phần mở rộng của file
            $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif"){
                $target = "../../public/img/" . basename($file);
            }

            if (file_exists($target)) {
                echo 3;
            } else {
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo 0;
                } else {

                    if (move_uploaded_file($_FILES['logo_update']['tmp_name'], $target)) {
                        $sql = "UPDATE contacts SET method='$method',link='$link',logo='$file' WHERE id=$id";
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