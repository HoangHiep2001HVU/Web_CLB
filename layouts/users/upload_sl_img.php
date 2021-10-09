<!--tải ảnh sl lên-->
<div id="upload_sl_img" class="modal">
	
	<div class="form">
	<span class="close" id="close_sl">&times;</span>
		<form method="POST" id="upload_sl" enctype="multipart/form-data">
			<div class="header_sl">
				<img src="../../public/img/clb.png" alt="Ảnh logo">
				<h1>Thêm ảnh vào slide show</h1>
			</div>

			<div class="form_group">
				<label for="header_img_sl">Tiêu đề:</label>
				<input type="text" id="header_img_sl" placeholder="Nhập vào tiêu đề của ảnh.." name="header_img_sl" required minlength="5">
			</div>

			<div class="form_group">
				<p>Miêu tả:</p>
				<textarea id="note_img_sl" cols="55" rows="6" placeholder="Nhập vào miêu tả cho ảnh" name="note_img_sl"></textarea>
			</div>

			<div class="form_group">
				<label for="file_img_sl">Chọn file:</label>
				<input type="file" class="form_control" id="file_img_sl" name="file_img_sl">
			</div>

			<div class="group_button">
				<button type="submit" name="upload_sl_img" id="insert">Thêm</button>
				<button type="submit" name="cancel" id="cancel">Hủy</button>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			upload_sl();
		});
	</script>
</div>