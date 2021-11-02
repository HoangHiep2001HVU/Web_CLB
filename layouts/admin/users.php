<div class="header row">
    <div class="col l-12">
        <h1>Quản lý thành viên</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm thành viên <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_user" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="role">Chọn vai trò:</label>
                    <select name="role" id="role">
                        <?php
                        role_clb();
                        ?>
                    </select>
                </div>

                <div class="form_group">
                    <label for="name">Họ tên:</label>
                    <input type="text" class="form_control" id="name" placeholder="Nhập vào tên" name="name" required minlength="2">
                </div>

                <div class="form_group">
                    <label for="birthday">Ngày sinh:</label>
                    <input type="date" class="form_control" id="birthday" name="birthday" required>
                </div>

                <div class="form_group">
                    <label for="email">Email:</label>
                    <input type="email" class="form_control" id="email" placeholder="Nhập vào email" name="email">
                </div>

                <div class="form_group">
                    <label for="_class">Lớp:</label>
                    <input type="text" class="form_control" id="_class" placeholder="Nhập vào lớp" name="_class" required minlength="2">
                </div>

                <div class="form_group">
                    <label for="_gender">Giới tính:</label>
                    <select name="_gender" id="_gender">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>

                <div class="form_group">
                    <label for="file">Ảnh:</label>
                    <input type="file" accept=".jpeg,.jpg,.png" class="form_control" id="file" name="file">
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
                    <form method="POST" id="update_user" enctype="multipart/form-data">
                        <div class="form_group">
                            <label for="id_update">Id:</label>
                            <input type="text" class="form_control" id="id_update" name="id_update" readonly>
                        </div>

                        <div class="form_group">
                            <label for="role_update">Chọn vai trò:</label>
                            <select name="role_update" id="role_update">
                                <?php
                                role_clb();
                                ?>
                            </select>
                        </div>

                        <div class="form_group">
                            <label for="name_update">Họ tên:</label>
                            <input type="text" class="form_control" id="name_update" placeholder="Nhập vào tên" name="name_update" required minlength="2">
                        </div>

                        <div class="form_group">
                            <label for="birthday_update">Ngày sinh:</label>
                            <input type="date" class="form_control" id="birthday_update" name="birthday_update" required>
                        </div>

                        <div class="form_group">
                            <label for="email_update">Email:</label>
                            <input type="email" class="form_control" id="email_update" placeholder="Nhập vào email...." name="email_update">
                        </div>

                        <div class="form_group">
                            <label for="_class_update">Lớp:</label>
                            <input type="text" class="form_control" id="_class_update" placeholder="Nhập vào lớp" name="_class_update" required minlength="2">
                        </div>

                        <div class="form_group">
                            <label for="_gender_update">Giới tính:</label>
                            <select name="_gender_update" id="_gender_update">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>

                        <div class="form_group">
                            <label for="file_choice">File đã chọn:</label>
                            <input type="text" id="file_choice" placeholder="Chưa có ảnh" name="file_choice" readonly>
                        </div>

                        <div class="form_group">
                            <label for="file_update">Ảnh:</label>
                            <input type="file" accept=".jpeg,.jpg,.png" class="form_control" id="file_update" name="file_update">
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
            <p>Tìm kiếm: <input type="text" id="search" onkeyup="search('search','table_user',1);" placeholder="Tìm kiếm theo tiêu đề" title="Tìm kiếm theo tiêu đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data_even row" style="margin: 0px 10px 0px 10px;">
    <tbody id="table_user" style="width: 100%; overflow: auto;">
        <tr style="width: 130%">
            <th style="width:5%; ">ID</th>
            <th style="width:5%; ">Họ tên</th>
            <th style="width:10%; ">Email</th>
            <th style="width:20%; ">Ngày sinh</th>
            <th style="width:20%; ">Lớp</th>
            <th style="width:10%; ">Giới tính</th>
            <th style="width:10%; ">Ảnh</th>
            <th style="width:10%; ">Vai trò</th>
            <th style="width:10%; ">Ngày tạo</th>
            <th style="width:10%; ">Ngày sửa</th>
            <th style="width:10%; ">Reset MK</th>
            <th style="width:5%; ">Sửa</th>
            <th style="width:5%; ">Xóa</th>
        </tr>
        <?php
        users();
        ?>
    </tbody>
</table>
<?php
page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_user();
        update_user();
    });
</script>