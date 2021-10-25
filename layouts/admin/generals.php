<div class="header row">
    <div class="col l-12">
        <h1>Quản lý chung</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm thông tin <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_general" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="type">Chọn thể loại:</label>
                    <select name="type" id="type">
                        <option value="Sự kiện">Sự kiện</option>
                        <option value="Giới thiệu">Giới thiệu</option>
                    </select>
                </div>

                <div class="form_group">
                    <label for="header_general">Tiêu đề:</label>
                    <input type="text" id="header_general" placeholder="Nhập vào tiêu đề..." name="header_general" required minlength="5">
                </div>

                <div class="form_group">
                    <p>Nội dung:</p>
                    <textarea id="note_general" cols="55" rows="6" placeholder="Nhập vào nội dung..." name="note_general"></textarea>
                </div>

                <div class="form_group">
                    <label for="file_general">Chọn file:</label>
                    <input type="file" accept=".jpeg,.jpg,.png,.gif,.mp4,.mov,.avi" class="form_control" id="file_general" name="file_general">
                </div>

                <div class="group_button">
                    <button type="submit" name="upload" id="insert">Thêm</button>
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
                    <h2>Chỉnh sửa video<button class="btn_close" onclick="Hide_update();">x</button></h2>
                </div>
            </div>
            <div class="row">
                <div class="col l-10 l-o-1">
                    <form method="POST" id="update_general" enctype="multipart/form-data">
                        <div class="form_group">
                            <label for="type_update">Chọn thể loại:</label>
                            <select name="type" id="type_update">
                                <option value="Sự kiện">Sự kiện</option>
                                <option value="Giới thiệu">Giới thiệu</option>
                            </select>
                        </div>

                        <div class="form_group">
                            <label for="id_update">Id:</label>
                            <input type="text" id="id_update" name="id_update" placeholder="Vui lòng chọn thể loại cần chỉnh sửa" required minlength="1" readonly>
                        </div>

                        <div class="form_group">
                            <label for="header_update">Tiêu đề:</label>
                            <input type="text" id="header_update" placeholder="Nhập vào tiêu đề .." name="header_update" required minlength="5">
                        </div>

                        <div class="form_group">
                            <p>Nội dung:</p>
                            <textarea id="note_update" cols="55" rows="6" placeholder="Nhập vào nội dung..." name="note_update"></textarea>
                        </div>

                        <div class="form_group">
                            <label for="file_choice">File đã chọn:</label>
                            <input type="text" id="file_choice" name="file_choice" readonly>
                        </div>

                        <div class="form_group">File khác khác:</label>
                            <input type="file" accept=".jpeg,.jpg,.png,.gif,.mp4,.mov,.avi" class="form_control" id="file_update" name="file_update">
                        </div>

                        <div class="group_button">
                            <button type="submit" name="update" id="btn_update">Lưu</button>
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
            <p>Tìm kiếm: <input type="text" id="search_general" onkeyup="search('search_general','table_general',1);" placeholder="Tìm kiếm theo tiêu đề" title="Tìm kiếm theo tiêu đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_general" class="col l-12">
        <tr class="row">
            <th class="col l-1">ID</th>
            <th class="col l-1">Tiêu đề</th>
            <th class="col l-1">Thể loại</th>
            <th class="col l-2">Nội dung</th>
            <th class="col l-1">Files</th>
            <th class="col l-2">Ngày thêm</th>
            <th class="col l-2">Ngày cập nhập</th>
            <th class="col l-1">Sửa</th>
            <th class="col l-1">xóa</th>
        </tr>
        <?php
        load_general();
        ?>
    </tbody>
</table>
<?php
 page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_general();
        update_general();
    });
</script>