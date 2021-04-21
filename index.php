<!DOCTYPE html>
<html>
<?php
include 'structure/head.php';
include 'structure/ajax.php';
include 'structure/menu.php';
?>
  <!--==========================
    Начална секция
  ============================-->
  <section id="intro">
    <div class="intro-content">
      <h2>ENERGY PATH<span></span> BULGARIA</h2>
      <div>
        <a href="#" class="btn-get-started"><i class="fas fa-cloud-sun"></i><h5 class="title-3" id="temperature"></h5></a>
        <a href="#" class="btn-projects"><i class="fas fa-thermometer-half"></i><h5 class="title-3" id="humidity"></h5></a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section>

  <main id="main">

    <!--==========================
      Секция за въведение в проекта
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img-1.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>ENERGY PATH</h2>
            <h3 style="text-align: justify;">„Energy Path“ е проект, които представлява пътека изградена от плочки, в които има вграден механизъм за генериране на електрическа енергия. 
            Идеята е при преминаването на пешеходци по пътеката, да се генерира енергия, която да се използва за потребителки нужди. </h3>
            <h2 style="font-size: 22px;">Приложимост на пътеката:</h2>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Внедряване в продукти изискващи електричество.</li>
              <li><i class="ion-android-checkmark-circle"></i> Изграждане на системи за улично осветление.</li>
              <li><i class="ion-android-checkmark-circle"></i> Вграждане в осветителните тела на пешеходни пътеки.</li>
              <li><i class="ion-android-checkmark-circle"></i> Интегриране в рекламни и информационни табла изискващи електричество.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!--==========================
    Секция за информационното табло
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Информационно табло</h2>
        </div>

        <div class="row">
    
          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bolt"></i></div>
              <h4 class="title" id="voltageforday"><a href=""></a></h4>
              <p class="description">НАПРЕЖЕНИЕ ЗА ДЕНЯ</p>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fas fa-shoe-prints"></i></div>
              <h4 class="title" id="stepforday"><a href=""></a></h4>
              <p class="description">СТЪПКИ ЗА ДЕНЯ</p>
            </div>
          </div>

        <div class="col-lg-12">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
              <h4 class="title" id="joule"><a href=""></a></h4>
              <p class="description">ГЕНЕРИРАНА ЕНЕРГИЯ ЗА МЕСЕЦА</p>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-money-bill-wave"></i></div>
              <h4 class="title" id="balanceformouth"><a href=""></a></h4>
              <p class="description">ГЕНЕРИРАНА СУМА ЗА МЕСЕЦА</p>
            </div>
          </div> 
        </div>
      </div>
    </section>

    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>ВИЗУАЛИЗАЦИЯ на ENERGY PATH</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.png" class="portfolio-popup">
                <img src="img/portfolio/1.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.png" class="portfolio-popup">
                <img src="img/portfolio/2.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.png" class="portfolio-popup">
                <img src="img/portfolio/3.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.png" class="portfolio-popup">
                <img src="img/portfolio/4.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.png" class="portfolio-popup">
                <img src="img/portfolio/5.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.png" class="portfolio-popup">
                <img src="img/portfolio/6.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.png" class="portfolio-popup">
                <img src="img/portfolio/7.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.png" class="portfolio-popup">
                <img src="img/portfolio/8.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Секция за връзка с разработчика
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-left">
            <h3 class="cta-title" style="text-align: center;">ЦЕЛ И ПРИЛОЖИМОСТ <br>--------------------------</h3>
            <p class="cta-text" style="text-align: center; font-size:19px"> ENERGY PATH има за цел да спомогне за генерирането на зелена енергия и за опазването на околната среда. <br> Има приложимост на места, където има наличие на пешеходци.</p>
          </div>
        </div>

      </div>
    </section>

    <!--==========================
      Секция за контакти
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>КОНТАКТИ</h2>
          <p>Във формата по-долу имате възмосността да ни пишете съвети и препоръки относно проектът. Ако този проект ви е харесал и мислите, че е полезен, ще се радваме да го споделите.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>АДРЕС</h3>
              <address>ул. Цар Освободител № 23, Шумен, България</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>ТЕЛЕФОН</h3>
              <p><a href="tel:+359893732352">+359 89 373 2352</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>ИМЕЙЛ</h3>
              <p><a href="mailto:contact@energy-path.com">contact@energy-path.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11620.241470817595!2d26.9297222!3d43.2711111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0cd4049437ac93a!2z0JrRgNC40YHRgtCw0Ls!5e0!3m2!1sbg!2sbg!4v1599219478357!5m2!1sbg!2sbg" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Успешно изпратихте съобщението. Благодарим Ви!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Вашето име" data-rule="minlen:4" data-msg="Моля, въведете поне 4 символа." />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Вашият имейл" data-rule="email" data-msg="Моля, въведете валиден имейл." />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Относно" data-rule="minlen:4" data-msg="Моля, въведете поне 8 символа." />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Моля, напишете нещо..." placeholder="Съобщение"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Изпрати</button></div>
          </form>
        </div>

      </div>
    </section>

  </main>

  <?php
  include 'structure/footer.php';
  ?>
    <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/justgage.js"></script>
  <script src="js/raphael-2.1.4.min.js"></script>
</body>
</html>