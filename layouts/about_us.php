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

    <div id="contact" class="grid wide">
        <div class="header row">
            <div class="col l-12">
                <h1>Ban chủ nhiệm câu lạc bộ</h1>
            </div>
        </div>
        <div class="member row">
            <div class="col l-4">
                <div class="card">
                    <img src="../public/img/users/team2.jpg" alt="John">
                    <h1>John Doe</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <p><a href="#">Contact</a></p>
                </div>
            </div>
            <div class="col l-4">
                <div class="card">
                    <img src="../public/img/users/team2.jpg" alt="John">
                    <h1>John Doe</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <p><a href="#">Contact</a></p>
                </div>
            </div>
            <div class="col l-4">
                <div class="card">
                    <img src="../public/img/users/team2.jpg" alt="John">
                    <h1>John Doe</h1>
                    <p class="title">CEO & Founder, Example</p>
                    <p>Harvard University</p>
                    <p><a href="#">Contact</a></p>
                </div>
            </div>
        </div>
        <div id="contact_us">
            <div class="row">
                <div class="col l-6">
                    <img src="../public/img/backgrounds/contact.png" alt="Ảnh contact.png">
                </div>
                <div class="col l-6">
                    <div class="contact row">
                        <div class="col l-12">
                            <h1>Thông tin liên hệ chung</h1>
                        </div>
                    </div>
                    <div class="phone row">
                        <div class="col l-1 l-o-1">
                            <img src="../public/img/backgrounds/phone.png" alt="Ảnh điện thoại">
                        </div>
                        <div class="col l-10">
                            <p>SĐT: 0384191013</p>
                        </div>
                    </div>
                    <div class="email row">
                        <div class="col l-1 l-o-1">
                            <img src="../public/img/backgrounds/email.png" alt="Ảnh email">
                        </div>
                        <div class="col l-10">
                            <p>Email: clbtinhoc@gmail.com</p>
                        </div>
                    </div>
                    <div class="fb row">
                        <div class="col l-1 l-o-1">
                            <img src="../public/img/backgrounds/fb_bg.png" alt="Ảnh điện thoại">
                        </div>
                        <div class="col l-10">
                            <p>Facebook: CLB Tin Hoc</p>
                        </div>
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