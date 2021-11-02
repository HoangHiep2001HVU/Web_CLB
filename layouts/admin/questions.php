<div class="header row">
    <div class="col l-12">
        <h1>Quản lý chủ đề câu hỏi của diễn đàn</h1>
    </div>
</div>
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
            echo "<form method='POST' id='upload_question' enctype='multipart/form-data'>

                <div class='form_group'>
                    <label for='id_topic'>Chọn chủ đề:</label>
                    <select name='id_topic' id='id_topic'>";
            topic_choice();

            echo "</select>
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
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="update_data">
        <div class="col l-12">
            <div class="header row">
                <div class="col l-12">
                    <hr>
                    <h2>Chỉnh sửa chủ đề câu hỏi<button class="btn_close" onclick="Hide_update()">x</button></h2>
                </div>
            </div>
            <div class="row">
                <div class="col l-10 l-o-1">
                    <?php
                    echo "<form method='POST' id='update_question' enctype='multipart/form-data'>
                        <div class='form_group'>
                            <label for='id_update'>Id:</label>
                            <input type='text' id='id_update'  name='id_update' readonly>
                        </div>

                        <div class='form_group'>
                            <label for='id_topic_update'>Chọn chủ đề:</label>
                            <select name='id_topic_update' id='id_topic_update'>";
                            topic_choice();

                            echo "</select>
                        </div>

                        <div class='form_group'>
                            <label for='name_question_update'>Tên câu hỏi:</label>
                            <input type='text' id='name_question_update' placeholder='Nhập vào tên câu hỏi ...' name='name_question_update' required minlength='5'>
                        </div>

                        <div class='form_group'>
                            <label for='note_question_update'>Miêu tả chi tiết:</label>
                            <input type='text' id='note_question_update' placeholder='Nhập vào miêu tả chi tiết của câu hỏi...' name='note_question_update' required minlength='5'>
                        </div>

                        <div class='group_button'>
                            <button type='submit'>Lưu</button>
                        </div>
                    </form>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Danh sách chủ đề</h2>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search" onkeyup="search('search','table_question',3);" placeholder="Tìm kiếm theo câu hỏi" title="Tìm kiếm" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_question" class="col l-12">
        <tr class="row">
            <th class="col l-1">ID</th>
            <th class="col l-1">ID chủ đề</th>
            <th class="col l-1">ID Người tạo</th>
            <th class="col l-1">Câu hỏi</th>
            <th class="col l-2">Miêu tả</th>
            <th class="col l-2">Ngày tạo</th>
            <th class="col l-2">Ngày cập nhập</th>
            <th class="col l-1">Sửa</th>
            <th class="col l-1">xóa</th>
        </tr>
        <?php
        question();
        ?>
    </tbody>
</table>
<?php
page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_question();
        update_question();
    });
</script>