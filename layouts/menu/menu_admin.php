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
                <button id="tab_1" onclick="menu_admin(this.id,email);">quản lý VD giới thiệu</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_2" onclick="menu_admin(this.id,email);">quản lý nhóm</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_3" onclick="menu_admin(this.id,email);">quản lý sự kiện</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_4" onclick="menu_admin(this.id,email);">quản lý banner</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_5" onclick="menu_admin(this.id,email);">quản lý chủ đề diến đàn</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_6" onclick="menu_admin(this.id,email);">quản lý câu hỏi</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_7" onclick="menu_admin(this.id,email);">quản lý ban chủ nhiệm</button>
            </div>
        </div>
        <div class="row">
            <div class="col l-12">
                <button id="tab_8" onclick="menu_admin(this.id,email);">quản lý thành viên</button>
            </div>
        </div>
    </div>
</div>