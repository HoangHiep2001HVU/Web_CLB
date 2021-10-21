<div class="header row">
    <div class="col l-12">
        <h1>Quản lý banner</h1>
    </div>
</div>
<div class="header row">
    <div class="col l-12">
        <hr>
        <h2>Thêm banner <button class="insert_sl" onclick="insert('insert_sl','upload');">+</button></h2>
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
                    <textarea id="note_img_sl" cols="55" rows="6" placeholder="Nhập vào nội dung cho ảnh" name="note_img_sl"></textarea>
                </div>

                <div class="form_group">
                    <label for="file_img_sl">Chọn file:</label>
                    <input type="file" class="form_control" id="file_img_sl" name="file_img_sl">
                </div>

                <div class="group_button">
                    <button type="submit" name="upload_sl_img" id="insert">Thêm</button>
                </div>
            </form>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                upload_sl();
            });
        </script>
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
            <th class="col l-2">Ảnh</th>
            <th class="col l-3">Nội dung</th>
            <th class="col l-2">Ngày cập nhập</th>
            <th class="col l-1">Sửa</th>
            <th class="col l-1">xóa</th>
        </tr>
        <?php
            load_slide_imgs();
        ?>
    </tbody>
</table>
<div class="row">
    <div class="number_row col l-12">
        <button id="back">
            < </button>
                <button id="1"> 1 </button>
                <button id="2"> 2 </button>
                <button id="next"> > </button>
    </div>
</div>
