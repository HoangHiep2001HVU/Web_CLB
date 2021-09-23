<!--Giao diện đăng nhập-->
<div id="login" class="modal">
	<span class="close" id="log">&times;</span>
	<div class="bg">
		<img src="public/img/backgrounds/bg_login.jpg" alt="background img" />
	</div>
	<div class="form">
		<form method="POST" id="login_form">
			<h1>Đăng nhập tài khoản</h1>
					
			<div class="form_group">
				<input type="email" class="form_control" id="email_login" placeholder="Nhập vào email" 
				name="email" required minlength="5">
			</div>
					
			<div class="form_group">
				<input type="password" class="form_control" id="password_login" placeholder="Nhập vào mật khẩu" 
				name="password" required minlength="6">
			</div>
				
			<button type="button" name="login" onclick="log();">Đăng nhập</button>
		</form>
	</div>
</div>
