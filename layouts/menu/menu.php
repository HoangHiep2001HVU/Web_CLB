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
					<li><a href="#">Nhóm lập trình</a></li>
					<li><a href="#">Nhóm E-Spost</a></li>
					<li><a href="#">Nhóm Office</a></li>
					<li><a href="#">Nhóm Đồ Hoạ</a></li>
					<li><a href="#">Nhóm UD Công nghệ</a></li>
				</ul>
			</li>
            <li><a href="#">Diễn đàn</a></li>
		</ul>
	</div>
	
	<div class="right">
		<ul>
			<li><a href="layouts/users/login.php">Đăng nhập</a></li>
			<li><a href="layouts/users/register.php">Đăng ký</a></li>
			<!--<li><a href="#">Hoàng Hiệp</a></li>-->
            <li><a href="#">Đăng xuất</a></li>
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
	
	<div class="slide_img">
		<img id="sl_1" src="public/img/img_1.jpg" alt="anh 1" onclick="click_img(this.id,this.src,this.alt);"/>
		<img id="sl_2" src="public/img/img1.jpg" alt="anh 2" onclick="click_img(this.id,this.src,this.alt);"/>
		<img id="sl_3" src="public/img/img_1.jpg" alt="anh 3" onclick="click_img(this.id,this.src,this.alt);"/>
	</div>
	
	<?php require "layouts/body/click_img.php"; ?>

</div>