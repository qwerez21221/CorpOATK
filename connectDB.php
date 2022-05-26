<?php 
$hostname = "127.0.0.1";
$username = "root";
$userpassword = "";
$database ="isp39717";

$link = mysqli_connect($hostname,$username,$userpassword,$database);

if(!$link){

    echo "подключение отсутствует!";
}
?>