<!DOCTYPE html>
<html>

<?php
  include 'structure/head.php';
  include 'structure/ajax.php';
  include 'structure/menu.php';
?>

    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>ИНФОРМАЦИОННО ТАБЛО</h2>
          <p>В тази секция се поместват всички данни от пътеката в реално време. </p>
        </div>

        <div class="row">
    
        <div class="col-lg-12">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-lightbulb-o"></i></div>
              <h4 class="title" id="joule"><a href=""></a></h4>
              <p class="description">ГЕНЕРИРАНА ЕНЕРГИЯ ЗА МЕСЕЦА</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fas fa-shoe-prints"></i></div>
              <h4 class="title" id="stepforday"><a href=""></a></h4>
              <p class="description">СТЪПКИ ЗА ДЕНЯ</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fas fa-shoe-prints"></i></div>
              <h4 class="title" id="stepformonth"><a href=""></a></h4>
              <p class="description">СТЪПКИ ЗА МЕСЕЦА</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bolt"></i></div>
              <h4 class="title" id="voltage"><a href=""></a></h4>
              <p class="description">НАПРЕЖЕНИЕ В РЕАЛНО ВРЕМЕ</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bolt"></i></div>
              <h4 class="title" id="voltageforday"><a href=""></a></h4>
              <p class="description">НАПРЕЖЕНИЕ <br> ЗА ДЕНЯ</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bolt"></i></div>
              <h4 class="title" id="voltageformonth"><a href="">-</a></h4>
              <p class="description">НАПРЕЖЕНИЕ ЗА МЕСЕЦА</p>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-plug"></i></div>
              <h4 class="title" id="powerforday"><a href=""></a></h4>
              <p class="description">МОЩНОСТ ЗА ДЕНЯ</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-plug"></i></div>
              <h4 class="title" id="powerformouth"><a href=""></a></h4>
              <p class="description">МОЩНОСТ ЗА МЕСЕЦА</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-car-battery"></i></div>
              <h4 class="title" id="kilowatthoursforday"><a href=""></a></h4>
              <p class="description">КИЛОВАТЧАС ЗА ДЕНЯ</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-car-battery"></i></div>
              <h4 class="title" id="kilowatthoursformouth"><a href=""></a></h4>
              <p class="description">КИЛОВАТЧАС ЗА МЕСЕЦА</p>
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
</body>
</html>