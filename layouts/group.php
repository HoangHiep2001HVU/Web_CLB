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

    <div id="body_group" class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="header row">
                    <div class="col l-12 m-12 c-12">
                        <h1>Trưởng nhóm</h1>
                    </div>
                </div>
                <div class="leader row">
                    <img src="../public/img/users/team2.jpg" alt="John">
                    <div class="txt">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <p><a href="#">Contact</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="introduce row">
            <div class="col l-12">
                <div class="header row">
                    <div class="col l-12 m-12 c-12">
                        <h1>Giới thiệu về nhóm ABC</h1>
                    </div>
                </div>
                <div class="us">
                    <div class="vd">
                        <video autoplay muted loop class="myVideo" onclick="about();">
                            <source src="../public/video/about_us.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="content">
                        <h1>Heading</h1>
                        <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
                        <button class="myBtn" onclick="about();">Pause</button>
                    </div>
                </div>
            </div>
        </div>
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