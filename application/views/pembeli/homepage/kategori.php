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
    
 
  <div class="container">
    
    
    <section class="container padding-top-3x">
       
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/01.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url();?>assets/img/shop/categories/02.jpg" alt="Category"><img src="<?php echo base_url();?>assets/img/shop/categories/03.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Clothing</h4>
                <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/04.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url();?>assets/img/shop/categories/05.jpg" alt="Category"><img src="<?php echo base_url();?>assets/img/shop/categories/06.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Shoes</h4>
                <p class="text-muted">Starting from $56.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/07.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url();?>assets/img/shop/categories/08.jpg" alt="Category"><img src="<?php echo base_url();?>assets/img/shop/categories/09.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Bags</h4>
                <p class="text-muted">Starting from $27.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/01.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url();?>assets/img/shop/categories/02.jpg" alt="Category"><img src="<?php echo base_url();?>assets/img/shop/categories/03.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Clothing</h4>
                <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/04.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url();?>assets/img/shop/categories/05.jpg" alt="Category"><img src="<?php echo base_url();?>assets/img/shop/categories/06.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Shoes</h4>
                <p class="text-muted">Starting from $56.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/07.jpg" alt="Category"></div>
                  <div class="thumblist"><img src="<?php echo base_url();?>assets/img/shop/categories/08.jpg" alt="Category"><img src="<?php echo base_url();?>assets/img/shop/categories/09.jpg" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Bags</h4>
                <p class="text-muted">Starting from $27.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html">View Products</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="<?php echo base_url(); ?>">Kembali ke Home Page</a></div>

      </section>
  </div>

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
