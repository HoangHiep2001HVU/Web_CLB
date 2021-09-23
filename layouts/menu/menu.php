<div class="menu">
	<img src="public/img/clb.png" />
	<div class="left">
		<ul>
			<li><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
            <li>
				<a href="#">Các nhóm</a>
				<ul class="sub_Group">
					<?php groups($conn); ?>
				</ul>
			</li>
            <li><a href="#">Diễn đàn</a></li>
		</ul>
	</div>
	
	<div class="right">
		<ul>
			<?php 
				if(isset($_GET["email"])){
					$email = $_GET["email"];
					$name = username($conn, $user_id, $email, $role);
					echo "<li><a href='#'>$name</a></li>";
					echo "<li><a href='index.php'>Đăng xuất</a></li>";
				}
				else {
					$log = 'users("login","log");';
					$reg = 'users("register","reg");';
					echo "<li onclick='$log'>Đăng nhập</li>";
					echo "<li onclick='$reg'>Đăng ký</li>";
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
		<img id="sl_1" src="public/img/img_1.jpg" alt="anh 1" onclick="click_img(this.id,this.src,this.alt);"/>
		<img id="sl_2" src="public/img/img1.jpg" alt="anh 2" onclick="click_img(this.id,this.src,this.alt);"/>
		<img id="sl_3" src="public/img/img_1.jpg" alt="anh 3" onclick="click_img(this.id,this.src,this.alt);"/>
	</div>
	
</div>