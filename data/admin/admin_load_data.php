<?php

function load_slide_imgs(){
    global $conn;
    $sql = "select * from slide_imgs";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $img = $row['image'];
            $note = $row['note'];
            $created_at = $row['created_at'];
            $update_at =  $row['update_at'];
            $remove_sl = "\"Remove_sl($id,'$img')\"";
            $update="\"Display_update($id,'$name','$img','$note')\"";
            echo "<tr class='row'>
                    <td class='col l-1' title='$id'>$id</td>
                    <td class='col l-2' title='$name'>$name</td>
                    <td class='col l-1' title='$img'>$img</td>
                    <td class='col l-2' title='$note'>$note</td>
                    <td class='col l-2' title='$created_at'>$created_at</td>
                    <td class='col l-2' title='$update_at'>$update_at</td>
                    <td class='col l-1' title='Chỉnh sửa'><button class='update' onclick=$update>Sửa</button></td>
                    <td class='col l-1' title='Xóa'><button class='delete' onclick=$remove_sl>Xóa</button></td>
                </tr>";
        }
    }
    echo "<script type='text/javascript'>
            var count = $result->num_rows;
        </script>";
}
