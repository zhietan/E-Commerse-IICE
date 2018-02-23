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
            	<div class="modal-body" align="center">
                    <div class="col-xl-6 col-md-6 col-sm-4"><a class="btn btn-primary facebook-btn" href="#"><i class="socicon-facebook"></i>&nbsp;Daftar dengan Facebook</a></div>
               			 <div class="col-xl-6 col-md-6 col-sm-4"><a class="btn btn-primary google-btn" href="#"><i class="socicon-googleplus"></i>&nbsp;Daftar dengan Google+</a></div>
               			 </div>



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
      <section class="bg-faded">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <hr class="margin-bottom-1x">
            <!-- carousel banner kanan -->
            <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true,&quot;autoplay&quot;: true }">
              <img src="<?php echo base_url();?>assets/img/shop/products/promo/1.jpg" alt="Image">
              <img src="<?php echo base_url();?>assets/img/shop/products/promo/2.jpg" alt="Image">
              <img src="<?php echo base_url();?>assets/img/shop/products/promo/3.jpg" alt="Image">
            </div>
          
          </div>
          
            <!--  Men promo -->
            <div class="col-md-6">
             <div class="hidden-xs-down">
              <hr>
              <h3 class="text-bold pitapromo">Promo Terbaru Minggu ini</h3>
              <br>
            <div class="card-group">
              <div class="card margin-bottom-1x">
                <div class="text-light hotpromo"><h6>5 Hari lagi</h6></div>
                <a href="#">
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/promo/hp1.jpg" alt="Card image">
                  </a>
                  <a href="#">
                  </a>
                </div>
                <div class="card margin-bottom-1x">
                <div class="text-light hotpromo"><h6>6 Hari lagi</h6></div>
                <a href="#">
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/promo/hp3.jpg" alt="Card image">
              </a>
    
                </div>
                <div class="card margin-bottom-1x">
                <div class="text-light hotpromo"><h6>10 Hari lagi</h6></div>
                <a href="#">
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/promo/hp3.jpg" alt="Card image">
              </a>
   
                </div>

            </div>
           <!--  <div class="card-group">
              <div class="card margin-bottom-1x">
                <div class="text-light hotpromo"><h6>Diskon 50%</h6></div>
                <a href="#">
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img04.jpg" alt="Card image">
                  </a>
                  <a href="#">
                  </a>
                </div>
                <div class="card margin-bottom-1x">
                <div class="text-light hotpromo"><h6>Diskon 20%</h6></div>
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img05.jpg" alt="Card image">
    
                </div>
                <div class="card margin-bottom-1x">
                <div class="text-light hotpromo"><h6>Diskon 10%</h6></div>
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img06.jpg" alt="Card image">
   
                </div>

            </div> -->
            </div>
            </div>
          </div>
           
      </div>
    </section>
      <!-- Akhir Silde Bamnner atas -->
      <section>
        <div class="container">
      	<!-- Top Categories-->
        <div class="col-xl-12 content-box ">
                <div class="row row-featured row-featured-category">

                   
                    <div class="col-xl-12  box-title no-border">
                        <div class="inner"><h2><span>Kategori</span>
                            Produk <a href="<?php echo base_url();?>pembeli/kategori_produk" class="sell-your-item">Lihat Lebih banyak <i
                                    class="  icon-th-list"></i> </a></h2>
                        </div>
                    </div>
                    <?php foreach ($categoryproduct_list as $cpl) {
                    ?>
                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="<?php echo base_url(); ?>pembeli/produk/kategori_produk/viewcategoryproduct/<?php echo $cpl->ProductCategoryID; ?>"><img src="<?php echo base_url();?>assets/img/Kategori/camera.jpg" class="img-responsive" alt="img">
                            <h6> <?php echo $cpl->ProductCategoryName; ?> </h6></a>
                    </div>
                    <?php 
                      }
                    ?>

                </div>


            </div>
          </div>
      <!-- <section class="container">
         <div class="hidden-xs-down padding-top-2x">
       
        <h3 class="text-left">Kategory Produk</h3>
        <div class="row">
          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/01.jpg" alt="Category"></div>
                </div></a>
                <div class="text-center">Pakaian Pria</div>
              
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/04.jpg" alt="Category"></div>
                </div></a>
                <div class="text-center">Handphone</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/07.jpg" alt="Category"></div> 
                </div></a>
                <div class="text-center">Komputer</div>
            </div> 
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/05.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Fashion Bayi & Anak</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/04.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Sepatu Pria</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/03.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Tas Pria</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/02.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Jam Tangan</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/10.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Elektronik</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/09.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Pakaian Wanita</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/14.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Kecantikan</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/16.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Perlengkapan Rumah</div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                <div class="inner">
                  <div class="main-img"><img src="<?php echo base_url();?>assets/img/shop/categories/17.jpg" alt="Category"></div>     
                </div></a>
                <div class="text-center">Hobi & Koleksi</div>
            </div>
          </div>

        </div>
        <div class="text-center"><a class="btn btn-primary margin-top-none" href="<?php echo base_url(); ?>pemBELI SEKARANG/kategori_produk">Lihat Semua Categories</a></div>
      </div>
      </section> -->
      </section>

		
		<section> <!-- resserler -->
			<div class="container">
        <hr class="">
				<div class="row" style="margin-top:5px">
          
             <h4 class="text-danger text-bold text-uppercase">Smartphone Terlaris</h4>
					
					<!-- <div class="container-iice"> -->
						<div class="container padding-bottom-2x mb-1">
        <!-- Shop Toolbar-->
        <div class="shop-toolbar padding-bottom-1x mb-2">
          <div class="column">
            <div class="shop-sorting">
              <label for="sorting">Urut Berdasarkan :</label>
              <select class="form-control" id="sorting">
                <option>Ter Populer</option>
                <option>ter-Murah - ter-Mahal</option>
                <option>ter-Hamal - ter-Murah</option>
                <option>A - Z Order</option>
                <option>Z - A Order</option>
              </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
            </div>
          </div>
          <!-- <div class="column">
            <div class="shop-view"><a class="grid-view active" href="shop-grid-ns.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ns.html"><span></span><span></span><span></span></a></div>
          </div> -->
        </div>
        <!-- Products Grid-->
        <div class="isotope-grid cols-5 mb-2">
          <div class="gutter-sizer"></div>
          <div class="grid-sizer"></div>
          
                           
        
          <!-- Product-->
          <?php 
            foreach ($product_list as $pl) {
          ?>
          <div class="grid-item">
            <div class="product-card">
              <!-- <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div> -->
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/produk/detail_produk/<?php echo $pl->ProductID; ?>">
                <img src="<?php echo base_url();?>assets/img/shop/products/hp/<?php echo $pl->ProductsImage; ?>" alt="Product">
              </a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk/<?php echo $pl->ProductID; ?>"><?php echo $pl->DescriptionsTitle; ?> </a></h3>
              <h6 align="center">
                <del><!-- harga yang di diskon --></del>&nbsp;Rp.<?php echo number_format($pl->ProductPrice, 2, '.', ','); ?>
                
              </h6>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <a href="<?php echo base_url(); ?>pembeli/produk/keranjang/add_cart/<?php echo $pl->ProductID; ?>" class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</a>
                <!-- <a href="<?php echo base_url(); ?>pembeli/produk/keranjang/add_cart/<?php echo $pl->ProductID; ?>">add to cart</a> -->
              </div>
            </div>
          </div>
          <?php 
            }
          ?>     

					<!-- </div> -->
				</div>
			</div>
		</section> <!-- akhir reseller -->
    <section> <!-- resserler -->
      <div class="container">
        <h4 class="text-warning text-bold text-uppercase">Produk Terlaris</h4>
            <hr class="margin-bottom-1x">
            <div class="row">

              <div class="col-sm-2 mb-4">
                <div class="card text-center">
                  <div class="text-light pitapromo"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div>
                  <a href="#"><img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/asuslaptop.jpg" alt="Team"></a>
                  
                    <h5 class="card-title">Asus ZenBook X441N Intel Core i3</h5>
                    <h4 class="product-price">Rp.3.550.000</h4>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
                  
                </div>
              </div>

              <div class="col-sm-2 mb-4">
                <div class="card text-center">
                  <div class="text-light pitapromo"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/philip.png"></div>
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/headset.jpg" alt="Team">
                  
                    <h5 class="card-title">Headphone Philip SHL3060</h5>
                    <h4 class="product-price">$29.99</h4>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
                  
                </div>
              </div>

              <div class="col-sm-2 mb-4">
                <div class="card text-center">
                  <div class="text-light pitapromo"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/mi.png"></div>
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/powerbank.jpg" alt="Team">
                  
                    <h5 class="card-title">Powerbank Xiaomi 1000 MAh</h5>
                    <h4 class="product-price">$29.99</h4>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
                  
                </div>
              </div>

              <div class="col-sm-2 mb-4">
                <div class="card text-center">
                  <div class="text-light pitapromo"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/canon.png"></div>
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/CanonEOS.jpg" alt="Team">
                  
                    <h5 class="card-title">Canon EOS M10</h5>
                    <h4 class="product-price">$29.99</h4>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
                 
                </div>
              </div>

              <div class="col-sm-2 mb-4">
                <div class="card text-center">
                  <div class="text-light pitapromo"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/logitek.png"></div>
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/mouse.jpg" alt="Team">
                
                    <h5 class="card-title">Logitech M557 Bluetooth</h5>
                    <h4 class="product-price">$29.99</h4>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
                 
                </div>
              </div>

              <div class="col-sm-2 mb-4">
                <div class="card text-center">
                  <div class="text-light pitapromo"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/sandisk.png"></div>
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/msd.jpg" alt="Team">
                 
                    <h5 class="card-title">Kane Montoya</h5>
                    <h4 class="product-price">$29.99</h4>
                    <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
                  
                </div>
              </div>



              
        
    </section> 

    <!-- akhir reseller -->
		<!-- Brand populer -->
			 <section class="bg-faded padding-top-1x padding-bottom-1x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Brands Resmi</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/1.png" alt="Asus">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/2.png" alt="Samsung">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/3.png" alt="Mi">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/4.png" alt="oppo">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/5.png" alt="Sandisk">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/6.png" alt="vivo">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/7.png" alt="Canon">
            <img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/8.png" alt="Philip">
            <img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/9.png" alt="Motorola">
          </div>
        </div>
      </section>
		
		
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
