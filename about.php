<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
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
  ?>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>О ресурсе</h3>
        <img src="images/page2_img.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <p class="fwn"><a>Колледжи в настоящее время аккумулируют огромное количество информации, поток которой постоянно растет. Многие образовательные учреждения имеют хороший сайт с учебными материалами, информацией для абитуриентов, студентов и преподавателей, обратной связью и другими возможностями, но не имеют единого хранилища информации и единого пространства для внутренних коммуникаций. Результатом этого является частое нерациональное дублирование информации, долгий поиск необходимых данных, отсутствие удобного доступа к ресурсам, что приводит к снижению оперативности работы, к неэффективной трате большого количества времени.</a></p>
          Портал унифицирует доступ пользователей к ресурсам и сервисам колледжа, позволяет организовать групповую работу и управление неструктурированными данными, обеспечивает информационно-справочную поддержку деловых процессов. Доступ к данным из приложений в единой информационной среде может осуществляться через веб-службы. Это позволяет упростить процедуры модификации, сопровождения систем, и, кроме того, обеспечивает интеграцию различных приложений между собой.
        </div>
      </div>
    </div>
  </div>
  <article class="content_gray offset__1">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <h3>Что мы предлагаем</h3>
        </div>
        <div class="grid_4">
          <div class="block-3">
            <div class="count">1</div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Работа с документами</a></div>
              Публикация и распространение. Возможность публикации пользовательской информации для общекорпоративного доступа.
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="block-3">
            <div class="count">2</div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#"> Обратная связь</a></div>
              Обратная связь и развитие. Портал должен обеспечивать доступ к информационным ресурсам учреждения не только для сотрудников, но и для внешних лиц (студентов, абитуриентов).  
            </div>
          </div>
        </div>
        <div class="grid_4">
          <div class="block-3">
            <div class="count">3</div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Адаптивность</a></div>
              Персонализация рабочего пространства. Формирование среды работы сотрудника с учетом его персональных потребностей, привычек, методов собственной работы.            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Our Staff</h3>
      </div>
      <div class="grid_2">
        <img src="images/page2_img1.jpg" alt="" class="bord_img">
        <div class="text2"><a href="#">Sharon Brown</a></div>Curabitur vel lorem sitmet nulla ullamcorper mentum In vitae dert rius augue, eu consectetur ligulaam dui eros dertolisce dertoloing quam id risus sagittis
      </div>
      <div class="grid_2">
        <img src="images/page2_img2.jpg" alt="" class="bord_img">
        <div class="text2"><a href="#">Mark Carter</a></div>Curabitur vel lorem sitmet nulla ullamcorper mentum In vitae dert rius augue, eu consectetur ligulaam dui eros dertolisce dertoloing quam id risus sagittis
      </div>
      <div class="grid_2">
        <img src="images/page2_img3.jpg" alt="" class="bord_img">
        <div class="text2"><a href="#">Sandra Smith</a></div>Curabitur vel lorem sitmet nulla ullamcorper mentum In vitae dert rius augue, eu consectetur ligulaam dui eros dertolisce dertoloing quam id risus sagittis
      </div>
      <div class="grid_2">
        <img src="images/page2_img4.jpg" alt="" class="bord_img">
        <div class="text2"><a href="#">Tim Jons</a></div>Curabitur vel lorem sitmet nulla ullamcorper mentum In vitae dert rius augue, eu consectetur ligulaam dui eros dertolisce dertoloing quam id risus sagittis
      </div>
      <div class="grid_2">
        <img src="images/page2_img5.jpg" alt="" class="bord_img">
        <div class="text2"><a href="#">Richard Wright</a></div>Curabitur vel lorem sitmet nulla ullamcorper mentum In vitae dert rius augue, eu consectetur ligulaam dui eros dertolisce dertoloing quam id risus sagittis
      </div>
      <div class="grid_2">
        <img src="images/page2_img6.jpg" alt="" class="bord_img">
        <div class="text2"><a href="#">Kevin Steawart</a></div>Curabitur vel lorem sitmet nulla ullamcorper mentum In vitae dert rius augue, eu consectetur ligulaam dui eros dertolisce dertoloing quam id risus sagittis
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