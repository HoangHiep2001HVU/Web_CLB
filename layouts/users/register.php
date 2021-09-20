<!--Giao diện đăng ký-->
<div id="register" class="modal">
	<span class="close" id="reg">&times;</span>
	<div class="bg">
		<img src="public/img/bg_reg.jpg" alt="background img" />
	</div>
	
	<div class="form">
		<form method="POST" id="form_reg">
			<h1>Đăng ký tài khoản</h1>
				
			<div class="form_group">
				<input type="text" class="form_control" id="name" placeholder="Nhập vào tên" name="name">
			</div>
			
			<div class="form_group">
				<input type="date" class="form_control" id="birthday" placeholder="Nhập vào ngày sinh" name="birthday">
			</div>
					
			<div class="form_group">
				<input type="email" class="form_control" id="email" placeholder="Nhập vào email" name="email">
			</div>
					
			<div class="form_group">
				<input type="text" class="form_control" id="_class" placeholder="Nhập vào lớp" name="_class">
			</div>
					
			<div class="form_group">
				<input type="text" class="form_control" id="sex" placeholder="Nhập vào giới tính" name="sex">
			</div>
					
			<div class="form_group">
				<input type="password" class="form_control" id="_password" placeholder="Nhập vào mật khẩu" name="password">
			</div>
				
			<div class="form_group">
				<input type="password" class="form_control" id="rPassword" placeholder="Nhập lại mật khẩu" name="rPassword">
			</div>
				
			<button type="submit" name="register" id="insert_acc">Đăng ký</button>
		</form>
		
		<script type="text/javascript">
			$('#insert_acc').on('click',function(){
				var name = $('#name').val();
				var birthday = $('#birthday').val();
				var email = $('#email').val();
				var _class = $('#_class').val();
				var sex = $('#sex').val();
				var _password = $('#_password').val();
				var rPassword = $('#rPassword').val();
				
				if(name== ''){
					$("#name").css("border-color", "red");
					$('#name').attr('placeholder','Vui lòng nhập tên');
				}
				if(email== ''){
					$("#email").css("border-color", "red");
					$('#email').attr('placeholder','Vui lòng nhập email');
				}
				if(_class== ''){
					$("#_class").css("border-color", "red");
					$('#_class').attr('placeholder','Vui lòng nhập lớp');
				}
				if(sex== ''){
					$("#sex").css("border-color", "red");
					$('#sex').attr('placeholder','Vui lòng nhập giới tính');
				}
				if(_password== ''){
					$("#_password").css("border-color", "red");
					$('#_password').attr('placeholder','Vui lòng nhập mật khẩu');
				}
				if(rPassword== ''){
					$("#rPassword").css("border-color", "red");
					$('#rPassword').attr('placeholder','Vui lòng nhập lại mật khẩu');
				}
				
				if(name != '' && email != '' && _class != '' && sex != '' && password != '' && rPassword != ''){
					alert(_password+"+"+rPassword);
				}
			});
		</script>
	<div>
</div>
