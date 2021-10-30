<?php
    require "../connect/connect.php";

    $id_user = $_POST["user_create"];
    $name = $_POST["name_topic"];
    $note_topic = $_POST["note_topic"];
    
    $sql = "INSERT INTO question_topics(user_create, topic, note) VALUES ('$id_user','$name','$note_topic')";
    $upload_kt=mysqli_query($conn, $sql);
    $kt=mysqli_close($conn);
    if($kt){
        echo 1;
    }
    else{
        echo 0;
    }
?>
