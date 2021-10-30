<div class="header row">
    <div class="col l-12">
        <h1>Quản lý sự kiện</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm sự kiện <button class="insert" onclick="insert('insert','upload');">+</button></h2>
    </div>
</div>
<div class="row">
    <div class="col l-o-1 l-o-12 l-10">
        <!--tải ảnh sl lên-->
        <div class="upload">
            <form method="POST" id="upload_even" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="group">Chọn nhóm:</label>
                    <select name="group" id="group">
                        <?php
                        group_choice();
                        ?>
                    </select>
                </div>

                <div class="form_group">
                    <label for="header_even">Tiêu đề:</label>
                    <input type="text" id="header_even" placeholder="Nhập vào tiêu đề .." name="header_even" required minlength="5">
                </div>

                <div class="form_group">
                    <label for="description_even">Mô tả:</label>
                    <input type="text" id="description_even" placeholder="Nhập vào tiêu đề .." name="description_even" required minlength="5">
                </div>

                <div class="form_group">
                    <p>Nội dung:</p>
                    <textarea id="note_even" cols="55" rows="6" placeholder="Nhập vào nội dung..." name="note_even" required minlength="5"></textarea>
                </div>

                <div class="form_group">
                    <p>Ngày bắt đầu:</p>
                    <input type="date" id="start_day" name="start_day" required>
                </div>

                <div class="form_group">
                    <p>Ngày kết thúc:</p>
                    <input type="date" id="end_day" name="end_day" required>
                </div>

                <div class="form_group">
                    <label for="file_even">Chọn file:</label>
                    <input type="file" accept=".jpeg,.jpg,.png" class="form_control" id="file_even" name="file_even">
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
                    <form method="POST" id="update_even" enctype="multipart/form-data">
                        <div class="form_group">
                            <label for="group_update">Chọn nhóm:</label>
                            <select name="group_update" id="group_update">
                                <?php
                                group_choice();
                                ?>
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
                            <label for="description_update">Mô tả:</label>
                            <input type="text" id="description_update" placeholder="Nhập vào tiêu đề .." name="description_update" required minlength="5">
                        </div>

                        <div class="form_group">
                            <p>Nội dung:</p>
                            <textarea id="note_update" cols="55" rows="6" placeholder="Nhập vào nội dung..." name="note_update" required minlength="5"></textarea>
                        </div>

                        <div class="form_group">
                            <p>Ngày bắt đầu:</p>
                            <input type="date" id="start_day_update" name="start_day_update" required>
                        </div>

                        <div class="form_group">
                            <p>Ngày kết thúc:</p>
                            <input type="date" id="end_day_update" name="end_day_update" required>
                        </div>

                        <div class="form_group">
                            <label for="file_choice">File đã chọn:</label>
                            <input type="text" id="file_choice" name="file_choice" readonly>
                        </div>

                        <div class="form_group">
                            <label for="file_even">Chọn file:</label>
                            <input type="file" accept=".jpeg,.jpg,.png" class="form_control" id="file_even" name="file_even">
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
            <p>Tìm kiếm: <input type="text" id="search_even" onkeyup="search('search_even','table_even',2);" placeholder="Tìm kiếm theo tiêu đề" title="Tìm kiếm theo tiêu đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p id="number_img">Tổng số: 0</p>
        </div>
    </div>
</div>
<table class="data_even row" style="margin: 0px 10px 0px 10px;">
    <tbody id="table_even" style="width: 100%; overflow: auto;">
        <tr style="width: 130%">
            <th style="width:5%; ">ID</th>
            <th style="width:5%; ">ID nhóm</th>
            <th style="width:10%; ">Tiêu đề</th>
            <th style="width:20%; ">Mô tả</th>
            <th style="width:20%; ">Nội dung</th>
            <th style="width:10%; ">Files</th>
            <th style="width:10%; ">Ngày bắt dầu</th>
            <th style="width:10%; ">Ngày kết thúc</th>
            <th style="width:10%; ">Ngày thêm</th>
            <th style="width:10%; ">Ngày sửa</th>
            <th style="width:5%; ">Sửa</th>
            <th style="width:5%; ">Xóa</th>
        </tr>
        <?php
        admin_load_even();
        ?>
    </tbody>
</table>
<?php
page();
?>
<script type="text/javascript">
    $(document).ready(function() {
        upload_even();
        update_even();
    });
</script>