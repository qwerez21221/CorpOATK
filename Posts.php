<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>

</head>
<body>
<!--==============================
              header
=================================-->
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

  require_once 'vendor/connectDB.php';
  $getposts = mysqli_query($link,"SELECT * FROM `posts` ORDER BY `id` DESC ");
  ?>
</header>

<style>


.dm-overlay {
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.65);
    display: none;
    overflow: auto;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
/* активируем модальное окно */
 
.dm-overlay:target {
    display: block;
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
}
/* блочная таблица */
 
.dm-table {
    display: table;
    width: 100%;
    height: 100%;
}
/* ячейка блочной таблицы */
 
.dm-cell {
    display: table-cell;
    padding: 0 1em;
    vertical-align: middle;
    text-align: center;
}
/* модальный блок */
 
.dm-modal {
    display: inline-block;
    padding: 20px;
    max-width: 50em;
    background: #607d8b;
    -webkit-box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.22), 0px 19px 60px rgba(0, 0, 0, 0.3);
    color: #cfd8dc;
    text-align: left;
}
/* изображения в модальном окне */
 
.dm-modal img {
    width: 100%;
    height: auto;
}
/* миниатюры изображений */
 
.pl-left,
.pl-right {
    width: 25%;
    height: auto;
}
/* миниатюра справа */
 
.pl-right {
    float: right;
    margin: 5px 0 5px 15px;
}
/* миниатюра слева */
 
.pl-left {
    float: left;
    margin: 5px 15px 5px 0;
}
/* встраиваемое видео в модальном окне */
 
.video {
    position: relative;
    overflow: hidden;
    padding-bottom: 56.25%;
    height: 0;
}
.video iframe,
.video object,
.video embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
/* рисуем кнопарь закрытия */
 
.close {
    z-index: 9999;
    float: right;
    width: 30px;
    height: 30px;
    color: #cfd8dc;
    text-align: center;
    text-decoration: none;
    line-height: 26px;
    cursor: pointer;
}
.close:after {
    display: block;
    border: 2px solid #cfd8dc;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    content: 'X';
    -webkit-transition: all 0.6s;
    -moz-transition: all 0.6s;
    transition: all 0.6s;
    -webkit-transform: scale(0.85);
    -moz-transform: scale(0.85);
    -ms-transform: scale(0.85);
    transform: scale(0.85);
}
/* кнопка закрытия при наведении */
 
.close:hover:after {
    border-color: #fff;
    color: #fff;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
/* варианты фонвой заливки модального блока */
 
.green {
    background: #388e3c!important;
}
.cyan {
    background: #0097a7!important;
}
.teal {
    background: #00796b!important;
}
/* движуха при появлении блоков с содержанием */
 
@-moz-keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1
    }
}
@-webkit-keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1
    }
}
@keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1
    }
}
</style>

<div class="container pt-5">
<?php

  require_once 'components/postik.php';

  ?>
<?php

  ?>
        <?php
    while ($post = mysqli_fetch_assoc($getposts)){
    ?>
        <div class="blog">
          <time datetime="2014-01-01"><strong><?php echo $post['date'];?></strong></time>
          <img width="300" height="250" src="content/<?php echo $post['url']; ?>" alt="" class="img_inner fleft" >
          <div class="extra_wrapper">
            <a href="#win1" class="comment"><span class="fa fa-comments"></span> <?php echo $post['comments'];?></a>
            <p><span class="fwn"><a href="#">Пост</a></span><em>Posted by <a href="#"><?php echo $post['id_users'];?></a></em></p><?php echo $post['description'];?> <br>
           
            <br>
            <a href="#" class="link-1">more</a>
            
          </div>
        </div>
        <h5 class="mb-3">Комментарии</h5>
      
            <div class="card">
              <div class="card-header">
                <!-- Оставить комментарий сюда написать цикл для комментариев -->
              </div>
              <div class="card-body">
                <form action="vendor/commentsAction.php" method="post">
                  <div class="form-group">
                    <textarea cols="30" rows="3" class="form-control" type="text" name='text' placeholder="Введите комментарий"></textarea>
                  </div>
                  <input type="hidden" name="id" value="<?= $post['id']; ?>">
                  <button type="submit" value="отправить" class="btn btn-primary">Оставить комментарий</button>
                </form>
                

                <!-- / comment из БД -->
              </div>
            </div>
            
            <?php
            $comments=mysqli_query($link, "SELECT `comments`.*,`users`.`nickname` AS `Name`
            FROM `comments` 
            LEFT JOIN `users` ON `comments`.`id_users` = `users`.`id` WHERE `id_posts` = {$post['id']}; "); 
            while($resultcomment = mysqli_fetch_assoc($comments)) { ?>
            <div class="card mt-3">
              <div class="card-body py-2 px-3">
                <blockquote class="blockquote mb-0" style="font-size: 16px;">
                  <p class="mb-2"><?= $resultcomment['comment']; ?></p>
                  <footer class="blockquote-footer">
                    <cite title="Source Title"><?= $resultcomment['Name']; ?> <?= $resultcomment['date']; ?></cite>
                  </footer>
                </blockquote>
              </div>
            </div>
            <? }?>
        <?php } ?>
        
       
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
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