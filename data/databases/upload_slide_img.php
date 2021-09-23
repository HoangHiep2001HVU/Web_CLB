<?php
	require "../connect/connect.php";
	//Upload ảnh silde_img
	$sql = "select * from groups";
	$result = $con->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$name = $row['name'];
			echo "<li><a href='#'>$name</a></li>";
		}
	}
	mysqli_close($conn);
?>