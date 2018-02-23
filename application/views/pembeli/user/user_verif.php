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
            <h3 class="card-title">Aktivasi Akun IICE anda </h3>
            <p class="card-text">Hallo <?php echo $name;?> Aktivasi akun anda telah di kirim ke email <b><?php echo $emails;?></b></p>
           <hr>
              <u>Silahkan Cek Email Masuk anda</u>
            </p>
            <p>Untuk mengaktifkan akun anda silahkan cek kotak masuk pada email anda</p>
            <p>Jika Belum menerima Email : <a href="#">Kirim Ulang</a></p>
            <div class="padding-top-1x padding-bottom-3x">
              <a class="btn btn-outline-primary" href="order-tracking.html"><i class="icon-lock"></i>&nbsp;Login</a>
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
