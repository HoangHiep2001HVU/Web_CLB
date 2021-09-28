<div class="menu">
	<img src="public/img/clb.png" />
	<div class="menu_top">
		<ul class="nav">
			<?php 
				if(isset($_GET["email"])){
					$email = $_GET["email"];
					echo "<li><a href='index.php?email=$email'>Trang chủ</a></li>";
				}
				else {
					echo "<li><a href='index.php'>Trang chủ</a></li>";
				}
			?>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
            <li>
				Các nhóm
				<ul class="sub_Group">
					<?php groups($conn); ?>
				</ul>
			</li>
            <li><a href="#">Diễn đàn</a></li>
			<?php 
				if(isset($_GET["email"])){
					$email = $_GET["email"];
					$name = username($conn, $user_id, $email, $role);
					echo "<li class='users'><a href='index.php'>Đăng xuất</a></li>";
					echo "<li class='users'><a href='#'>$name</a></li>";
				}
				else {
					$log = 'users("login","log");';
					$reg = 'users("register","reg");';
					echo "<li onclick='$reg' class='users'>Đăng ký</li>";
					echo "<li onclick='$log' class='users'>Đăng nhập</li>";
				}
			?>
		</ul>
	</div>
</div>

<div class="banner_top">
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
		if($role == 1){
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
		<?php sl_img($conn); ?>
		<script type="text/javascript">
			$(document).ready(function(){
				Next();
				Back();
			});
		</script>
	</div>
	
</div>