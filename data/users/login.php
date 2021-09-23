<?php
	require "../connect/connect.php";
	if(isset($_POST['acount'])){
		$email = $_POST['acount'];
		$_password = md5($_POST['password_login']);
		
		$Sql_KT = "SELECT * FROM account WHERE email='$email'";
		
		$result = $conn->query($Sql_KT);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$pass = $row['password'];
			}
			if($pass == $_password){
				echo 1;
			}
			else {
				echo 0;
			}
		}
		else{
			echo 0;
		}
	}
	mysqli_close($conn);
?>