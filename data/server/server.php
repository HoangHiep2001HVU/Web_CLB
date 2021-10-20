<?php
    $hostName = "http://".$_SERVER["HTTP_HOST"]; //lấy tên miền của server http://localhost
    $presentServer = "";
    //Lấy đường dẫn của trạng chuyển đến trang hiện tại
    if(isset($_SERVER["HTTP_REFERER"])){
        $pastServer = $_SERVER["HTTP_REFERER"];
    }
    else {
        $pastServer = "index.php";
    }
?>