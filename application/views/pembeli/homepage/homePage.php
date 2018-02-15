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
      
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <hr class="margin-bottom-1x">
            <!-- carousel banner kanan -->
            <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true,&quot;autoplay&quot;: true }">
              <img src="<?php echo base_url();?>assets/img/components/img01.jpg" alt="Image">
              <img src="<?php echo base_url();?>assets/img/components/img02.jpg" alt="Image">
              <img src="<?php echo base_url();?>assets/img/components/img03.jpg" alt="Image">
            </div>
          
          </div>
          
            <!--  Men promo -->
            <div class="col-md-6">
             <div class="hidden-xs-down">
              <hr class="margin-bottom-1x">
            <div class="card-group">

              <div class="card margin-bottom-1x">
                <a href="#">
                  <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img04.jpg" alt="Card image">
                  </a>
                  <div class="text-danger" align="center">5 hari lagi</div>
                  <a href="#">
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img04.jpg" alt="Card image">
                  </a>
                <div class="card-body">
                  <h6 class="text-center">12 Hari lagi</h6>
                </div>
               
              </div>
              <div class="card margin-bottom-1x">
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img05.jpg" alt="Card image">
                 <div class="text-danger" align="center">5 hari lagi</div>
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img04.jpg" alt="Card image">
                <div class="card-body">
                  <h6 class="text-center">12 Hari lagi</h6>
                  
                </div>
                
              </div>
              <div class="card margin-bottom-1x">
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img06.jpg" alt="Card image">
                 <div class="text-danger" align="center">5 hari lagi</div>
                <img class="card-img-top" src="<?php echo base_url();?>assets/img/components/img04.jpg" alt="Card image">
                <div class="card-body">
                  <h6 class="text-center">17 Hari lagi</h6>
                  
                </div>
                
              </div>
            </div>
            </div>

          
            </div>
          <!-- Akhir menu Promo -->
          </div>
           
            
              
          
        
      </div>
      <section>
      	<!-- Top Categories-->
      <section class="container">
         <div class="hidden-xs-down">
        <hr class="">
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
        <div class="text-center"><a class="btn btn-primary margin-top-none" href="<?php echo base_url(); ?>pembeli/kategori_produk">Semua Categories</a></div>
      </div>
      </section>
      </section>
		
		
		<section> <!-- resserler -->
			<div class="container">
				<div class="row" style="margin-top:5px">
					
					<!-- <div class="container-iice"> -->
						<div class="container padding-bottom-3x mb-1">
        <!-- Shop Toolbar-->
        <div class="shop-toolbar padding-bottom-1x mb-2">
          <div class="column">
            <div class="shop-sorting">
              <label for="sorting">Sort by:</label>
              <select class="form-control" id="sorting">
                <option>Popularity</option>
                <option>Low - High Price</option>
                <option>High - Low Price</option>
                <option>Avarage Rating</option>
                <option>A - Z Order</option>
                <option>Z - A Order</option>
              </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
            </div>
          </div>
          <div class="column">
            <div class="shop-view"><a class="grid-view active" href="shop-grid-ns.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ns.html"><span></span><span></span><span></span></a></div>
          </div>
        </div>
        <!-- Products Grid-->
        <div class="isotope-grid cols-4 mb-2">
          <div class="gutter-sizer"></div>
          <div class="grid-sizer"></div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/01.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
              <h4 class="product-price">
                <del>$99.99</del>$49.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/03.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Cole Haan Crossbody</a></h3>
              <h4 class="product-price">$200.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/03.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
              <h4 class="product-price">$155.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/04.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
              <h4 class="product-price">$47.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/05.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Jordan City Man's Hoodie</a></h3>
              <h4 class="product-price">$65.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">40% Off</div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/06.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Palace Shell Track Jacket</a></h3>
              <h4 class="product-price">
                <del>$60.00</del>$36.00
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/07.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Stretch Woven Jogger</a></h3>
              <h4 class="product-price">$69.99</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-muted">Out of stock</div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/08.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Off the Shoulder Top</a></h3>
              <h4 class="product-price">$128.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button><a class="btn btn-outline-secondary btn-sm" href="shop-single.html">View Details</a>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/09.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
              <h4 class="product-price">
                <del>$44.95</del>$34.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/10.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Daily Fabric Cap</a></h3>
              <h4 class="product-price">$31.99</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/11.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
              <h4 class="product-price">$90.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/12.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
              <h4 class="product-price">$49.50</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/13.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Diamond Quilted Backpack</a></h3>
              <h4 class="product-price">$88.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/14.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Skagen Holst Watch</a></h3>
              <h4 class="product-price">$145.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/15.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Metal Star Earings</a></h3>
              <h4 class="product-price">$90.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/16.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Big Wordmark Tote</a></h3>
              <h4 class="product-price">$29.99</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination-->
        <nav class="pagination">
          <div class="column">
            <ul class="pages">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li>...</li>
              <li><a href="#">12</a></li>
            </ul>
          </div>
          <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
        </nav>
      </div>
						

					<!-- </div> -->
				</div>
			</div>
		</section> <!-- akhir reseller -->
		<!-- Brand populer -->
			 <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Brands Resmi</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/01.png" alt="Adidas">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/02.png" alt="Brooks">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/03.png" alt="Valentino">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/04.png" alt="Nike">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/05.png" alt="Puma">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/06.png" alt="New Balance">
          	<img class="d-block w-110 opacity-75 m-auto" src="<?php echo base_url();?>assets/img/brands/07.png" alt="Dior">
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
