<?php
//hàm lấy ra tên của tài khoản
	$user_id=0;
	$role=0; //biến lấy lư vai trò của người đăng nhập
	function username($con,&$user_id, $email, &$role){
		$sql = "select account.id, name, role from users,account where account.id=users.id 
		and users.email='$email'";
		$result = $con->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$user_id = $row['id'];
				$name = $row['name'];
				$role = $row['role'];
			}
		}
		return $name;
	}
	
	//Hàm lấy ra tên các nhóm r gán vào menu
	function groups($con){
		$sql = "select * from groups";
		$result = $con->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['name'];
				echo "<li><a href='#'>$name</a></li>";
			}
		}
	}
?>