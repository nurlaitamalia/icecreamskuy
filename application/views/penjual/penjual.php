<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('css/simple-sidebar.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('css/stylish-portfolio.min.css')?>" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="bg-light sidebar-heading">Ice Cream Skuy </div>
      <div class="list-group list-group-flush">
        <a href="penjual.html" class="list-group-item list-group-item-action ">Dashboard</a>
        <!-- <a href="#" class="list-group-item list-group-item-action">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action">Overview</a>
        <a href="#" class="list-group-item list-group-item-action">Events</a> -->
        <a href="complaint.html" class="list-group-item list-group-item-action">Complaint</a>
        <a href="report.html" class="list-group-item list-group-item-action">Download</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <!-- 
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav> -->
      <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top fixed-top py-3" id="mainNav">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#order">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#catalog">Catalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#complaint">Complaint</a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link btn js-scroll-trigger" href="#contact">Login </a> -->
                <button type="button" class="btn" style="background-color:#fda6b1; color: white; margin-left: 10px"
                  data-toggle="modal" data-target="#myModal1">
                  Login
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Data Transaksi</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">User</th>
              <th scope="col">Produk</th>
              <th scope="col">Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">12 Agustus 2019</th>
              <td>Lia</td>
              <td>Maxime Choco</td>
              <td>Rp. 50.000</td>
            </tr>
            <tr>
              <th scope="row">17 Agustus 2019</th>
              <td>Nisa</td>
              <td>Cup Berry</td>
              <td>Rp. 25.000</td>
            </tr>
            <tr>
              <th scope="row">12 September 2019</th>
              <td>Mmmd</td>
              <td>Maxime Regal</td>
              <td>Rp. 50.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>