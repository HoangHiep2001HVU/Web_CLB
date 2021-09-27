<?php
	require "data/config.php";
?>
<!Doctype html>
<header>
	<title>CLB Tin Học</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/css.css" />
	<link rel="stylesheet" type="text/css" href="public/css/responsive.css" />
	<script src="public/jss/jquery-3.6.0.min.js"></script>
</header>
<body>
	<div id="top">
		<?php require "layouts/menu/menu.php" ?>
	</div>
	
	<div id="body" class="gird">
		<?php require "layouts/body/body_home.php" ?>
	</div>
	
	<div id="footer">
		<?php require "layouts/footer/footer.php" ?>
	</div>
	
	<?php require "layouts/users/login.php" ?>
	<?php require "layouts/body/click_img.php" ?>
	<?php require "layouts/users/register.php" ?>
	<?php require "layouts/menu/upload_sl_img.php" ?>

	<script type="text/javascript">
			$(document).ready(function(){
				Next();
				Back();
			});
	</script>
	<script type="text/javascript" src="public/jss/js.js"></script>
	
	<?php 
		//Tắt kết nối
		mysqli_close($conn);
	?>
</body>
</html>