<!--Giao diện đăng nhập-->
<?php
require "../../data/config.php";
?>
<!Doctype html>
<html lang="en">

<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width = device-width, initial-scale = 1" />
	<link rel="stylesheet" type="text/css" href="../../public/css/css.css" />
	<link rel="stylesheet" type="text/css" href="../../public/css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="../../public/css/grid_system.css" />
	<script type="text/javascript" src="../../public/jss/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../public/jss/js.js"></script>
</head>

<body>
	<div id="login" class="grid wide">
		<div class="row">
			<div class="col l-o-6 l-6 m-o-6 m-6 c-o-1 c-10">
				<form method="POST" id="login_form">
					<div class="heder_log">
						<img src="../../public/img/clb.png" alt="Logo CLB Tin Học">
						<h1>Đăng nhập tài khoản</h1>
					</div>

					<div class="form_group">
						<label for="email_login">Email: </label>
						<input type="email" class="form_control" id="email_login" placeholder="Nhập vào email" name="email" required minlength="5">
					</div>

					<div class="form_group">
						<label for="password_login">Mật khẩu:</label>
						<input type="password" class="form_control" id="password_login" placeholder="Nhập vào mật khẩu" name="password" required minlength="6">
					</div>
					<div class="group_button">
						<?php 
							echo "<button type='button' name='login' onclick='log();'>Đăng nhập</button>";
						?>
						<button type="button" name="register"><a href="register.php?x=2">Đăng ký</a></button>
						<button type="button" name="back"><a href="../index.php">Quay lại</a></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
	//Tắt kết nối
	mysqli_close($conn);
	?>
</body>

</html>