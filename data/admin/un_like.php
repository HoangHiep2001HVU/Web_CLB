<?php
require "../connect/connect.php";
$id_port = $_POST["id"];
$user_id = $_POST["user_id"];
$number_like = 0;

$sql = "SELECT _like FROM replys WHERE id=$id_port";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $number_like = $row["_like"];
    }
}

$sql_2 = "DELETE FROM likes WHERE id_port=$id_port and id_user=$user_id";
$qr = mysqli_query($conn, $sql_2);

if($qr){
    $number= $number_like -1;
    $sql_up_like = "UPDATE replys SET _like='$number' WHERE id = $id_port";
    $qr_2 = mysqli_query($conn, $sql_up_like);
    if($qr_2){
        echo 1;
    }
    else{
        echo 0;
    }
}
else{
    echo 0;
}

mysqli_close($conn);
?>