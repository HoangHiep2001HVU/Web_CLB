<!--Giao diện đăng ký-->
<div id="register" class="modal">
	<span class="close" id="reg">&times;</span>
	<div class="bg">
		<img src="public/img/backgrounds/bg_reg.jpg" alt="background img" />
	</div>
	
	<div class="form">
		<form method="POST" id="form_reg">
			<h1>Đăng ký tài khoản</h1>
				
			<div class="form_group">
				<input type="text" class="form_control" id="name" placeholder="Nhập vào tên" 
				name="name" required minlength="2">
			</div>
			
			<div class="form_group">
				<input type="date" class="form_control" id="birthday" placeholder="Nhập vào ngày sinh" 
				name="birthday">
			</div>
					
			<div class="form_group">
				<input type="email" class="form_control" id="email" placeholder="Nhập vào email" 
				name="email">
			</div>
					
			<div class="form_group">
				<input type="text" class="form_control" id="_class" placeholder="Nhập vào lớp" 
				name="_class" required minlength="2">
			</div>
					
			<div class="form_group">
				<select name="gender" id="gender">
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
					
			<div class="form_group">
				<input type="password" class="form_control" id="_password" placeholder="Nhập vào mật khẩu" 
				name="password" required minlength="6" maxlength="20">
			</div>
				
			<div class="form_group">
				<input type="password" class="form_control" id="rPassword" placeholder="Nhập lại mật khẩu" 
				name="rPassword" required minlength="6" maxlength="20">
			</div>
				
			<button type="button" name="register" id="insert_acc" onclick="reg();">Đăng ký</button>
		</form>
	</div>
</div>
