<?php
// Не авторизован
if(!$_SESSION['user']){?>
<section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li class="current"><a href="index.php">Главная</a></li>
               <li><a href="about.php">О ресурсе</a></li>
               <li><a href="Posts.php">Посты</a></li>
               <li><a href="contacts.php">Обратная связь</a></li>
               <li><a href="Registration.php">Регистрация</a></li>
               <li><a href="Auth.php">Авторизация</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>
<?php }

else{?> 
<!-- Авторизован -->
<section id="stuck_container">
<div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li class="current"><a href="index.php">Главная</a></li>
               <li><a href="about.php">О ресурсе</a></li>
               <li><a href="loadfiles.php">Загруз-Центр</a></li>
               <li><a href="Posts.php">Посты</a></li>
               <li><a href="contacts.php">Обратная связь</a></li>
               <li><a href="vendor/exit.php">Выйти</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>
<?php }
?>
