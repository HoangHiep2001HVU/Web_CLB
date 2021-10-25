<?php

function load_slide_imgs(){
  global $conn;

  //số lượng hiển thị trên một tap
  $results_per_page = 20;

  //Lấy tổng số lượng đối tượng có trong 
  $sql='SELECT * FROM slide_imgs';
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
              <td class='col l-2' title='$created_at'>$created_at</td>
              <td class='col l-2' title='$update_at'>$update_at</td>
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

  //số lượng hiển thị trên một tap
  $results_per_page = 20;

  //Lấy tổng số lượng đối tượng có trong 
  $sql='SELECT * FROM generals';
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
      echo "<td class='col l-2' title='$created_at'>$created_at</td>
              <td class='col l-2' title='$update_at'>$update_at</td>
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

  //số lượng hiển thị trên một tap
  $results_per_page = 20;

  //Lấy tổng số lượng đối tượng có trong 
  $sql='SELECT * FROM groups';
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
  
  //Hiển thị
  $sql='SELECT * FROM groups LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
      $created_at = $row['created_at'];
      $update_at =  $row['update_at'];
      $update = "\"Display_update_group($id,'$name')\"";
      $remove = "\"remove_group($id)\"";
      echo "<tr class='row'>
              <td class='col l-1' title='$id'>$id</td>
              <td class='col l-5' title='$name'>$name</td>
              <td class='col l-2' title='$created_at'>$created_at</td>
              <td class='col l-2' title='$update_at'>$update_at</td>
              <td class='col l-1' title='Chỉnh sửa'><button class='update' onclick=$update>Sửa</button></td>
              <td class='col l-1' title='Xóa'><button class='delete' onclick=$remove>Xóa</button></td>
          </tr>";
    }
  }
  echo "<script type='text/javascript'>
          var count = $number_of_results;
      </script>";
}

