<?php
	/*-Lưu trữ các biến sử dụng và các hằng số cố định*/
	
	//Biến cơ sở dữ liệu
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "clb_tinhoc";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	function Connect($con){
		if ($con->connect_error) {
			die("Connection failed: " .$con->connect_error);
		}
	}
	Connect($conn);
	
?>