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
        <?php
        load_name_question();
        ?>
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <hr>
                <h2>Các câu trả lời!</h2>
            </div>
        </div>
        <div id="answer">
            <?php
            load_reply();
            ?>
        </div>
        <div class="row">
            <div class="col l-12 m-12 c-12">
                <hr>
                <h2>Thêm câu trả lời của bạn</h2>
            </div>
        </div>
        <div class="row">
            <div class="col l-12 c-12 m-12">
                <form method="POST" id="upload_post" enctype="multipart/form-data">
                    <?php
                    $question = $_GET["question"];
                    echo "<div class='form_group' style='display: none;'>
                                <label for='id_question'>Id chủ đề:</label>
                                <input type='text' id='id_question' name='id_question' readonly value='$question'>
                            </div>

                            <div class='form_group' style='display: none;'>
                                <label for='user_create'>Id người tạo:</label>
                                <input type='text' id='user_create' name='user_create' readonly value='$user_id'>
                            </div>";
                    ?>
                    <div class="content_post_user">
                        <label for="content_post_user">Nội dung trả lời:</label>
                        <textarea name="content_post_user" id="content_post_user" rows="10" 
                        placeholder="Vui long nhập nội dung câu trả lời của bạn" minlength="20" require></textarea>
                    </div>
                    <div class="file_content">
                        <label for="file_content">Ảnh minh họa(nếu có):</label>
                        <input type="file" name="file_content" id="file_content">
                    </div>
                    <div class="content_submit">
                        <button type="submit" style="width: 20%;">Trả lời</button>
                    </div>
                </form>
            </div>

            <script type="text/javascript">
               upload_post();
            </script>
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