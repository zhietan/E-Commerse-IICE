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
    
 
  
    <div class="container padding-top-2x mb-2">
        <div class="row">
          <!-- Sidebar          -->
          <div class="col-lg-3">
            <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopCategories"><i class="icon-layout"> </i></button>
            <aside class="sidebar sidebar-offcanvas">
              <section class="widget widget-categories">
                <h2 class="text-bold">HP & SMARTPHONE</h2>
                <ul>
                  <li><a href="#">Samsung</a><span>(254)</span></li>
                  <li><a href="#">Oppo</a><span>(39)</span></li>
                  <li><a href="#">Asus</a><span>(205)</span></li>
                  <li><a href="#">Vivo</a><span>(128)</span></li>
                  <li><a href="#">Xiaomi</a><span>(104)</span></li>
                  <li><a href="#">LG</a><span>(217)</span></li>
                  <li><a href="#">Sony</a><span>(95)</span></li>
                  <li><a href="#">Acer</a><span>(310)</span></li>
                  <li><a href="#">Lenovo</a><span>(134)</span></li>
                  <li><a href="#">Advance</a><span>(73)</span></li>
                  <li><a href="#">Mito</a><span>(446)</span></li>
                  <li><a href="#">Infinix</a><span>(87)</span></li>
                  
                </ul>
              </section>
              <section class="widget widget-categories">
                <h2 class="text-bold">Aksesoris</h2>
                <ul>
                  <li><a href="#">Headset</a><span>(254)</span></li>
                  <li><a href="#">Sparepart & Tools</a><span>(39)</span></li>
                  <li><a href="#">Powerbank</a><span>(205)</span></li>
                  <li><a href="#">Momory Card</a><span>(128)</span></li>
                  <li><a href="#">Kartu Perdana</a><span>(104)</span></li>
                  <li><a href="#">Hard Casing</a><span>(217)</span></li>
                  <li><a href="#">Aksesoris Handphone</a><span>(95)</span></li>
                  
                  
                </ul>
              </section>
            </aside>
          </div>
          <!-- Categories-->
          <div class="col-lg-9">
            <!-- Promo banner-->
            <div class="alert alert-image-bg alert-dismissible fade show text-center mb-4" style="background-image: url(<?php echo base_url();?>assets/img/shop/categories/hp.jpg);"><span class="alert-close text-white" data-dismiss="alert"></span>
              <div class="h3 text-medium text-white padding-top-1x padding-bottom-1x"><i class="icon-product" style="font-size: 33px; margin-top: -5px;"></i>&nbsp;&nbsp;Lebih dari 230 jenis Smartphone&nbsp;&nbsp;&nbsp;
                
              </div>
            </div>
            <div class="row">

              <div class="col-sm-6">
                <div class="card text-center">
                  <div class="gallery-item merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"><br>90 Produk</div>
                  <div class="gallery-item"><a href="detail_produk"><img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/asuslaptop.jpg" alt="Team"></a> <span class="caption">Never War Bag</span></div>
                </div>
              </div>
             
              <!-- subkategoru -->
              <div class="col-sm-6">
                <div class="card text-center">
                  <div class="gallery-item merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/oppo.png"><br>90 Produk</div>
                  <div class="gallery-item"><a href="detail_produk"><img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/asuslaptop.jpg" alt="Team"></a> <span class="caption">Never War Bag</span></div>
                </div>
              </div>
              <!-- subkategoru -->
              <div class="col-sm-6">
                <div class="card text-center">
                  <div class="gallery-item merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/vivo.png"><br>90 Produk</div>
                  <div class="gallery-item"><a href="detail_produk"><img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/asuslaptop.jpg" alt="Team"></a> <span class="caption">Never War Bag</span></div>
                </div>
              </div>
              <!-- subkategoru -->
               <div class="col-sm-6">
                <div class="card text-center">
                  <div class="gallery-item merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/mi.png"><br>90 Produk</div>
                  <div class="gallery-item"><a href="detail_produk"><img class="card-img-top" src="<?php echo base_url();?>assets/img/shop/products/hp/asuslaptop.jpg" alt="Team"></a> <span class="caption">Never War Bag</span></div>
                </div>
              </div>
              

            </div>
          </div>
        </div>
      </div>
     <section> <!-- resserler -->
      <div class="container">
        <hr class="">
        <div class="row" style="margin-top:5px">
          
             <h4 class="text-danger text-bold text-uppercase">Smartphone Terlaris</h4>
          
          <!-- <div class="container-iice"> -->
            <div class="container padding-bottom-1x mb-1">
        <!-- Shop Toolbar-->
        
        <!-- Products Grid-->
        <div class="isotope-grid cols-5 mb-2">
          <div class="gutter-sizer"></div>
          <div class="grid-sizer"></div>
          
                           
        
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div>
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk">
                <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_zenfone.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">ASUS Zenfone 4 Max 3/32 GB </a></h3>
              <h6 align="center">
                <del>Rp.2.400.000</del>&nbsp;Rp.1.200.000
                
              </h6>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">

              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div>
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2000.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="Sudah masuk Keranjang anda">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
               <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/samsung.png"></div>
                <div class="rating-stars">
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star"></i>
                </div>
                <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk"><img src="<?php echo base_url();?>assets/img/shop/products/hp/samsungj7.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Samsung J7 Pro 3/32</a></h3>
              <h4 class="product-price">Rp.3.500.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/oppo.png"></div>
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk">
                <img src="<?php echo base_url();?>assets/img/shop/products/hp/oppof.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Oppo F5 4/35 GB</a></h3>
              <h4 class="product-price">Rp. 4.500.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
               <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/oppo.png"></div>
                <div class="rating-stars">
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star"></i>
                  
                </div><a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk"><img src="<?php echo base_url();?>assets/img/shop/products/hp/oppof56gb.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Oppo F5 6/64 GB</a></h3>
              <h4 class="product-price">Rp.7.500.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Termurah -->

    <section> <!-- resserler -->
      <div class="container">
        <hr class="">
        <div class="row" style="margin-top:5px">
          
             <h4 class="text-danger text-bold text-uppercase">Smartphone Termurah</h4>
          
          <!-- <div class="container-iice"> -->
            <div class="container padding-bottom-2x mb-1">
        <!-- Shop Toolbar-->
        
        <!-- Products Grid-->
        <div class="isotope-grid cols-5 mb-2">
          <div class="gutter-sizer"></div>
          <div class="grid-sizer"></div>
          
                           
        
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div>
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk">
                <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_zenfone.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">ASUS Zenfone 4 Max 3/32 GB </a></h3>
              <h6 align="center">
                <del>Rp.2.400.000</del>&nbsp;Rp.1.200.000
                
              </h6>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">

              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div>
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2000.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="Sudah masuk Keranjang anda">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
               <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/samsung.png"></div>
                <div class="rating-stars">
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star"></i>
                </div>
                <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk"><img src="<?php echo base_url();?>assets/img/shop/products/hp/samsungj7.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Samsung J7 Pro 3/32</a></h3>
              <h4 class="product-price">Rp.3.500.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/oppo.png"></div>
              <a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk">
                <img src="<?php echo base_url();?>assets/img/shop/products/hp/oppof.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Oppo F5 4/35 GB</a></h3>
              <h4 class="product-price">Rp. 4.500.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
               <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/oppo.png"></div>
                <div class="rating-stars">
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star filled"></i>
                  <i class="icon-star"></i>
                  
                </div><a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk"><img src="<?php echo base_url();?>assets/img/shop/products/hp/oppof56gb.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="<?php echo base_url();?>pembeli/produk/detail_produk">Oppo F5 6/64 GB</a></h3>
              <h4 class="product-price">Rp.7.500.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  

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
