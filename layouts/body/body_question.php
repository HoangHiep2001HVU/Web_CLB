<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm câu hỏi <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <?php
            if (isset($_SESSION["email"])) {
                $theme = $_GET["theme"];
                echo "<form method='POST' id='upload_question' enctype='multipart/form-data'>

                            <div class='form_group' style='display: none;'>
                                <label for='id_topic'>Id chủ đề:</label>
                                <input type='text' id='id_topic' name='id_topic' readonly value='$theme'>
                            </div>

                            <div class='form_group' style='display: none;'>
                                <label for='user_create'>Id người tạo:</label>
                                <input type='text' id='user_create' name='user_create' readonly value='$user_id'>
                            </div>
            
                            <div class='form_group'>
                                <label for='name_question'>Tên câu hỏi:</label>
                                <input type='text' id='name_question' placeholder='Nhập vào tên câu hỏi ...' name='name_question' required minlength='5'>
                            </div>
            
                            <div class='form_group'>
                                <label for='note_question'>Miêu tả chi tiết:</label>
                                <input type='text' id='note_question' placeholder='Nhập vào miêu tả chi tiết của câu hỏi...' name='note_question' required minlength='5'>
                            </div>
            
                            <div class='group_button'>
                                <button type='submit' name='upload' id='insert'>Thêm</button>
                            </div>
                        </form>";
            } else {
                echo "<h3 style='color:red'>Vui lòng đăng nhập vào tài khoản của bạn để thực hiện chức năng này!<h3>";
            }
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col l-12">
        <div class="header">
            <hr>
            <h1>Những câu hỏi chủa chủ đề</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_question" onkeyup="search('search_question','table_question',0);" placeholder="Tìm kiếm câu hỏi" title="Tìm kiếm chủ đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number">Tổng số câu hỏi: 0</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_question" class="col l-12">
        <?php
            load_question();
        ?>
    </tbody>
</table>

<?php
_page('forum.php');
?>

<script type="text/javascript">
    upload_question();
</script>