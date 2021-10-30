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
            <div class="col l-12 m-12 c-12">
                <h1>Ban chủ nhiệm câu lạc bộ</h1>
            </div>
        </div>
        <div class="member row">
            <div class="col l-4 m-4 c-12">
                <div class="card">
                    <?php
                    $_role = "Giảng viên cố vấn";
                    load_contact_user($_role);
                    ?>
                </div>
            </div>
            <div class="col l-4 m-4 c-12">
                <div class="card">
                    <?php
                    $_role = "Chủ nhiệm";
                    load_contact_user($_role);
                    ?>
                </div>
            </div>
            <div class="col l-4 m-4 c-12">
                <div class="card">
                <?php
                    $_role = "Phó chủ nhiệm";
                    load_contact_user($_role);
                    ?>
                </div>
            </div>
        </div>
        <div id="contact_us">
            <div class="row">
                <div class="col l-6 m-12 c-12">
                    <img src="../public/img/backgrounds/contact.png" alt="Ảnh contact.png">
                </div>
                <div class="col l-6 m-12 c-12">
                    <div class="contact row">
                        <div class="col l-12 m-12 c-12">
                            <h1 style="margin-bottom: 10px;">Thông tin liên hệ chung</h1>
                        </div>
                    </div>
                    <?php
                    load_contact();
                    ?>
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