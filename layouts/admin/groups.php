<div class="header row">
    <div class="col l-12">
        <h1>Quản lý nhóm</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm nhóm <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_group" enctype="multipart/form-data">

                <div class="form_group">
                    <label for="name_group">Tên nhóm:</label>
                    <input type="text" id="name_group" placeholder="Nhập vào tên nhóm ..." name="name_group" required minlength="5">
                </div>

                <div class="form_group">
                    <label for="leader_group">Trưởng nhóm:</label>
                    <input type="text" id="leader_group" placeholder="Nhập vào tên trưởng nhóm ..." name="leader_group" required minlength="5">
                </div>

                <div class="form_group">
                    <label for="link_leader_group">Link Facebook/Zalo:</label>
                    <input type="text" id="link_leader_group" placeholder="Nhập link Facebook/Zalo ..." name="link_leader_group" required minlength="5">
                </div>

                <div class="form_group">
                    <label for="img_leader_group">Ảnh trưởng nhóm:</label>
                    <input type="file" id="img_leader_group" name="img_leader_group" required>
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
                    <h2>Chỉnh sửa thông tin nhóm<button class="btn_close" onclick="Hide_update();">x</button></h2>
                </div>
            </div>
            <div class="row">
                <div class="col l-10 l-o-1">
                    <form method="POST" id="update_group" enctype="multipart/form-data">

                        <div class="form_group">
                            <label for="id_update">Id:</label>
                            <input type="text" id="id_update" name="id_update" placeholder="Vui lòng chọn nhóm" required minlength="1" readonly>
                        </div>

                        <div class="form_group">
                            <label for="name_update">Tên nhóm:</label>
                            <input type="text" id="name_update" name="name_update" placeholder="Vui lòng nhập tên nhóm" required minlength="1">
                        </div>

                        <div class="form_group">
                            <label for="leader_update">Trưởng nhóm:</label>
                            <input type="text" id="leader_update" placeholder="Nhập vào tên trưởng nhóm ..." name="leader_update" required minlength="5">
                        </div>

                        <div class="form_group">
                            <label for="link_leader_update">Link Facebook/Zalo:</label>
                            <input type="text" id="link_leader_update" placeholder="Nhập link Facebook/Zalo ..." name="link_leader_update" required minlength="5">
                        </div>

                        <div class="form_group">
                            <label for="img_leader_old">Ảnh trưởng nhóm:</label>
                            <input type="text" id="img_leader_old" name="img_leader_old" readonly>
                        </div>

                        <div class="form_group">
                            <label for="img_leader_update">Ảnh trưởng nhóm:</label>
                            <input type="file" id="img_leader_update" name="img_leader_update" required>
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
        <h2>Danh sách nhóm</h2>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_group" onkeyup="search('search_group','table_group',1);" placeholder="Tìm kiếm theo tên nhóm" title="Tìm kiếm theo tiêu đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data row" style="margin: 0px 10px 0px 10px;">
    <tbody id="table_group" style="width: 100%; overflow: auto;">
        <tr style="width: 130%">
            <th style="width: 5%;">ID</th>
            <th style="width: 20%;">Tên nhóm</th>
            <th style="width: 20%;">Trưởng nhóm</th>
            <th style="width: 15%;">Links</th>
            <th style="width: 10%;">Ảnh trưởng nhóm</th>
            <th style="width: 10%;">Ngày thêm</th>
            <th style="width: 10%;">Ngày cập nhập</th>
            <th style="width: 5%;">Sửa</th>
            <th style="width: 5%;">xóa</th>
        </tr>
        <?php
        load_group();
        ?>
    </tbody>
</table>
<?php
page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_group();
        update_group();
    });
</script>