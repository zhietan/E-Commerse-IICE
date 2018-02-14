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
      <section>
      	<!-- Top Categories-->
      <section class="container padding-top-3x">
        <h3 class="text-center mb-30">Top Categories</h3>
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
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="<?php echo base_url(); ?>pembeli/kategori_produk">Semua Categories</a></div>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/02.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Cole Haan Crossbody</a></h3>
              <h4 class="product-price">$200.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
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
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
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
