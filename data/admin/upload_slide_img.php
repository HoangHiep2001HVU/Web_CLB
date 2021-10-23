<?php
require "../connect/connect.php";

$file = $_FILES['file_img_sl']['name'];
$header_img = $_POST['header_img_sl'];
$note_sl = $_POST['note_img_sl'];

$target = "../../public/img/slide_img/" . basename($file);
$imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

if (file_exists($target)) {
	echo 3;
} else {
	if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
		echo 0;
	} else {

		if (move_uploaded_file($_FILES['file_img_sl']['tmp_name'], $target)) {
			$sql_sl_img = "INSERT INTO slide_imgs(name, image, note) VALUES ('$header_img','$file','$note_sl')";
			mysqli_query($conn, $sql_sl_img);
			echo 1;
		} else {
			echo 2;
		}
	}
}
mysqli_close($conn);
