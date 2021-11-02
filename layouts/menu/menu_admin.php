<div class="col l-3">
    <?php
    $email = $_GET["email"];
    echo "<script type='text/javascript'>
           var email= '$email';
        </script>";
    ?>
    <div id="menu_admin">
        <div class="row">
            <div class="col l-12">
                <button id="tab_1" onclick="menu_admin(this.id,email);">Quản lý chung</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_2" onclick="menu_admin(this.id,email);">Quản lý nhóm</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_3" onclick="menu_admin(this.id,email);">Quản lý sự kiện</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_4" onclick="menu_admin(this.id,email);">Quản lý banner</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_5" onclick="menu_admin(this.id,email);">Quản lý thành viên</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_6" onclick="menu_admin(this.id,email);">Quản lý chủ đề câu hỏi</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_7" onclick="menu_admin(this.id,email);">Quản lý câu hỏi</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_8" onclick="menu_admin(this.id,email);">Quản lý câu trả lời</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_9" onclick="menu_admin(this.id,email);">Quản lý thông tin liên hệ</button>
            </div>
        </div>
    </div>
</div>