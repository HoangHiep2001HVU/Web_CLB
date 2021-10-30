<?php
    require "../connect/connect.php";

    $id_topic = $_POST["id_topic"];
    $id_user = $_POST["user_create"];
    $name = $_POST["name_question"];
    $note = $_POST["note_question"];
    
    $sql = "INSERT INTO questions(id_topic, user_create, question, note) VALUES ('$id_topic','$id_user','$name','$note')";
    $upload_kt=mysqli_query($conn, $sql);
    $kt=mysqli_close($conn);
    if($kt){
        echo 1;
    }
    else{
        echo 0;
    }
?>
