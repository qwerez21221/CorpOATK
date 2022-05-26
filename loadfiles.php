<?php 
session_start();

require 'vendor/db.php';
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sth = $dbh->query("DELETE FROM `files` WHERE `id` = $id");
 
    header('Location: /loadfiles.php');
}
$sth = $dbh->prepare("SELECT * FROM `files`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_ASSOC);

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST['submit'])) {


// Check file size
if ($_FILES["fileToUpload"]["size"] > 15500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


// Проверка, не установлено ли для $uploadOk значение 0 из-за ошибки
if ($uploadOk == 0) {
  echo "К сожалению, ваш файл не был загружен";
// если все в порядке, поробуем загрузить файл
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $sth = $dbh->prepare("INSERT INTO `files` SET `name` = :name, `src` = :src, `login` = :login");
    $sth->execute(array('name' => $_POST['name'], 'src' => $_FILES["fileToUpload"]["name"], 'login' => $_SESSION['user']['fio']));

    echo "Файл ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). 
" был загружен";
  } else {
    echo "К сожалению, при загрузке вашего файла произошла ошибка";
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<style>

    th, td {
      border: 1px solid black;
      width:700px;
      
    }
.table-wrap {
  text-align: center;
  display: inline-block;
  background-color: #fff;
  padding: 2rem 2rem;
  color: #000;
  
}

@media screen and (max-width: 600px) {
  .table-wrap {
    overflow-y: scroll;
  }
}</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.php">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <?php
  require_once 'components/header.php';
  ?>
  
  <div class="limiter">
  
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="post" enctype="multipart/form-data" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Загрузка файла
					</span>

					<span class="txt1 p-b-11">
						Название
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
          <input type="file" name="fileToUpload" id="fileToUpload">
					<div class="container-login100-form-btn">
          <input type="submit" value="Загрузить файл" name="submit">

					</div>
                    
				</form>
       
			</div>
      
		</div>
    
    </div>
    <div class="table-wrap">
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Название</th>
        <th>Исходное название</th>
        <th>Действие</th>
        <th>Автор</th>
        <th>Дата</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($array as $val) {

        echo '
        <tr>
        <td>' .$val['id']. '</td>
        <td>' .$val['name']. '</td>
        <td>' .$val['src']. '</td>
        <td><a href="/images/' .$val['src']. '">Скачать</a><br>
        <a href="/loadfiles.php?id=' .$val['id']. '">Удалить</a></td>
        <td>' .$val['login']. '</td>
        <td>' .$val['date']. '</td>

      </tr>
        ';

      }
    ?>
      
    </tbody>
  </table>
    <div id="dropDownSelect1">
   
        
  
</div>
    </div>
	
    <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
        
        
	<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright"><span class="brand">ОАТК</span> &copy; <span id="copyright-year"></span> | <a href="#">Все права защищены</a>
        </div>
      </div>
    </div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
    </body>
    </html>