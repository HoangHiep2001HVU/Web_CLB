<div id="body_home">
	<div id="about" class="grid wide">
		<div class="row">
			<div class="col l-12 m-12 c-12">
				<div class='header row'>
					<div class='col l-12 m-12 c-12'>
						<h1>Giới thiệu về CLB Tin Học</h1>
					</div>
				</div>
				<?php
				load_vd_gt();
				?>
			</div>
		</div>
	</div>

	<div class="grid wide">
		<div class="row">
			<div class="header col l-12 m-12 c-12">
				<h1>Sự kiện đang diễn ra</h1>
			</div>
		</div>
		<div class="row">
			<?php
			load_even();
			?>
		</div>
	</div>

	<?php
	_page('index.php');
	?>
</div>