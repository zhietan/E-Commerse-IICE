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
	<!-- Navigations -->
	<noscript>
      <iframe src="../../../../www.googletagmanager.com/ns6079.html?id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
	<?php $this->load->view('nav');?>

	<?php $this->load->view('footer');?>

	<div class="modal fade" id="at-signup" tabindex="-1" role="dialog">
                 <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Daftar</h4>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" align="center">
                     
                  

                    <div class="form-group row">
              <label class="col-2 col-form-label" for="text-input">Nama Lengkap</label>
              <div class="col-10">
                <input class="form-control" type="text" id="text-input" value="">
              </div>
            </div>

                    <div class="form-group row">
              <label class="col-2 col-form-label" for="email-input">Email</label>
              <div class="col-10">
                <input class="form-control" type="email" id="email-input" value="">
              </div>
            </div>
          
            <div class="form-group row">
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
            </div>

              <button class="btn btn-primary"> <a class="social-button sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a>
                    Daftar dengan Facebook </button>

   					<button class="btn btn-outline-secondary">
                    <a class="social-button sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a>
                    &nbsp;Daftar Dengan Google&nbsp;</button>



                    </div>
                    <div class="modal-footer">
            <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary btn-sm" type="button">Daftar</button>
          </div>
        </div>
      </div>
    </div>
	<content>
		<div class="offcanvas-wrapper">
		<section class="hero-slider" style="background-image: url(img/hero-slider/main-bg.jpg);">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="<?php echo base_url();?>assets/img/hero-slider/logo02.png" alt="Puma">
                    <div class="h2 text-body text-normal mb-2 pt-1">Puma Backpacks Collection</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">starting at <span class="text-bold">$37.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">View Offers</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="<?php echo base_url();?>assets/img/hero-slider/02.png" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-200 mb-4" src="<?php echo base_url();?>assets/img/hero-slider/logo01.png" alt="Converse">
                    <div class="h2 text-body text-normal mb-2 pt-1">Chuck Taylor All Star II</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$59.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="<?php echo base_url();?>assets/img/hero-slider/01.png" alt="Chuck Taylor All Star II"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block mb-4" src="<?php echo base_url();?>assets/img/hero-slider/logo03.png" style="width: 125px;" alt="Motorola">
                    <div class="h2 text-body text-normal mb-2 pt-1">Smart Watch Moto 360 2nd</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$299.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="<?php echo base_url();?>assets/img/hero-slider/03.png" alt="Moto 360"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
		<section> <!-- baner -->
			<div class="container">
				<div class="row container-iice" style="margin-top:30px;padding: 5px;">
					<div class="col-md-12">
						
				</div>
				<div class="row" style="margin-top:5px;">
					<div class="col-md-6" style="background-color:#fff;padding:5px;">
						<a href="<?php echo base_url(); ?>pembeli/baner"><img src="<?php echo base_url(); ?>assets/gambar/ktg-samsung.jpg" alt="fashion wanita" style="width: 100%; height: 150px;"></a>
					</div>
					<div class="col-md-6" style="background-color:#fff;padding:5px;">
						<a href="<?php echo base_url(); ?>pembeli/baner"><img src="<?php echo base_url(); ?>assets/gambar/ktg-handphone.jpg" alt="fashion wanita" style="width: 100%; height: 150px;"></a>
					</div>
				</div>
			</div>
		</section> <!-- akhir baner produk -->
		<section> <!-- kategori produk -->
			<div class="container">
				<div class="row" style="margin-top:5px;padding-bottom:5px;">
					<div class="col-md-12">
						<div style="font-family:roboto;font-weight:bold;color:#efcc2f;font-size:1.7rem;">KATEGORI PRODUK</div>
					</div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
					<div class="col-md-2 container-iice" style="padding: 2px;">
				    <a href="<?php echo base_url(); ?>pembeli/kategori_produk">
							<div class="card text-center" style="border-radius:0;">
								<img class="card-img" id="card-img" src="<?php echo base_url(); ?>assets/gambar/baner-oppo.jpg" alt="Card image" style="border-radius:0;">
						    <div class="card-body">
					        <p class="card-title label label-primary">KATEGORI PRODUK</p>
					      </div>
					    </div>
				    </a>
				  </div>
				</div>
			</div>
		</section> <!-- akhir kategori produk -->
		<section> <!-- resserler -->
			<div class="container">
				<div class="row" style="margin-top:5px">
					<div class="col-md-12">
						<div style="font-family:roboto;font-weight:bold;color:#efcc2f;font-size:1.7rem;">RESSELER</div>
					</div>
					<!-- <div class="container-iice"> -->
						<a href="<?php echo base_url(); ?>pembeli/resseler">
							<div class="col-md-2 container-iice">
								<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
							</div>
						</a>
						<a href="<?php echo base_url(); ?>pembeli/resseler">
							<div class="col-md-2 container-iice">
								<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
							</div>
						</a>
						<a href="<?php echo base_url(); ?>pembeli/resseler">
							<div class="col-md-2 container-iice">
								<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
							</div>
						</a>
						<a href="<?php echo base_url(); ?>pembeli/resseler">
							<div class="col-md-2 container-iice">
								<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
							</div>
						</a>
						<a href="<?php echo base_url(); ?>pembeli/resseler">
							<div class="col-md-2 container-iice">
								<img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-pria.jpg" alt="" style="width:100%;height:100px;">
							</div>
						</a>
						<a href="<?php echo base_url(); ?>pembeli/resseler">
							<div class="col-md-2 container-iice">
								<img src="<?php echo base_url(); ?>assets/gambar/ktg-elektronik.png" alt="" style="width:100%;height:100px;">
							</div>
						</a>

					<!-- </div> -->
				</div>
			</div>
		</section> <!-- akhir reseller -->
		<section> <!-- pencarian populer -->
			<div class="container">
				<div class="row" style="margin-top:5px">
					<div class="col-md-12">
						<div style="font-family:roboto;font-weight:bold;color:#efcc2f;font-size:1.7rem;">PRODUK POPULER</div>
					</div>
					<a href="<?php echo base_url(); ?>pembeli/produk_populer">
						<div class="col-md-2 container-iice">
							<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="">
						</div>
					</a>
					<a href="<?php echo base_url(); ?>pembeli/produk_populer">
						<div class="col-md-2 container-iice">
							<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
						</div>
					</a>
					<a href="<?php echo base_url(); ?>pembeli/produk_populer">
						<div class="col-md-2 container-iice">
							<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
						</div>
					</a>
					<a href="<?php echo base_url(); ?>pembeli/produk_populer">
						<div class="col-md-2 container-iice">
							<img src="<?php echo base_url(); ?>assets/gambar/oppo.jpg" alt="" style="width:100%;height:100px;">
						</div>
					</a>
					<a href="<?php echo base_url(); ?>pembeli/produk_populer">
						<div class="col-md-2 container-iice">
							<img src="<?php echo base_url(); ?>assets/gambar/ktg-sepatu-pria.jpg" alt="" style="width:100%;height:100px;">
						</div>
					</a>
					<a href="<?php echo base_url(); ?>pembeli/produk_populer">
						<div class="col-md-2 container-iice">
							<img src="<?php echo base_url(); ?>assets/gambar/ktg-elektronik.png" alt="" style="width:100%;height:100px;">
						</div>
					</a>
				</div>
			</div>
			<div class="site-backdrop"></div>
		</section> <!-- akhir pencarian populer -->
		
	</div>
	</content>

<!-- footer-->
	<?php $this->load->view('footers');?>


	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>

</html>
