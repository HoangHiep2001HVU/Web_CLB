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
    //link trang web hiện tại
    //"http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]
    // Ví dụ tôi có một đường dẫn như sau:

    // http://sinhvienit.net/@forum/showthread.php?t=2053
    // Thì khi sử dụng biến $_SERVER, chúng ta sẽ thu được các kết quả tương ứng như sau

    // $_SERVER[‘HTTP_HOST’] => sinhvienit.net
    // $_SERVER[‘PHP_SELF’] => /@forum/showthread.php
    // $_SERVER[‘REQUEST_TIME’] => Thời gian mà client gửi request ở dạng TIME _STAMP
    // $_SERVER[‘QUERY_STRING’] => t = 2053
    // $_SERVER[‘DOCUMENT_ROOT’] = Thư mục gốc chứa mã nguồn. VD: /home/sinhvienit/public_html (đối với Linux) hay C:\www (đối với windows)
    // $_SERVER[‘HTTP_REFERER’] = Cái này bạn đang trên http://www.google.com.vn/search?q=sinhvienit mà click vào link tới sinhvienit.net thì nó có giá trị http://www.google.com.vn/search?q=sinhvienit
    // $_SERVER[‘REMOTE_HOST’] = Hostname của người truy cập
    // $_SERVER[‘REMOTE_PORT’] = Port mà trình duyệt mở ra để kết nối tới server
    // $_SERVER[‘REQUEST_URI’] => /@forum/showthread.php?t=2053
    // $_SERVER[‘SERVER_NAME’] = Tên của server (Gần giống với computer-name) ở máy PC của mình. Ví dụ server.sinhvienit.net
    // $_SERVER[‘SERVER_ADDR’] = IP của server
    // $_SERVER[‘REMOTE_ADDR’] = IP của người truy cập
    // $_SERVER[‘HTTP_USER_AGENT’] = Thông tin về trình duyệt của người truy cập
?>