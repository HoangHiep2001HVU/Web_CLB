<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm chủ đề câu hỏi <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <?php
            if (isset($_GET["email"])) {
                echo "<form method='POST' id='upload_topic' enctype='multipart/form-data'>

                            <div class='form_group' style='display: none;'>
                                <label for='user_create'>Id người tạo:</label>
                                <input type='text' id='user_create' name='user_create' readonly value='$user_id'>
                            </div>
            
                            <div class='form_group'>
                                <label for='name_topic'>Tên chủ đề:</label>
                                <input type='text' id='name_topic' placeholder='Nhập vào tên chủ đề ...' name='name_topic' required minlength='5'>
                            </div>
            
                            <div class='form_group'>
                                <label for='note_topic'>Miêu tả chi tiết:</label>
                                <input type='text' id='note_topic' placeholder='Nhập vào miêu tả chi tiết của chủ đề...' name='note_topic' required minlength='5'>
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
            <h1>Các chủ đề câu hỏi?</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_theme" onkeyup="search('search_theme','table_theme',0);" placeholder="Tìm kiếm chủ đề" title="Tìm kiếm chủ đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number">Tổng số chủ đề: 5</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_theme" class="col l-12">
        <?php
        load_topic();
        ?>
    </tbody>
</table>

<?php
_page('forum.php');
?>

<script type="text/javascript">
    upload_topic();
</script>

</div>
</div>