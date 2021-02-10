<?php 
$name = md5('vudinhnamkhanh');
$pass = md5('khanh2008@');
if(!isset($_SERVER['PHP_AUTH_USER']) 
|| md5($_SERVER['PHP_AUTH_USER']) !== $name 
|| md5($_SERVER['PHP_AUTH_PW']) !== $pass) { 
header('WWW-Authenticate: Basic realm="Mật khẩu cấp 2"'); 
header('HTTP/1.0 401 Unauthorized'); 
exit('Sai pass rồi đi chỗ khác chơi nha'); 
} 
