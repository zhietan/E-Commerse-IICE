
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/iice-logo.png">
  <title>IICE Indonesia</title>

  <!-- css -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'template/'; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/iice-style.css"> -->
  <!-- css Header -->
  <?php $this->load->view('head');?>
</head>
<body>
<?php $this->load->view('nav');?>
  <?php $this->load->view('footer');?>

<div class="offcanvas-wrapper">
      <!-- Page Content-->
      <div class="row no-gutters">
        <div class="col-md-6 fh-section" style="background-image: url(img/logo.png);"><span class="overlay" style="background-color: #F3E2A9; opacity: .100;"></span>
          <div class="d-flex flex-column fh-section py-5 px-3 justify-content-between">
            <div class="w-100 text-center">
             
              
              
              
              <div class="pt-3 hidden-md-up"><a class="btn btn-secondary scroll-to" href="#notify"><i class="icon-mail"></i>&nbsp;Daftar dengan E-mail</a></div>
            </div>
            <div align="center">
               <div class="col-xl-4"><a class="btn facebook-btn" href="#"><i class="socicon-facebook"></i>&nbsp;Daftar dengan Facebook</a></div>
                <div class="col-xl-4"><a class="btn google-btn" href="#"><i class="socicon-googleplus"></i>&nbsp;Daftar dengan Google+</a></div>

            </div>
            <div class="w-100 text-center">
              <p class="text-white mb-2">(021)445 458</p><a class="navi-link-light" href="mailto:support@unishop.com">support@iice.co.id</a>
              <div class="pt-3"><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 fh-section" id="notify" data-offset-top="-1">
          <div class="d-flex flex-column fh-section py-5 px-3 justify-content-center align-items-center">
            <div class="text-center">
              <div class="h1 text-normal mb-2">Daftar!</div>
              <h5 class="text-normal text-muted mb-4">Sudah punya akun iice? masuk <a data-toggle="modal" data-target="#login" href="">Disini</a></h5>
              <!-- Modal Login -->
              
              <form action="<?php echo base_url();?>pembeli/user/verifikasi" method="post">

                <!-- <div class="form-group row">
              <label class="col-2 col-form-label" for="text-input">Nama </label>
              <div class="col-10">
                <input class="form-control" type="text" id="text-input" value="">
              </div>
            </div>

                    <div class="form-group row">
              <label class="col-2 col-form-label" for="email-input">Email</label>
              <div class="col-10">
                <input class="form-control" type="email" id="email-input" value="">
              </div>
            </div> -->
            <div class="form-group">
              <div align="left">
                  <label for="small-pill-input">Nama Lengkap</label>
                  <div class="input-group">
                  <input class="form-control form-control-sm" type="text" id="text-input" placeholder=""><span class="input-group-addon"><i class="icon-head"></i></span>
                  </div>
                </div>

                <div align="left">
                <div class="form-group">
                  <label for="small-pill-input">Nomor Telepon</label>
                  <div class="input-group">
                  <input class="form-control form-control-sm" type="text" id="text-input" placeholder=""><span class="input-group-addon"><i class="icon-phone"></i></span>
                  </div>
                </div>
                </div>
          
                
                <div align="left">
                <div class="form-group">
                  <label for="small-pill-input">Email</label>
                  <div class="input-group">
                  <input class="form-control form-control-sm" type="email" id="email-input" placeholder=""><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>
                </div>
                </div>
                <div align="left">
                <div class="form-group">
                  <label for="small-pill-input">Kata Sandi</label>
                  <div class="input-group">
                  <input class="form-control form-control-sm" type="password" id="password-input" placeholder=""><span class="input-group-addon"><i class="icon-lock"></i></span>
                </div>
                </div>
                </div>

              </div>
          
          
           <!--  <div class="form-group row">
              <label class="col-2 col-form-label" for="tel-input">Phone</label>
              <div class="col-10">
                <input class="form-control" type="tel" id="tel-input" value="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label" for="pass-input">Password</label>
              <div class="col-10">
                <input class="form-control" type="password" id="pass-input" value="">
              </div>
            </div> -->
                <button class="btn btn-primary" type="submit"><i class="icon-mail"></i>&nbsp;Daftar Akun</button>
              </form>
            </div>
            <p>Dengan menekan Daftar akun, saya mengkonfirmasi telah menyutujui<br><a href="#">Syarat dan Ketentuan</a>&nbsp;serta&nbsp;<a href="#">Kebijakan Privasi</a>&nbsp;iice.co.id</p>

          </div>
        </div>
      </div>
    </div>
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
  </body>
  </html>