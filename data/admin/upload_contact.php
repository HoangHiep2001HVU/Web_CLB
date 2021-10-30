<?php
    require "../connect/connect.php";

	$file = $_FILES['contact_logo']['name'];
	$method = $_POST['contact_method'];
	$link = $_POST['contact_link'];
	
    //lấy phần mowrroongj của file
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

			if (move_uploaded_file($_FILES['contact_logo']['tmp_name'], $target)) {
				$sql = "INSERT INTO contacts(method, link, logo) VALUES ('$method','$link','$file')";
				mysqli_query($conn, $sql);
				echo 1;
			} else {
				echo 2;
			}
		}
	}
	mysqli_close($conn);
?>