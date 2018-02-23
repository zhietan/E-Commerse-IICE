<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/iice-logo.png">
	<title>IICE Indonesia</title>


	

	<?php $this->load->view('head');?>
  </head>
  <!-- Body-->
  <body>
    <?php $this->load->view('footer');?>
    <!-- Google Tag Manager (noscript)-->
    <?php $this->load->view('nav');?>
    
 
  
    <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Verifikasi Akun</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>user</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container mb-2">
        <div class="card text-center">
          <div class="card-body padding-top-1x">
            <h3 class="card-title">SELAMAT DATANG DI IICE </h3>
            <p class="card-text">Hallo <?php echo $name;?> Aktivasi akun anda telah di kirim ke email <b><?php echo $emails;?></b></p>
           <hr>
            </p>
            <p>Silahkan masuk : </p>
            <div class="padding-top-1x padding-bottom-3x">
              <a class="btn btn-outline-primary" data-toggle="modal" data-target="#login"><i class="icon-lock"></i>&nbsp;Login</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Login -->
      <div class="modal fade" id="login" tabindex="-1" role="dialog">
                 <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Login</h4>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" align="center">
                     

                    <div class="form-group row">
              <label class="col-2 col-form-label" for="email-input">Email</label>
              <div class="col-10">
                <input class="form-control" type="email" id="email-input" value="">
              </div>
            </div>
          
            <div class="form-group row">
              <label class="col-2 col-form-label" for="pass-input">Password</label>
              <div class="col-10">
                <input class="form-control" type="password" id="pass-input" value="">
              </div>
            </div>
                    </div>
                    <div class="modal-footer">
                       <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="ex-check31">
                  <label class="custom-control-label" for="ex-check-1">Ingat Saya</label>
                </div>
            <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary btn-sm" type="button">Masuk</button>
          </div>
        </div>
      </div>
    </div>

    
  

	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
  <?php $this->load->view('footers');?>
</body>
</html>
