<?php
	Connect($conn);
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$birthday = $_POST['birthday'];
		$email = $_POST['email'];
		$_class = $_POST['_class'];
		$sex = $_POST['sex'];
		$_password = $_POST['_password'];
	}
?>