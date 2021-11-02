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

    <div id="admin" class="grid wide">
        <div class="row">
            <?php require "menu/menu_admin.php" ?>
            <div class="col l-9">
                <div id="admin_body">
                    <?php 
                        if($_GET["tab"]=="tab_1"){
                            require "admin/generals.php";
                        }
                        else if($_GET["tab"]=="tab_2"){
                            require "admin/groups.php";
                        }
                        else if($_GET["tab"]=="tab_3"){
                            require "admin/evens.php";
                        }
                        else if($_GET["tab"]=="tab_4"){
                            require "admin/banners.php";
                        }
                        else if($_GET["tab"]=="tab_5"){
                            require "admin/users.php";
                        }
                        else if($_GET["tab"]=="tab_6"){
                            require "admin/topic.php";
                        }
                        else if($_GET["tab"]=="tab_7"){
                            require "admin/questions.php";
                        }
                        else if($_GET["tab"]=="tab_8"){
                            require "admin/replys.php";
                        }
                        else if($_GET["tab"]=="tab_9"){
                            require "admin/contact.php";
                        }
                        else {
                            echo "Không tìm được trang!";
                        }

                        $current_page = $_GET["tab"];
                        echo "<script type='text/javascript'>
                            $(document).ready(function() {
                                current_page($current_page);
                                $('#number_img').text('Tổng số: '+count);
                            });
                        </script>";
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