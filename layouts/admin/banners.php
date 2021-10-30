<div class="header row">
    <div class="col l-12">
        <h1>Quản lý banner</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm banner <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_sl" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="header_img_sl">Tiêu đề:</label>
                    <input type="text" id="header_img_sl" placeholder="Nhập vào tiêu đề của ảnh.." name="header_img_sl" required minlength="5">
                </div>

                <div class="form_group">
                    <p>Nội dung:</p>
                    <textarea id="note_img_sl" cols="55" rows="6" placeholder="Nhập vào nội dung cho ảnh..." name="note_img_sl"></textarea>
                </div>

                <div class="form_group">
                    <label for="file_img_sl">Chọn ảnh:</label>
                    <input type="file" accept=".jpeg,.jpg,.png,.gif" class="form_control" id="file_img_sl" name="file_img_sl">
                </div>

                <div class="group_button">
                    <button type="submit" name="upload_sl_img" id="insert">Thêm</button>
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
                    <h2>Chỉnh sửa banner<button class="btn_close" onclick="Hide_update();">x</button></h2>
                </div>
            </div>
            <div class="row">
                <div class="col l-10 l-o-1">
                    <form method="POST" id="update_sl" enctype="multipart/form-data">

                        <div class="form_group">
                            <label for="id_update">Id:</label>
                            <input type="text" id="id_update" name="id_update" placeholder="Vui lòng chọn đối tượng cần chỉnh sửa...." required minlength="1" readonly>
                        </div>

                        <div class="form_group">
                            <label for="header_update_sl">Tiêu đề:</label>
                            <input type="text" id="header_update_sl" placeholder="Nhập vào tiêu đề của ảnh..." name="header_update_sl" required minlength="5">
                        </div>

                        <div class="form_group">
                            <p>Nội dung:</p>
                            <textarea id="note_update_sl" cols="55" rows="6" placeholder="Nhập vào nội dung cho ảnh..." name="note_update_sl"></textarea>
                        </div>

                        <div class="form_group">
                            <label for="file_choice">Ảnh đã chọn:</label>
                            <input type="text" id="file_choice" name="file_choice" readonly>
                        </div>

                        <div class="form_group">Ảnh khác khác:</label>
                            <input type="file" accept=".jpeg,.jpg,.png,.gif" class="form_control" id="file_update_sl" name="file_update_sl">
                        </div>

                        <div class="group_button">
                            <button type="submit" name="upload_update_sl" id="btn_update">Lưu</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Danh sách banner</h2>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_banner" onkeyup="search('search_banner','table_banner',1);" placeholder="Tìm kiếm theo tiêu đề" title="Tìm kiếm theo tiêu đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số banner: 0</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_banner" class="col l-12">
        <tr class="row">
            <th class="col l-1">ID</th>
            <th class="col l-2">Tiêu đề</th>
            <th class="col l-1">Ảnh</th>
            <th class="col l-2">Nội dung</th>
            <th class="col l-2">Ngày thêm</th>
            <th class="col l-2">Ngày cập nhập</th>
            <th class="col l-1">Sửa</th>
            <th class="col l-1">Xóa</th>
        </tr>
        <?php
        load_slide_imgs();
        ?>
    </tbody>
</table>
<?php
    page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_sl();
        Update_sl();
    });
</script>
