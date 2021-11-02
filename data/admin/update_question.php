<?php
require "../connect/connect.php";
$id = $_POST["id_update"];
$topic = $_POST["id_topic_update"];
$question = $_POST["name_question_update"];
$note = $_POST["note_question_update"];

$sql = "UPDATE questions SET id_topic='$topic',question='$question',note='$note' WHERE id=$id";
$kt= mysqli_query($conn, $sql);
if($kt){
    echo 1;
}
else{
    echo 0;
}
mysqli_close($conn);
?>