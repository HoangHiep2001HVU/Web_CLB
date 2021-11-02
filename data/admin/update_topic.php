<?php
require "../connect/connect.php";
$id = $_POST["id_update"];
$topic = $_POST["name_topic_update"];
$note = $_POST["note_topic_update"];

$sql = "UPDATE question_topics SET topic='$topic',note='$note' WHERE id = $id";
$kt= mysqli_query($conn, $sql);
if($kt){
    echo 1;
}
else{
    echo 0;
}
mysqli_close($conn);
?>