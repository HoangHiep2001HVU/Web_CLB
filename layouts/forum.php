<?php
require "../data/config.php";
?>
<!Doctype html>
<html lang="en">

<head>
    <title>CLB Tin Học</title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <link rel="stylesheet" type="text/css" href="../public/css/css.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/grid_system.css" />
    <script type="text/javascript" src="../public/jss/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../public/jss/js.js"></script>
</head>

<body>
    <div id="top">
        <?php require "menu/menu.php"; ?>
    </div>

    <div id="body_forum" class="grid wide">
        <?php 
            if(isset($_GET["email"])){
                $email  = $_GET["email"];
                $_link = "forum.php?email=$email&theme";
            }
            else {
                $_link = "forum.php?theme";
            }

            if(isset($_GET["theme"])){
                require "body/body_question.php";
            }
            else{
                require "body/body_forum.php";
            }
        ?>
    </div>

    <div id="footer">
        <?php require "footer/footer.php" ?>
    </div>

    <?php require "body/click_img.php" ?>

</body>

</html>

<?php
//Tắt kết nối
mysqli_close($conn);
?>