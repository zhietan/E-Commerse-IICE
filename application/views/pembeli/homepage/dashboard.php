<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/iice-logo.png">
  <title>OL-SHOP</title>
  <!-- Tell the browser to be responsive to screen width -->
 <!--  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
  <!-- Bootstrap 3.3.7 -->
 <!--  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/font-awesome/css/font-awesome.min.css"> -->
  <!-- Ionicons -->
 <!--  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/Ionicons/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>dist/css/AdminLTE.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<!--   <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
 -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <?php $this->load->view('head');?>
  </head>
  <!-- Body-->
<body class="hold-transition skin-blue layout-top-nav" style="background-color: #fff;">
    <?php $this->load->view('footer');?>
    <!-- Google Tag Manager (noscript)-->
    <?php $this->load->view('nav');?>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<!-- <div class="wrapper"> -->

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>BRAND</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></a>
              <!-- <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul> -->
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="cari produk" style="background-color: white;border-radius: 3px;width: 600px; margin-right: 0;">
              <button type="submit" name="cari" class="form-control btn btn-default" style="background-color: orange; border-color: orange; color: white;margin-left: 0;">Cari</button>
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <a href="#"><i class="fa fa-shopping-cart"></i></a>
            </li>
            <li><a href="#">Daftar</a></li>
            <li><a href="#">Masuk</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <!-- <div class="container"> -->
    <!-- <div class="container"> -->
      <!-- <section class="baner">
        <div class="baner-big">
          <img src="<?php echo base_url(); ?>assets/gambar/baner-samsung.jpg" alt="..." class="img-baner-big">
        </div>

        <div class="baner-small">
          <img src="<?php echo base_url(); ?>assets/gambar/baner-vivo.png" alt="..." class="img-baner-small" style="margin-bottom: 4px;">
          <img src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="..." class="img-baner-small">
        </div>
      </section> --> <!-- baner -->
      <section class="kategori-produk">
        <h5 class="title-kategori-produk">KATEGORI PRODUK</h5>
        <!-- <ul>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-pria.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-pria.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-handphone.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-elektronik.png"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-pria.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-wanita.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-fashion-wanita.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
          <li>
            <a href="#"><img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-pria.jpg"></a>
            <p>Sepatu Pria</p>
          </li>
        </ul> -->
      </section> <!-- kategori produk -->
      <section></section> <!-- pencarian yang paling populer -->
      <section></section> <!-- produk paling populer -->
      <section></section> <!-- mitra bisnis -->
    <!-- </div> -->
  <!-- </div> -->


  <footer class="main-footer">
    <!-- <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div> -->
    <!-- /.container -->
  </footer>
<!-- </div> -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- <script src="<?php echo base_url()."template/"; ?>bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php echo base_url()."template/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- SlimScroll -->
<!-- <script src="<?php echo base_url()."template/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastC -->
<!-- <script src="<?php echo base_url()."template/"; ?>bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url()."template/"; ?>dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url()."template/"; ?>dist/js/demo.js"></script> -->
</body>
</html>
