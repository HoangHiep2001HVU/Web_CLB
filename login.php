<?php
	require "data/config.php";
?>
<!Doctype html>
<header>
	<title>CLB Tin Học</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/css.css" />
</header>
<body>
	<div id="top">
		<?php require "layouts/menu/menu.php" ?>
	</div>
	
	<div id="body">
		<?php require "layouts/users/login.php" ?>
	</div>
	
	<div id="footer">
		<?php require  "layouts/footer/footer.php" ?>
	</div>
	<script type="text/javascript" src="public/jss/js.js"></script>
</body>
</html>