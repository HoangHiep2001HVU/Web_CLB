<?php
require "../../data/config.php";
?>
<!Doctype html>
<html lang="en">

<head>
    <title>CLB Tin Học</title>
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
    <?php
        
    ?>
    <div id="top">
        <?php require "../../layouts/menu/menu.php"; ?>
    </div>
    
</body>

</html>

<?php
//Tắt kết nối
mysqli_close($conn);
?>