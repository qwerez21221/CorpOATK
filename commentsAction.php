<?php
session_start();
require "connectDB.php";
$idpost = $_POST['id'];
$iduser = $_SESSION['user']['id'];
$date = date("Y-m-d H:i");
$text = $_POST['text'];
if($text == ''){
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
else{
mysqli_query($link,"INSERT INTO `comments`( `id_users`, `id_posts`, `comment`, `date`) VALUES ('$iduser','$idpost','$text','$date')");
unset($_SESSION['idpost']);
header("Location:".$_SERVER["HTTP_REFERER"]);
}
?>