<div class="grid wide">
	<div class="menu">
		<img src='../public/img/clb.png' alt='Logo menu'/>
		<div class="menu_top">
			<div class="mb_menu" onclick="menu_mobile();">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
				</svg>
			</div>
			<ul class="nav">
				<?php
				if (isset($_GET["email"])) {
					$email = $_GET["email"];
					$name = username($user_id, $email, $role);
					echo "<li><a href='index.php?email=$email'>Trang chủ</a></li>";
				} else {
					echo "<li><a href='index.php'>Trang chủ</a></li>";
				}
				?>
				<li>
					Các nhóm
					<ul class="sub_Group">
						<?php groups(); ?>
					</ul>
				</li>
				<?php
					if (isset($_GET["email"])) {
						echo "<li><a href='forum.php?email=$email'>Diễn đàn</a></li>
						<li><a href='about_us.php?email=$email'>Giới thiệu</a></li>";
					} else {
						echo "<li><a href='forum.php'>Diễn đàn</a></li>
						<li><a href='about_us.php'>Liên hệ</a></li>";
					}

					if($role == 1){
						echo "<li><a href='admin.php?email=$email&tab=tab_1'>Quản trị</a></li>";
					}
					
				?>
			</ul>

			<ul class="mb_users">
				<?php
				if (isset($_GET["email"])) {
					echo "<li class='users'><a href='index.php'>Đăng xuất</a></li>";
					echo "<li class='users'><a href='#'>$name</a></li>";
				} else {
					if(isset($_GET["id"]) || isset($_GET["theme"])){
						echo "<li class='users'><a href='users/register.php?x=1'>Đăng ký</a></li>";
						echo "<li class='users'><a href='users/login.php?x=1'>Đăng nhập</a></li>";
					}
					else{
						echo "<li class='users'><a href='users/register.php?x=0'>Đăng ký</a></li>";
						echo "<li class='users'><a href='users/login.php?x=0'>Đăng nhập</a></li>";
					}
				}
				?>
			</ul>
		</div>
	</div>

	<div class="banner_top grid wide">
		<div class="tranfer">
			<svg xmlns="http://www.w3.org/2000/svg" class="left" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="Back();">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
			</svg>

			<svg xmlns="http://www.w3.org/2000/svg" class="right" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="Next();">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
			</svg>
		</div>

		<div class="slide_img">
			<?php sl_img(); ?>
		</div>

	</div>
</div>