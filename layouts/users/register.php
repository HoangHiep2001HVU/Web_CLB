<!--Giao diện đăng ký-->
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
	<div id="register" class="grid wide">
		<div class="row">
			<div class="col l-o-6 l-6">
				<form method="POST" id="form_reg">
					<div class="heder_reg">
						<img src="../../public/img/clb.png" alt="Logo CLB Tin Học">
						<h1>Đăng ký tài khoản</h1>
					</div>

					<div class="form_group">
						<label for="name">Họ tên:</label>
						<input type="text" class="form_control" id="name" placeholder="Nhập vào tên" name="name" required minlength="2">
					</div>

					<div class="form_group">
						<label for="birthday">Ngày sinh:</label>
						<input type="date" class="form_control" id="birthday" value="2018-07-22" name="birthday">
					</div>

					<div class="form_group">
						<label for="email">Email:</label>
						<input type="email" class="form_control" id="email" placeholder="Nhập vào email" name="email">
					</div>

					<div class="form_group">
						<label for="_class">Lớp:</label>
						<input type="text" class="form_control" id="_class" placeholder="Nhập vào lớp" name="_class" required minlength="2">
					</div>

					<div class="form_group">
						<label for="gender">Giới tính:</label>
						<select name="gender" id="gender">
							<option value="Nam">Nam</option>
							<option value="Nữ">Nữ</option>
							<option value="Khác">Khác</option>
						</select>
					</div>

					<div class="form_group">
						<label for="_password">Mật khẩu</label>
						<input type="password" class="form_control" id="_password" placeholder="Nhập vào mật khẩu" name="password" required minlength="6" maxlength="20">
					</div>

					<div class="form_group">
						<label for="rPassword">Nhập lại mật khẩu:</label>
						<input type="password" class="form_control" id="rPassword" placeholder="Nhập lại mật khẩu" name="rPassword" required minlength="6" maxlength="20">
					</div>
					<div class="group_button">
						<?php 
							if(isset($_GET["x"])){
								$X = $_GET["x"];
								echo "<button type='button' name='registe' onclick='reg(_href,$X);'>Đăng ký</button>";
							}
							else{
								echo "<button type='button' name='registe' onclick='reg(_href,2);'>Đăng ký</button>";
							}
						?>
						<button type="button" name="login"><a href="login.php?x=2">Đăng nhập</a></button>
						<button type="button" name="back"><a href="../index.php">Quay lại</a></button>
					</div>

				</form>
			</div>
			<?php echo "<script>var _href = '$pastServer'</script>" ?>
		</div>
	</div>

	<?php
	//Tắt kết nối
	mysqli_close($conn);
	?>
</body>

</html>