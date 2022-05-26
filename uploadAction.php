<?php 
session_start();
require "connectDB.php";
$iduser = $_SESSION['user']['id'];
$description = $_POST['description'];
$date = date("Y-m-d");
// var_dump($iduser);
// var_dump($description);
// var_dump($date);
// var_dump($_FILES['file']['name']);
function upload($file){
    $edx = pathinfo($file['name'],PATHINFO_EXTENSION);
    $name = uniqid().'.'.$edx;
    move_uploaded_file($file['tmp_name'],'../content/'.$name);
    return $name;
};
if(isset($_POST['submit'])){
$url = upload($_FILES['file']);
if(mysqli_query($link,"INSERT INTO `posts`(`description`, `date`, `id_users`, `url`) VALUES ('$description','$date','$iduser','$url')")){

    header('Location:../Posts.php');

}
}
?>