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

    <div id="body_post" class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="header">
                    <h1>Câu hỏi ABC</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <p>Miêu tả chi tiết câu hỏi</p>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <hr>
                <h2>Các câu trả lời!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <h3>User 1</h3>
                <p class="times">20/10/2021</p>
                <p class="content_post">nội dung</p>
                <div class="interact">
                    <p>Có ... lượt thích</p>
                    <p>Thích</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <h3>User 2</h3>
                <p class="times">19/10/2021</p>
                <p class="content_post">nội dung</p>
                <div class="interact">
                    <p>Có ... lượt thích</p>
                    <p>Thích</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <hr>
                <h2>Thêm câu trả lời của bạn</h2>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <form action="" id="user_post">
                    <div class="content_post_user">
                        <label for="content">Nội dung trả lời:</label>
                        <textarea name="content_post_user" id="content" rows="10" placeholder="Vui long nhập nội dung câu trả lời của bạn"></textarea>
                    </div>
                    <div class="file_content">
                        <label for="file_content">Ảnh minh họa(nếu có):</label>
                        <input type="file" name="file_content" id="file_content">
                    </div>
                    <div class="content_submit">
                        <button>Trả lời</button>
                    </div>
                </form>
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