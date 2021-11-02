<?php
function sum_page($_table, $row_display){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;

  //số lượng hiển thị trên một tap
  $results_per_page = $row_display;

  //Lấy tổng số lượng đối tượng có trong 
  $sql='SELECT * FROM '.$_table;
  $result = mysqli_query($conn, $sql);
  $number_of_results = mysqli_num_rows($result);
  
  //Số page
  global $number_of_pages;
  $number_of_pages = ceil($number_of_results/$results_per_page);
  
  if (!isset($_GET['page'])) {
    $page = 1;
  } else {
    $page = $_GET['page'];
  }
  
  //vị trí lấy đầu tiên
  $this_page_first_result = ($page-1)*$results_per_page;
}

function load_slide_imgs(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('slide_imgs', 20);
  //Hiển thị
  $sql='SELECT * FROM slide_imgs LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
      $img = $row['image'];
      $note = $row['note'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $remove_sl = "\"Remove_sl($id,'$img')\"";
      $update="\"Display_update_sl($id,'$name','$img','$note')\"";
      echo "<tr class='row'>
              <td class='col l-1' title='$id'>$id</td>
              <td class='col l-2' title='$name'>$name</td>
              <td class='col l-1' title='$img'><img style='width:100%;' src='../public/img/slide_img/$img' alt='$name' onclick='click_img(this.id,this.src,this.alt);'></td>
              <td class='col l-2' title='$note'>$note</td>
              <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
              <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
              <td class='col l-1' title='Chỉnh sửa'><button class='update' onclick=$update>Sửa</button></td>
              <td class='col l-1' title='Xóa'><button class='delete' onclick=$remove_sl>Xóa</button></td>
          </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function page(){
  global $number_of_pages;
  if($number_of_pages > 1){
    $url_page = "admin.php?email=".$_GET["email"]."&tab=".$_GET["tab"]."&page=";
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

function load_general(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('generals', 20);
  
  //Hiển thị
  $sql='SELECT * FROM generals LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
      $type = $row['type'];
      $file = $row['file'];
      $note = $row['note'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $remove_sl = "\"remove_general($id,'$file')\"";
      $update="\"Display_update_general($id,'$name','$type','$note','$file')\"";
      echo "<tr class='row'>
              <td class='col l-1' title='$id'>$id</td>
              <td class='col l-1' title='$name'>$name</td>
              <td class='col l-1' title='$type'>$type</td>
              <td class='col l-2' title='$note'>$note</td>";
      $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

      
      if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif"){
        echo "<td class='col l-1' title='$file'><img style='width:100%;' src='../public/img/even_img/$file' alt='$file' onclick='click_img(this.id,this.src,this.alt);'></td>";
      }
      else{
        echo "<td class='col l-1' title='$file'><video style='width:100%;'><source src='../public/video/$file' type='video/mp4'></video></td>";
      }
      echo "<td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
              <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
              <td class='col l-1' title='Chỉnh sửa'><button class='update' onclick=$update>Sửa</button></td>
              <td class='col l-1' title='Xóa'><button class='delete' onclick=$remove_sl>Xóa</button></td>
          </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function load_group(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('groups', 20);
  
  //Hiển thị
  $sql='SELECT * FROM groups LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
      $leader = $row['leader'];
      $link = $row['link_contact'];
      $img = $row['image_leader'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_group($id,'$name','$leader','$link','$img')\"";
      $remove = "\"remove_group($id,'$img')\"";
      echo "<tr style='width: 100%'>
              <td style='max-width: 50px;' title='$id'>$id</td>
              <td style='max-width: 150px;' title='$name'>$name</td>
              <td style='max-width: 150px;' title='$leader'>$leader</td>
              <td style='max-width: 150px;' title='$link'>$link</td>
              <td style='max-width: 50px;' title='$img'><img style='width:100%;' src='../public/img/leader/$img' alt='$name' onclick='click_img(this.id,this.src,this.alt);'></td>
              <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
              <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
              <td style='max-width: 100px;' title='Chỉnh sửa'><button class='update' onclick=$update>Sửa</button></td>
              <td style='max-width: 100px;' title='Xóa'><button class='delete' onclick=$remove>Xóa</button></td>
          </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function admin_load_even(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('evens', 20);
  
  //Hiển thị
  $sql='SELECT * FROM evens LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $id_group = $row['id_group'];
      $name = $row['name'];
      $description = $row['description'];
      $detail = $row['detail'];
      $file = $row['file'];
      $start = $row['start_day'];
      $end = $row['end_date'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_even($id,'$id_group','$name','$description','$detail','$file','$start','$end')\"";
      $remove = "\"remove_even($id,'$file')\"";
      echo "<tr style='width: 130%'>
            <td style='max-width: 50px;' title='$id'>$id</td>
            <td style='max-width: 50px;' title='$id_group'>$id_group</td>
            <td style='max-width: 150px;' title='$name'>$name</td>
            <td style='max-width: 200px;' title='$description'>$description</td>
            <td style='max-width: 350px;' title='$detail'>$detail</td>
            <td style='max-width: 100px;' title='$file'><img style='width:100%;' src='../public/img/even_img/$file' alt='$file' onclick='click_img(this.id,this.src,this.alt);'></td>
            <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($start))."'>".date('d-m-Y H:i:s',strtotime($start))."</td>
            <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($end))."'>".date('d-m-Y H:i:s',strtotime($end))."</td>
            <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
            <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
            <td><button class='update' onclick=$update>Sửa</button></td>
            <td><button class='delete' onclick=$remove>Xóa</button></td>
        </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
        
}

function group_choice(){
  global $conn;
  $sql="SELECT * FROM groups";
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $name = $row["name"];
     echo "<option value='$id'>$name</option>";
    }
  }
}

function contact(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('contacts', 20);
  
  //Hiển thị
  $sql='SELECT * FROM contacts LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $method = $row['method'];
      $link = $row['link'];
      $file = $row['logo'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_contact($id,'$method','$link','$file');\"";
      $remove = "\"remove_contact($id,'$file');\"";
      echo "<tr class='row'>
            <td class='col l-1' title='$id'>$id</td>
            <td class='col l-2' title='$method'>$method</td>
            <td class='col l-2' title='$link'>$link</td>
            <td class='col l-1' title='$file'><img style='width:100%;' src='../public/img/$file' alt='$file' onclick='click_img(this.id,this.src,this.alt);'></td>
            <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
            <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
            <td class='col l-1' ><button class='update' onclick=$update>Sửa</button></td>
            <td class='col l-1' ><button class='delete' onclick=$remove>Xóa</button></td>
        </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function users(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('users', 10);
  
  //Hiển thị
  $sql='SELECT users.id,name,account.email,birthday,class,sex,image,account.role as id_role,roles.role,users.created_at,users.update_at from account, users, roles
  where account.email=users.email and account.role=roles.id LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $id_role = $row['id_role'];
      $name = $row['name'];
      $email = $row['email'];
      $birthday =$row['birthday'];
      $_class = $row['class'];
      $sex = $row['sex'];
      $file = $row['image'];
      $role = $row['role'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_user($id,'$name','$email','".date('Y-m-d',strtotime($birthday))."','$_class','$sex','$file','$id_role');\"";
      $remove = "\"remove_user($id,'$file');\"";
      $reset_pass ="\"reset_pass($id);\"";
      echo "<tr style='width: 130%'>
            <td style='max-width: 50px;' title='$id'>$id</td>
            <td style='max-width: 250px;' title='$name'>$name</td>
            <td style='max-width: 150px;' title='$email'>$email</td>
            <td style='max-width: 200px;' title='$birthday'>".date('d-m-Y',strtotime($birthday))."</td>
            <td style='max-width: 100px;' title='$_class'>$_class</td>
            <td style='max-width: 100px;' title='$sex'>$sex</td>
            <td style='max-width: 150px;' title='$file'><img style='width:100%;' src='../public/img/users/$file' alt='$file' onclick='click_img(this.id,this.src,this.alt);'></td>
            <td style='max-width: 100px;' title='$role'>$role</td>
            <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
            <td style='max-width: 100px;' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
            <td><button class='update' onclick=$reset_pass>Reset MK</button></td>
            <td><button class='update' onclick=$update>Sửa</button></td>
            <td><button class='delete' onclick=$remove>Xóa</button></td>
        </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function role_clb(){
  global $conn;
  $sql="SELECT * FROM roles";
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $role = $row["role"];
     echo "<option value='$id'>$role</option>";
    }
  }
}

function topic(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('question_topics', 10);
  
  //Hiển thị
  $sql='SELECT * FROM question_topics LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $id_user = $row['user_create'];
      $topic = $row['topic'];
      $note = $row['note'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_topic($id,'$topic','$note');\"";
      $remove = "\"remove_topic($id);\"";
      echo "<tr class='row'>
            <td class='col l-1' title='$id'>$id</td>
            <td class='col l-1' title='$id_user'>$id_user</td>
            <td class='col l-2' title='$topic'>$topic</td>
            <td class='col l-2' title='$note'>$note</td>
            <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
            <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
            <td class='col l-1' ><button class='update' onclick=$update>Sửa</button></td>
            <td class='col l-1' ><button class='delete' onclick=$remove>Xóa</button></td>
        </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function topic_choice(){
  global $conn;
  $sql="SELECT * FROM question_topics";
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $topic = $row["topic"];
     echo "<option value='$id'>$topic</option>";
    }
  }
}

function question(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('questions', 10);
  
  //Hiển thị
  $sql='SELECT * FROM questions LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $id_user = $row['user_create'];
      $id_topic = $row["id_topic"];
      $question = $row['question'];
      $note = $row['note'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_question($id,'$id_topic','$question','$note');\"";
      $remove = "\"remove_question($id);\"";
      echo "<tr class='row'>
            <td class='col l-1' title='$id'>$id</td>
            <td class='col l-1' title='$id_topic'>$id_topic</td>
            <td class='col l-1' title='$id_user'>$id_user</td>
            <td class='col l-1' title='$question'>$question</td>
            <td class='col l-2' title='$note'>$note</td>
            <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
            <td class='col l-2' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
            <td class='col l-1' ><button class='update' onclick=$update>Sửa</button></td>
            <td class='col l-1' ><button class='delete' onclick=$remove>Xóa</button></td>
        </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

function question_choice(){
  global $conn;
  $sql="SELECT * FROM questions";
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row["id"];
      $question = $row["question"];
     echo "<option value='$id'>$question</option>";
    }
  }
}

function load_post(){
  global $conn;
  global $this_page_first_result;
  global $results_per_page;
  global $number_of_results;
  sum_page('replys', 10);
  
  //Hiển thị
  $sql='SELECT * FROM replys LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $id_question = $row['id_question'];
      $user_create = $row["user_create"];
      $answer = $row['answer'];
      $file = $row['file'];
      $_like = $row['_like'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_post($id,'$id_question','$answer','$file');\"";
      $remove = "\"remove_post($id,'$file');\"";
      echo "<tr class='row'>
            <td class='col l-1' title='$id'>$id</td>
            <td class='col l-1' title='$id_question'>$id_question</td>
            <td class='col l-1' title='$user_create'>$user_create</td>
            <td class='col l-3' title='$answer'>$answer</td>
            <td class='col l-1' title='$file'><img style='width:100%;' src='../public/img/post/$file' alt='$file' onclick='click_img(this.id,this.src,this.alt);'></td>
            <td class='col l-1' title='$_like'>$_like</td>
            <td class='col l-1' title='".date('d-m-Y H:i:s',strtotime($created_at))."'>".date('d-m-Y H:i:s',strtotime($created_at))."</td>
            <td class='col l-1' title='".date('d-m-Y H:i:s',strtotime($update_at))."'>".date('d-m-Y H:i:s',strtotime($update_at))."</td>
            <td class='col l-1' ><button class='update' onclick=$update>Sửa</button></td>
            <td class='col l-1' ><button class='delete' onclick=$remove>Xóa</button></td>
        </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}