<?php
    $mysqli=new mysqli("localhost","root","","web_mysql");
    if($mysqli->connect_errno){
        echo "Kết nối MySQL lỗi". $mysqli->connect_errno;
        exit();
    }
?>