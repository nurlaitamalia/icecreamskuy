<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<style>
  .navbar-fixed-top.scrolled {
    background-color: #fff !important;
    transition: background-color 200ms linear;
  }

  .nav-tabs {
    margin-bottom: 15px;
  }
</style>

<body id="page-top">

 <!-- Navigation Bar -->
 <?php $this->load->view("admin/_partials/navbar.php") ?>

 <!-- chart Modal -->
 <div class="modal fade" id="cartModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- chart Modal Header -->
        <div class="modal-header">

          <h4 class="modal-title">Shopping Cart</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- chart Modal body -->
        <div class="container-form">
        <?php $this->load->view("admin/_partials/shoppingCart.php") ?>
        </div>
      </div>
    </div>
  </div>
  <!-- LOGIN Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Login Modal Header -->
        <div class="modal-header">

          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Login Modal body -->
        <div class="container-form">
        <?php $this->load->view("admin/_partials/formLogin.php") ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Login Modal -->

  <!-- REGISTER Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Register Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Register Modal body -->
        <div class="container-form">
        <?php $this->load->view("admin/_partials/formRegist.php") ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Register Modal -->

    <!-- COMPLAINT Modal -->
    <div class="modal fade" id="complaintModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
    
            <!-- Complaint Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Complaint</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- Complaint Modal body -->
            <div class="container-form">
            <?php $this->load->view("admin/_partials/formComplaint.php") ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End Complaint Modal -->

      <!-- RESPONSE Modal -->
    <div class="modal fade" id="responseModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
    
            <!-- RESPONSE Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Response</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- RESPONSE Modal body -->
            <div class="container-form">
            <?php $this->load->view("admin/_partials/formResponse.php") ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End RESPONSE Modal -->

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-right my-auto">
      <h1 class="mb-1" style="color:white;">Ice Cream Skuy</h1>
      <h3 class="mb-5">
        <em style="color:rgb(241, 241, 241);">Website pemesanan ice cream dengan berbagai rasa</em>
      </h3>
      <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Order -->
  <section class="content-section bg-light" id="order">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2 style="color:rgb(141, 141, 141)168, 162, 162)">Let's order the Ice Cream Here!</h2>
          <p class="lead mb-5">This website offer many kind of Ice Cream that fits your daily mood</p>
          <!-- <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a> -->
          <button type="button" class="btn btn-xl" style="background-color: #fda6b1; color: #fff" data-toggle="modal" data-target="#myModal">
            Order Now!
          </button>

          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Pesan Es Krim</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="container-form">
                <?php $this->load->view("admin/_partials/formPemesanan.php") ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- How To Order -->
  <section class="content-section text-white text-center" style="background-color: #ffcccc" id="services">
    <div class="container">
      <div class="content-section-heading">
        <!-- <h3 class="text-secondary mb-0">Steps</h3> -->
        <h2 class="mb-5" style="color: #f88888">How to Order</h2>
      </div>
      <div class="row" style="color: #505050">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Find Your Favorite Ice Cream</strong>
          </h4>
          <!-- <p class="text-faded mb-0">Looks great on any screen size!</p> -->
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Register / Login</strong>
          </h4>
          <!-- <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p> -->
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>Fill the Order Form</strong>
          </h4>
          <!-- <p class="text-faded mb-0">Millions of users
            <i class="fas fa-heart"></i>
            Start Bootstrap!</p> -->
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <strong>Pay at Arrival</strong>
          </h4>
          <!-- <p class="text-faded mb-0">I mustache you a question...</p> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Menu -->
  <section class="content-section" id="catalog">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class=" mb-0" style="color: #d698b9">What We Offer</h2>
        <h4 class="mb-5">Choose your favorite menu!</h4>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Little Baby - 15K per Cup</h2>
                <p class="mb-0">Little Baby’s Ice Cream is a small-batch, hand-made, super-premium Ice Cream !</p>
              </span>
            </span>
            <img class="img-fluid" src="<?php echo base_url('img/pastelcup.jpg')?>" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Slim twin - 30k per Cup</h2>
                <p class="mb-0">Slim Twin is unexpectedly creamy and full of flavor, but without any guilt!</p>
              </span>
            </span>
            <img class="img-fluid" src="<?php echo base_url('img/pastelbowl.jpg')?>" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Double delight - 25k per Glass</h2>
                <p class="mb-0">She’s a coupon-clipping supermom!</p>
              </span>
            </span>
            <img class="img-fluid" src="<?php echo base_url('img/pastelglass.jpg')?>" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Maxine - 50k per Box</h2>
                <p class="mb-0">She’s a coupon-clipping supermom!Maxine’s is a tribute to her – organic greatness at a family-friendly price.</p>
              </span>
            </span>
            <img class="img-fluid" src="<?php echo base_url('img/pastelbox.jpg')?>" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Menu Showcases -->
  <section class="showcase" id="menu">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo base_url('img/review_3.jpg')?>);"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Rasa Yang Berbeda</h2>
          <p class="lead mb-0">Ada suatu perasaan tersendiri ketika menikmati ice cream ini, rasanya bener-bener nikmat. 
          Seger dan bisa membangunkan mood lagi, it feels like as if all problems in the world just dissapeared. 
          Bener - bener beda deh. Semua rasanya mantap, favorit kita yang rasa greentea. Harganya juga cukup dikantong mahasiswa.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?php echo base_url('img/review_1.jpg')?>);"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Terlanjur Nyaman</h2>
          <p class="lead mb-0">Cocok banget buat kalian yang pengen manis tapi ngga manis. Bukan cuma rasanya yang mantap, tempatnya juga enak banget buat nongkrong, instagrammable jugaa. This palce is totally worth visiting!. 
          Bikin nyaman, jadi susah buat move on ke temapt lain !! </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo base_url('img/review_4.jpg')?>);"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Yang terbaik</h2>
          <p class="lead mb-0">Benar- benar terasa enak, banyak pilihan rasanya. Terbuat dari bahan dan pewarna alami jadi ngga khawatir saat diberikan ke buah hati. 
          Masing-masing rasa punya keuinikan rasa tersendiri.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Complaint -->
  <section class="content-section text-white" id="complaint" style="background-color: #ffddcc">
    <div class="container text-center">
      <h2 class="mb-4" style="color: #e29a9a">Are you satisfied with our product?</h2>
      <a href="#"  class="btn btn-xl btn-light mr-4" style="color: #e29a9a" data-toggle="modal" data-target="#complaintModal">Complaint Here</a>
      <a href="#"  class="btn btn-dark btn-xl btn-light mr-4" style="color: #e29a9a" data-toggle="modal" data-target="#responseModal">See Our Message Here</a>
      <!-- <a href="#" class="btn btn-xl btn-dark">Look at Me!</a> -->
    </div>
  </section>

  <!-- Map -->
  <section id="contact" class="map">
  <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4371847222433!2d112.61247914994358!3d-7.953691594243059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827928958613%3A0xd600c9c3727a93aa!2sFakultas%20Ilmu%20Komputer%20Universitas%20Brawijaya%20(FILKOM)!5e0!3m2!1sen!2sid!4v1568958883951!5m2!1sen!2sid"></iframe>
      <!-- <iframe src="" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    <br />
    <small>
      <a
        href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4371847222433!2d112.61247914994358!3d-7.953691594243059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827928958613%3A0xd600c9c3727a93aa!2sFakultas%20Ilmu%20Komputer%20Universitas%20Brawijaya%20(FILKOM)!5e0!3m2!1sen!2sid!4v1568958883951!5m2!1sen!2sid"></a>
    </small>
  </section>

  <!-- Footer -->
  <?php $this->load->view("admin/_partials/footer.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>
  
  <script>
    $("#registerLink").click(function () {
      $('#myModal1').modal('hide');
    });
  </script>

</body>

</html>