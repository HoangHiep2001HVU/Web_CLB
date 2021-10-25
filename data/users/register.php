<?php
	require "../connect/connect.php";
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$birthday = $_POST['birthday'];
		$email = $_POST['email'];
		$_class = $_POST['_class'];
		$sex = $_POST['sex'];
		$_password = md5($_POST['_password']);
		
		$Sql_KT = "SELECT * FROM account WHERE email='$email'";
		
		$result = $conn->query($Sql_KT);
		
		if($result->num_rows > 0){
			echo 0;
		}
		else{
			$sql_acc = "INSERT INTO account(email,password,role) VALUES ('$email','$_password',14)";
			$sql_user= "INSERT INTO users(name, birthday, email, class, sex) VALUES ('$name','$birthday','$email','$_class','$sex')";
			$conn->query($sql_acc);
			$conn->query($sql_user);
			echo 1;
		}
	}
	mysqli_close($conn);
?>