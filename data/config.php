<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$this_page_first_result = 0;
	$results_per_page=0;
	$number_of_results=0;
	
	require "server/server.php";
	//Gọi đến file khai báo các biến và hằng số
	require "connect/connect.php";
	//Gọi đến file load các dữ liệu cần thiết cho web
	require "users/load_data.php";
	//Gọi đến file load các dữ liệu cần thiết cho admin
	require "admin/admin_load_data.php";
?>