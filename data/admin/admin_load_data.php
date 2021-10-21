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
            $created_ad = $row['created_at'];
            echo "<tr class='row'>
                    <td class='col l-1'>$id</td>
                    <td class='col l-2'>$name</td>
                    <td class='col l-2'>$img</td>
                    <td class='col l-3'>$note</td>
                    <td class='col l-2'>$created_ad</td>
                    <td class='col l-1'><button class='update'>Sửa</button></td>
                    <td class='col l-1'><button class='delete' onclick='Remove_sl($id,'$name')'>Xóa</button></td>
                </tr>";
        }
    }
    echo "<script type='text/javascript'>
            var count = $result->num_rows;
        </script>";
}
