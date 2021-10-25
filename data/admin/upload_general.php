<?php
    require "../connect/connect.php";

	$file = $_FILES['file_general']['name'];
	$header = $_POST['header_general'];
	$note = $_POST['note_general'];
    $type = $_POST['type'];
	
    //lấy phần mowrroongj của file
	$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif"){
        $target = "../../public/img/even_img/" . basename($file);
    }
    else{
        $target = "../../public/video/" . basename($file);
    }

	if (file_exists($target)) {
		echo 3;
	} else {
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"&& $imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov") {
			echo 0;
		} else {

			if (move_uploaded_file($_FILES['file_general']['tmp_name'], $target)) {
				$sql = "INSERT INTO generals(name, type, note,file) VALUES ('$header','$type','$note','$file')";
				mysqli_query($conn, $sql);
				echo 1;
			} else {
				echo 2;
			}
		}
	}
	mysqli_close($conn);
?>