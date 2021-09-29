<!--tải ảnh sl lên-->
<div id="upload_sl_img" class="modal">
	<span class="close" id="close_sl">&times;</span>
	<div class="bg">
		<img src="public/img/backgrounds/bg_insert_img.jpg" alt="background img" />
	</div>
	<div class="form">
		<form method="POST" id="upload_sl" enctype="multipart/form-data">
			<h1>Thêm ảnh vào slide show</h1>
					
			<div class="form_group">
				<input type="text" id="header_img_sl" placeholder="Nhập vào tiêu đề của ảnh.." 
				name="header_img_sl" required minlength="5">
			</div>
					
			<div class="form_group">
				<textarea id="note_img_sl" cols="55" rows="6"
				placeholder="Nhập vào miêu tả cho ảnh" name="note_img_sl"></textarea>
			</div>
			
			<div class="form_group">
				<input type="file" class="form_control" id="file_img_sl" name="file_img_sl">
			</div>
				
			<button type="submit" name="upload_sl_img">Thêm</button>
		</form>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			upload_sl();
		});
	</script>
</div>
