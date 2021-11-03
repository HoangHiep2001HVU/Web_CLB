<?php
	//hàm lấy ra tên của tài khoản
	$email = "";
	$user_id = 0;
	$role=0; //biến lấy lư vai trò của người đăng nhập
	function username(&$user_id, $email, &$role){
		global $conn;
		$sql = "select account.id, name, role from users, account where account.id=users.id 
		and users.email='$email'";
		$result = $conn->query($sql);
		$name="";
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$user_id = $row['id'];
				$name = $row['name'];
				$role = $row['role'];
			}
		}
		return htmlspecialchars($name);
	}
	
	//Hàm lấy ra tên các nhóm r gán vào menu
	function groups(){
		global $conn;
		global $email;
		$sql = "select * from groups";
		$result = $conn->query($sql);
		$name_group ="";
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name_group = $row['name'];
				if($email==""){
					echo "<li><a href='group.php?id_group=$id'>".htmlspecialchars($name_group)."</a></li>";
				}
				else{
					echo "<li><a href='group.php?email=$email&id_group=$id'>".htmlspecialchars($name_group)."</a></li>";
				}
				
			}
		}
	}
	
	function sl_img(){
		global $conn;
		$sql = "select * from slide_imgs order by created_at desc LIMIT 6";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['name'];
				$img = $row['image'];
				$note = $row['note'];
				echo "<img id='$id' src='../public/img/slide_img/$img' alt='".htmlspecialchars($name)."' onclick='click_img(this.id,this.src,this.alt);'/>";
			}
		}
		echo "<script type='text/javascript'>
			var n = $result->num_rows;
			$(document).ready(function() {
				Width_sl(n);
				Next();
				Back();
			});
		</script>";
	}

	//Hàm lấy sự kiện ở phần body_home
	function load_even(){
		global $conn;
		global $this_page_first_result;
		global $results_per_page;
		sum_page('evens', 10);
		
		//Hiển thị
		$sql= 'SELECT * FROM evens where end_date >='.date('Y-m-d').' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
		$result = mysqli_query($conn, $sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$id_group = $row['id_group'];
			$name = htmlspecialchars($row['name']);
			$description = htmlspecialchars($row['description']);
			$detail = htmlspecialchars($row['detail']);
			$file = $row['file'];
			$start = $row['start_day'];
			$end = $row['end_date'];
			echo "<div class='col l-6 m-6 c-12'>
					<div class='even'>
						<img id='$id' src='../public/img/even_img/$file' alt='$detail' onclick='click_img(this.id,this.src,this.alt);'>
						<div class='header_even'>
							<h2>$name</h2>
							<p>$description</p>
							<p>Thời gian: ".date('d-m-Y',strtotime($start))." đến ".date('d-m-Y',strtotime($end))."</p>
							<div class='group_buttom'>
								<button onclick='click_img($id,\"../public/img/even_img/$file\",\"$detail\");'>Chi tiết</button>
							</div>
						</div>
					</div>
				</div>";
			}
		}
	}

	function _page($tab){
		global $number_of_pages;
		if($number_of_pages > 1){
			$url_page = "";
			if(isset($_GET["email"])){
				if(isset($_GET["theme"])){
					$url_page = "$tab?email=".$_GET["email"]."&theme=".$_GET["theme"]."&page=";
				}
				else{
					$url_page = "$tab?email=".$_GET["email"]."&page=";
				}
			}
			else{
				if(isset($_GET["theme"])){
					$url_page = "$tab?theme=".$_GET["theme"]."&page=";
				}
				else{
					$url_page = "$tab?page=";
				}
			}
			$i=2;
			echo "<div class='row'>
				<div class='number_row col l-12'>";
			if(isset($_GET["page"])){
			if($_GET["page"]>1){
				$i = $_GET["page"]-1;
				$url =  $url_page.$i;
				echo "<button id='back'> <a href='$url'> < </a> </button>";
			}
			$i = $_GET["page"]+1;
			}
			
			for ($page=1;$page<=$number_of_pages;$page++) {
			$url = $url_page.$page;
			echo "<button id='page_$page'> <a href='$url'>$page</a> </button>";
			}              
		
			$url =  $url_page.$i; 
			if($i-1<$number_of_pages){
			echo "<button id='next'> <a href='$url'> > </a> </button>
					</div>
				</div>";
			}
		
			echo "<script type='text/javascript'>";
			if(isset($_GET["page"])){
			$p=$_GET["page"];
			echo "$('#page_'+$p).css('background','#000');
			$('#page_'+$p + ' a').css('color','#fff')";
			}  
			else{
			echo "$('#page_1').css('background','#000');
			$('#page_1 a').css('color','#fff')";
			}
			echo "</script>";
		}
	}

	function load_vd_gt(){
		global $conn;
		$id = "";
		$name = "";
		$video = "";
		$note = "";
		$type = "";
		$sql = "select * from generals where type='Giới thiệu' order by update_at desc LIMIT 1";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = htmlspecialchars($row['name']);
				$type = $row['type'];
				$note = htmlspecialchars($row['note']);
				$video = $row['file'];
			}
		}
		if(strtolower(pathinfo($video, PATHINFO_EXTENSION)) == "jpg" || strtolower(pathinfo($video, PATHINFO_EXTENSION)) == "png" || strtolower(pathinfo($video, PATHINFO_EXTENSION)) == "jpeg"){
			echo "<div class='us'>
						<div class='vd'>
							<img class='myVideo' id='$id' src='../public/img/even_img/$video' alt='$note' onclick='click_img(this.id,this.src,this.alt);'>
						</div>
						<div class='content'>
							<h1>$name</h1>
							<p>$note</p>
							<button class='myBtn' id='myBtn' onclick='about();'>Pause</button>
						</div>
					</div>";
		}
		else{
			echo "<div class='us'>
						<div class='vd'>
							<video autoplay muted loop class='myVideo' id='myVideo' onclick='about();'>
								<source src='../public/video/$video' type='video/mp4'>
								$type
							</video>
						</div>
						<div class='content'>
							<h1>$name</h1>
							<p>$note</p>
							<button class='myBtn' id='myBtn' onclick='about();'>Pause</button>
						</div>
					</div>";
		}
	}

	function load_contact(){
		global $conn;
		$id = "";
		$method = "";
		$link = "";
		$file = "";
		$sql = "select * from contacts order by update_at desc LIMIT 4";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$method = htmlspecialchars($row['method']);
				$link = htmlspecialchars($row['link']);
				$file = $row['logo'];
				echo " <div class='method row'>
					<div class='col l-1 l-o-1'>
						<img src='../public/img/$file' alt='$file'>
					</div>
					<div class='col l-10'>
						<p>$method: $link</p>
					</div>
				</div>";
			}
		}
	}

	function load_contact_user($role){
		global $conn;
		$sql = "select users.name, roles.role, users.image from users,account,roles where users.id = account.id and account.role = roles.id 
		and roles.role= '$role' order by users.update_at desc LIMIT 1";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$name = htmlspecialchars($row['name']);
				$_role = $row['role'];
				$file = $row['image'];
				echo "<img src='../public/img/users/$file' alt='$name'>
				<h1>$name</h1>
				<p class='title'>$_role</p>
				<p>Trường đại học Hùng Vương</p>
				<p><a href='#'>Liên hệ</a></p>";
			}
		}
	}

	function leader_group($id){
		global $conn;
		$sql = "select * from groups where id = $id";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$name = htmlspecialchars($row['leader']);
				$link = htmlspecialchars($row['link_contact']);
				$file = $row['image_leader'];
				echo "<div class='col l-4 m-4 c-12'>
						<img src='../public/img/leader/$file' style='width: 100%;' alt='$name'>
					</div>
					<div class='txt col l-8 m-8 c-12'>
						<h1>$name</h1>
						<p class='title'>Trưởng nhóm</p>
						<p>Trường đại học Hùng Vương</p>
						<p><a href='$link' target='_blank'>Liên hệ</a></p>
                    </div>";
			}
		}
	}
	
	function load_topic(){
		global $_link;
		global $conn;
		global $this_page_first_result;
		global $results_per_page;
		global $number_of_results;
		sum_page('question_topics', 5);
		
		//Hiển thị
		$sql= 'SELECT * FROM question_topics LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
		$result = mysqli_query($conn, $sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$topic = htmlspecialchars($row["topic"]);
			$note = htmlspecialchars($row["note"]);
			echo "<tr class='row'>
					<td class='col l-12'>
						<a href='$_link=$id'>
							<h2>$topic</h2>
							<p>$note</p>
						</a>
					</td>
				</tr>";
			}
		}
		echo "<script type='text/javascript'>
          var count = $number_of_results;
		  $(document).ready(function() {
			$('#number').text('Tổng số chủ đề: '+count);
		});
      </script>";
	}

	function load_question(){
		global $conn;
		global $this_page_first_result;
		global $results_per_page;
		global $number_of_results;
		sum_page("questions where id_topic = ".$_GET["theme"], 10);
		
		//Hiển thị
		$sql= 'SELECT * FROM questions where id_topic = '.$_GET["theme"].' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
		$result = mysqli_query($conn, $sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$question = htmlspecialchars($row["question"]);
			$note = htmlspecialchars($row["note"]);
			echo "<tr class='row'>
                    <td class='col l-12'>";
                        if(!isset($_GET["email"])){
							echo "<a href='posts.php?theme=".$_GET["theme"]."&question=$id'>
                            <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                            <div>
                                <h2>$question</h2>
                                <p>$note</p>
                            </div>
                        </a>";
							
						}
						else{
							$email = $_GET["email"];
							echo "<a href='posts.php?email=".$email."&theme=".$_GET["theme"]."&question=$id'>
                            <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                            <div>
                                <h2>$question</h2>
                                <p>$note</p>
                            </div>
                        </a>";
						}
            echo"        </td>
                </tr>";
			}
		}
		else{
			echo "<tr class='row'>
			<td class='col l-12'>
				<a href='#'>
					<img src='../public/gif/question.gif' alt='icon câu hỏi' />
					<div>
						<h2 style='color: red'>Chưa có câu hỏi nào!</h2>
					</div>
				</a>
			</td>
		</tr>";
		}
		echo "<script type='text/javascript'>
          var count = $number_of_results;
		  $(document).ready(function() {
			$('#number').text('Tổng số câu hỏi: '+count);
		});
      </script>";
	}

	function load_name_question(){
		global $conn;
		$sql = "select * from questions where id=".$_GET["question"];
		$result = mysqli_query($conn, $sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$question = htmlspecialchars($row["question"]);
			$note = $row["note"];
			echo "<div class='row'>
					<div class='col l-12 m-12 c-12'>
						<div class='header'>
							<h1>$question</h1>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class='col l-12 m-12 c-12'>
						<p>$note</p>
					</div>
				</div>";
			}
		}
	}

	function load_reply(){
		global $conn;
		global $this_page_first_result;
		global $results_per_page;
		global $user_id;
		sum_page("replys,users,questions WHERE replys.user_create = users.id and questions.id = replys.id_question and questions.id = ".$_GET["question"], 10);
		
		//Hiển thị
		$sql= 'SELECT replys.id, users.name, replys.answer, replys.file, replys._like, replys.created_at FROM replys,users,questions 
		WHERE replys.user_create = users.id and questions.id = replys.id_question and questions.id = '.$_GET["question"].' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
		$result = mysqli_query($conn, $sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$name = htmlspecialchars($row["name"]);
			$answer = htmlspecialchars($row["answer"]);
			$file = $row["file"];
			$like = $row["_like"];
			$created_at = $row["created_at"];
			echo "<div class='row'>
					<div class='col l-12 m-12 c-12'>
						<h3>$name</h3>
						<p class='times'>".date('d-m-Y H:i:s',strtotime($created_at))."</p>
						<p class='content_post'>$answer<br>";
						if($file!=""){
							echo "<p>Ảnh kèm theo: </p>";
							echo "<img style='width:50%;' src='../public/img/post/$file' alt='$answer' onclick='click_img(this.id,this.src,this.alt);'>";
						}
						echo "</p>
						<div class='interact'>
							<p>Có $like lượt thích</p>";
				if(kt_like($id,$user_id)){
					echo "<button class='like' onclick='Like($id,$user_id)'>Thích</button>";
				}
				else{
					echo "<button class='like' onclick='Un_Like($id,$user_id)'>Bỏ thích</button>";
				}
				if(user_post($id,$user_id)){
					echo "<button class='like' onclick='remove_post($id,\"$file\")'>Xóa</button>";
				}
			echo "			</div>
					</div>
				</div>";
			}
		}
		else{
			echo "<div class='row'>
					<div class='col l-12 m-12 c-12'>
						<h3 style='color: red;'>Chưa có câu trả lời nào!</h3>
						<p class='times'>".date('d-m-Y')."</p>
					</div>
				</div>";
		}
	}

	function kt_like($id,$user_id){
		global $conn;
		$sql = "select * from likes where id_port=$id and id_user=$user_id";
		$result = mysqli_query($conn, $sql);
		if($result->num_rows > 0){
			return false;
		}
		else{
			return true;
		}
	}

	function user_post($id,$user_id){
		global $conn;
		$sql="SELECT * FROM replys where id= $id and user_create= $user_id";
		$result = mysqli_query($conn, $sql);
		if($result->num_rows > 0){
			return true;
		}
		else{
			return false;
		}
	}