<div class="header row">
    <div class="col l-12">
        <h1>Quản lý thông tin liên hệ</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm phương thức liên hệ <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_contact" enctype="multipart/form-data">

                <div class="group_button">
                    <p style="color: red; float: left">Khuyến khích chỉnh sửa phương thức liên hệ đã có sẵn!</p>
                    <br style="clear: left;">
                </div>

                <div class="form_group">
                    <label for="contact_method">Phương thức:</label>
                    <input type="text" id="contact_method" placeholder="Nhập vào phương thức ..." name="contact_method" required minlength="3">
                </div>

                <div class="form_group">
                    <label for="contact_link">Liên kết:</label>
                    <input type="text" id="contact_link" placeholder="Có thể là link, sđt, email, ..." name="contact_link" required minlength="3">
                </div>

                <div class="form_group">
                    <label for="contact_logo">Logo:</label>
                    <input type="file" id="contact_logo" name="contact_logo" required minlength="3">
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
                    <h2>Chỉnh phương thức liên hệ<button class="btn_close" onclick="Hide_update()">x</button></h2>
                </div>
            </div>
            <div class="row">
                <div class="col l-10 l-o-1">
                    <form method="POST" id="update_contact" enctype="multipart/form-data">

                        <div class="form_group">
                            <label for="id_update">Id:</label>
                            <input type="text" id="id_update" placeholder="Nhập vào phương thức ..." name="id_update" required minlength="3" readonly>
                        </div>

                        <div class="form_group">
                            <label for="method_update">Phương thức:</label>
                            <input type="text" id="method_update" placeholder="Nhập vào phương thức ..." name="method_update" required minlength="3">
                        </div>

                        <div class="form_group">
                            <label for="contact_update">Liên kết:</label>
                            <input type="text" id="contact_update" placeholder="Có thể là link, sđt, email, ..." name="contact_update" required minlength="3">
                        </div>

                        <div class="form_group">
                            <label for="logo_choice">Logo cũ:</label>
                            <input type="text" id="logo_choice" name="logo_choice" required minlength="3" readonly>
                        </div>

                        <div class="form_group">
                            <label for="logo_update">Logo mới(nếu có):</label>
                            <input type="file" id="logo_update" name="logo_update">
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
        <h2>Danh sách thông tin liên hệ</h2>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_contact" onkeyup="search('search_contact','table_contact',1);" placeholder="Tìm kiếm theo phương thức liên hệ" title="Tìm kiếm" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_contact" class="col l-12">
        <tr class="row">
            <th class="col l-1">ID</th>
            <th class="col l-2">Phương thức</th>
            <th class="col l-2">Liên kết</th>
            <th class="col l-1">Logo</th>
            <th class="col l-2">Ngày thêm</th>
            <th class="col l-2">Ngày cập nhập</th>
            <th class="col l-1">Sửa</th>
            <th class="col l-1">xóa</th>
        </tr>
        <?php
        contact();
        ?>
    </tbody>
</table>
<?php
page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_contact();
        update_contact();
    });
</script>