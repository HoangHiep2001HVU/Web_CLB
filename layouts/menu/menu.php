<div class="grid wide">
	<div class="menu">
		<img src='/public/img/clb.png' alt='Logo menu'/>
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
				<li><a href="#">Diễn đàn</a></li>
				<li onclick="about_us();">Giới thiệu</li>
			</ul>

			<ul class="mb_users">
				<?php
				if (isset($_GET["email"])) {
					if ($_GET["email"] != "") {
						$email = $_GET["email"];
						$name = username($user_id, $email, $role);
						echo "<li class='users'><a href='index.php'>Đăng xuất</a></li>";
						echo "<li class='users'><a href='#'>$name</a></li>";
					} else {
						echo "<li class='users'><a href='layouts/users/register.php'>Đăng ký</a></li>";
						echo "<li class='users'><a href='layouts/users/login.php'>Đăng nhập</a></li>";
					}
				} else {
					echo "<li class='users'><a href='layouts/users/register.php'>Đăng ký</a></li>";
					echo "<li class='users'><a href='layouts/users/login.php'>Đăng nhập</a></li>";
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

		<?php
		$upload_sl_img = 'users("upload_sl_img","close_sl");';
		if ($role == 1) {
			echo "
					<div class='insert_slide_img'>
						<button name='button' type='button' onclick='$upload_sl_img'>
							<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
							<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z' />
							</svg>
							Thêm ảnh
						</button>
					</div>
				";
		}
		?>

		<div class="slide_img">
			<?php sl_img(); ?>
			<script type="text/javascript">
				$(document).ready(function() {
					Next();
					Back();
				});
			</script>
		</div>

	</div>
</div>