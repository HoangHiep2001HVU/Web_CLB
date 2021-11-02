<?php
    require "../connect/connect.php";

    $id = $_POST["id_update"];
    $id_group = $_POST["group_update"];
    $header = addslashes($_POST["header_update"]);
    $description = addslashes($_POST["description_update"]);
    $note = addslashes($_POST["note_update"]);
    $start_date = $_POST["start_day_update"];
    $end_date = $_POST["end_day_update"];
    $file = $_FILES['file_even']['name'];
    $file_choice = $_POST["file_choice"];
    
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
            if($file==""){
                $sql_sl_img = "UPDATE evens SET id_group='$id_group',name='$header',description='$description',
                detail='$note',start_day='$start_date',end_date='$end_date' WHERE id=".$id;
                mysqli_query($conn, $sql_sl_img);
                echo 1;
            }
            else{
                $pathName_sl_remove= "../../public/img/even_img/".$file_choice;
                if(!unlink($pathName_sl_remove)){
                    echo 6;
                }
                else{
                    if (file_exists($target)) {
                        echo 3;
                    } else {
                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                            echo 4;
                        } else {
                
                            if (move_uploaded_file($_FILES['file_even']['tmp_name'], $target)) {
                                $sql_sl_img = "UPDATE evens SET id_group='$id_group',name='$header',description='$description',
                                detail='$note',file='$file',start_day='$start_date',end_date='$end_date' WHERE id=".$id;
                                mysqli_query($conn, $sql_sl_img);
                                echo 1;
                            } else {
                                echo 5;
                            }
                        }
                    }
                }
            }
        }
        
    }
    mysqli_close($conn);
?>