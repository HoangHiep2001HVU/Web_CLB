<div class="header row">
    <div class="col l-12">
        <h1>Quản lý câu trả lời</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm câu trả lời <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_post" enctype="multipart/form-data">
                <?php
                echo "<div class='form_group'>
                            <label for='id_question'>Id chủ đề:</label>
                            <select name='id_question' id='id_question'>";
                question_choice();

                echo "</select>
                        </div>

                        <div class='form_group' style='display: none;'>
                            <label for='user_create'>Id người tạo:</label>
                            <input type='text' id='user_create' name='user_create' readonly value='$user_id'>
                        </div>";
                ?>
                <div class="form_group">
                    <p>Nội dung trả lời:</p>
                    <textarea id="content_post_user" cols="55" rows="6" placeholder="Nhập vào nội dung..." name="content_post_user"></textarea>
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
            <p>Tìm kiếm: <input type="text" id="search" onkeyup="search('search','table_reply',3);" placeholder="Tìm kiếm theo câu hỏi" title="Tìm kiếm" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_reply" class="col l-12">
        <tr class="row">
            <th class="col l-1">ID</th>
            <th class="col l-1">ID câu hỏi</th>
            <th class="col l-1">ID Người trả lời</th>
            <th class="col l-3">Nội dung trả lời</th>
            <th class="col l-1">File</th>
            <th class="col l-1">Số like</th>
            <th class="col l-1">Ngày tạo</th>
            <th class="col l-1">Ngày sửa</th>
            <th class="col l-1">Sửa</th>
            <th class="col l-1">Xóa</th>
        </tr>
        <?php
        load_post();
        ?>
    </tbody>
</table>
<?php
page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_post();
        // update_question();
    });
</script>