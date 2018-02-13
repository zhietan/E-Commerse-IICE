<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/iice-logo.png">
  <title>OL-SHOP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(). 'assets/'; ?>css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav" style="background-color: #fff;">
<div class="wrapper">

  <header class="main-header">


    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>BRAND</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>



        </div>
        <form class="form-inline">
                     
                      <ul class="nav navbar-nav navbar-right bdr">
                         <li><a href="#" data-toggle="modal" data-target="#at-signup">Daftar</a></li>
                        <li ><a href="#" data-toggle="modal" data-target="#at-login">Masuk</a></li>
                      </ul>
                    </form>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
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
                    
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <section class="at-login-form">
        <!-- MODAL LOGIN -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

        <div class="modal fade" id="at-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <button class="btn-fb"> <i class="fa fa-facebook-official pull-left" aria-hidden="true"></i>
                  Masuk dengan Facebook </button> <br>  
                  <button class="btn-gp"> <i class="fa fa-google-plus-square pull-left" aria-hidden="true"></i>
                    Masuk dengan Google </button> <br>  
                    <div class="signup-or-separator">
                      <span class="h6 signup-or-separator--text">atau</span>
                      <hr>
                    </div>
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
                      </div>
                      <div class="row"> 
                        <div class="col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Ingatkan saya
                            </label>
                          </div>  
                        </div>
                        <div class="col-md-4 col-md-offset-2">  
                          <p class="frgt-pswd"   data-toggle="modal" data-dismiss="modal"  data-target="#at-reset-pswd">  Lupa Password ?</p>
                        </div>
                      </div>
                      <button type="submit" class="btn-lgin">Masuk</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <div class="row"> 
                      <div class="col-md-6">
                        <p class="ta-l">Beleum Mempunyai Akun ? </p>
                      </div>  
                      <div class="col-md-4 col-md-offset-2">  
                        <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signup" >Daftar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL LOGIN ENDS -->
            <!-- MODAL SIGNUP -->
            <div class="modal fade" id="at-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <button class="btn-fb"> <i class="fa fa-fw fa-facebook pull-left" aria-hidden="true"></i>
                      Signup with Facebook  </button> <br>  
                      <button class="btn-gp"> <i class="fa fa-fw fa-google-plus pull-left" aria-hidden="true"></i>
                        Signup with Google  </button> <br>  
                        <div class="signup-or-separator">
                          <span class="h6 signup-or-separator--text">or</span>
                          <hr>
                        </div>
                        <button type="submit" class="btn-lgin" data-toggle="modal"  data-dismiss="modal" data-target="#at-signup-filling">Signup with Email</button> <hr> 
                        <p>By signing up, I agree to Airbnb’s , Payments <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, <a href="#">Guest Refund Policy</a>, and <a href="#">Host Guarantee Terms</a>. </p>
                      </div>
                      <div class="modal-footer">
                        <div class="row"> 
                          <div class="col-md-6">
                            <p class="ta-l">Already a Member? </p>
                          </div>  
                          <div class="col-md-4 col-md-offset-2">  
                            <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-login">Login</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MODAL SIGNUP FORM FILLING -->
                <div class="modal fade" id="at-signup-filling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <p>Sign up with <a href="#">Facebook</a>  or <a href="#">Google</a></p>
                        <div class="signup-or-separator">
                          <span class="h6 signup-or-separator--text">or</span>
                          <hr>
                        </div>
                        <form>
                          <div class="form-group">
                            <input type="text" class="form-control-form " id="exampleInputEmaillog" placeholder="Full Name">
                          </div>  
                          <div class="form-group">
                            <input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
                          </div>

                          <div class="row"> 
                            <div class="col-md-12"> 
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> 
                                  I’d like to receive coupons and inspiration 
                                </label>
                              </div>

                              <p>By signing up, I agree to Airbnb’s , Payments <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, <a href="#">Guest Refund Policy</a>, and <a href="#">Host Guarantee Terms</a>. </p>
                            </div>      
                          </div>
                          <button type="submit" class="btn-lgin">Signup</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <div class="row"> 
                          <div class="col-md-6">
                            <p class="ta-l">Already a Member? </p>
                          </div>  
                          <div class="col-md-4 col-md-offset-2">  
                            <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-login">Login</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MODAL SIGNUP FORM FILLING -->
                <!-- MODAL FORGOT PASSWORD -->
                <div class="modal fade" id="at-reset-pswd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <p> Enter the email address associated with your account, and we’ll email you a link to reset your password. </p>
                          <div class="form-group">

                            <input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- MODAL HELP -->
                <div class="modal fade" id="at-helping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" arat-loginia-label="Close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <input type="text" class="form-control-form " id="exampleInputEmaillog" placeholder="Enter Your Searches ">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <div class="row"> 
                          <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" >Send areset Link</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </section>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <section class="baner">
        <div class="baner-big">
          <h1>Hello World</h1>
        </div>
        <div class="baner-small">
          
        </div>
    </section> <!-- baner -->
    <section></section> <!-- pencarian yang paling populer -->
    <section></section> <!-- kategori produk -->
    <section></section> <!-- produk paling populer -->
    <section></section> <!-- mitra bisnis -->
    </div>
    <!-- <div class="container">
      <div class="row" style="margin-top: 10px;">
        <div class="col-md-8 baner">

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo base_url(); ?>assets/gambar/1.svg" alt="...">
                <div class="carousel-caption">
                  
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url(); ?>assets/gambar/2.svg" alt="...">
                <div class="carousel-caption">
                  
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url(); ?>assets/gambar/3.svg" alt="...">
                <div class="carousel-caption">
                  
                </div>
              </div>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg" alt="...">
            <div class="caption">
              <h3>Produk</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg" alt="...">
            <div class="caption">
              <h3>Produk</h3>
              <p>...</p>
              <p>
                <a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg" alt="...">
            <div class="caption">
              <h3>Produk</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg" alt="...">
            <div class="caption">
              <h3>Produk</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg" alt="...">
            <div class="caption">
              <h3>Produk</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>assets/gambar/samsung.jpg" alt="...">
            <div class="caption">
              <h3>Produk</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div> -->
  </div>


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
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."template/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."template/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."template/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."template/"; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."template/"; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."template/"; ?>dist/js/demo.js"></script>
</body>
</html>
