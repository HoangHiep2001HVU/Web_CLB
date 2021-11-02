<?php
    require "../connect/connect.php";

    $id_group = $_POST["group"];
    $header = addslashes($_POST["header_even"]);
    $description = addslashes($_POST["description_even"]);
    $note = addslashes($_POST["note_even"]);
    $start_date = $_POST["start_day"];
    $end_date = $_POST["end_day"];
    $file = $_FILES['file_even']['name'];
    
    $target = "../../public/img/even_img/" . basename($file);
	$imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    //date('d-m-Y H:i:s',strtotime($start_date));

    if(strtotime($start_date)>strtotime($end_date)){
        echo 0;
    }
    else{
        if(strtotime($end_date)<strtotime(date('d-m-Y H:i:s'))){
            echo 2;
        }
        else{
            if (file_exists($target)) {
                echo 3;
            } else {
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    echo 4;
                } else {
        
                    if (move_uploaded_file($_FILES['file_even']['tmp_name'], $target)) {
                        $sql_sl_img = "INSERT INTO evens(id_group, name, description, detail, file, start_day, end_date) VALUES ($id_group,'$header','$description','$note','$file','$start_date','$end_date')";
                        mysqli_query($conn, $sql_sl_img);
                        echo 1;
                    } else {
                        echo 5;
                    }
                }
            }
        }
        
    }
    mysqli_close($conn);
?>