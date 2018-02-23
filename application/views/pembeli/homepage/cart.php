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
    
 
  
    <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Keranjang</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Keranjang</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Content Cekout -->
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
<!--         <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">&nbsp;&nbsp;Selamat Anda Mendapatkan <strong>290</strong> Points Untuk Transaksi ini</div> -->
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Nama Produk</th>
                <th class="text-center">Banyaknya</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Diskon</th>
                <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="<?php echo base_url(); ?>pembeli/produk/keranjang/clear_cart">Bersihkan Keranjang</a></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->cart->contents() as $items): ?>
              <tr>
                <td>
                  <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="<?php echo base_url();?>assets/img/shop/products/<?php echo $items['image']; ?>" alt="Product"></a>
                    <div class="product-info">
                      <h4 class="product-title">
                        <a href="shop-single.html"><?php echo $items['name']; ?></a>
                      </h4>
                      <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                        <p>
                          <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                  <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                          <?php endforeach; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                    <input type="number" name="qty" value="<?php echo $items['qty']; ?>" class="form-control">
                  </div>
                </td>
                <td class="text-center text-lg text-medium">Rp. <?php echo number_format($items['price'], 2, '.', ','); ?></td>
                <td class="text-center text-lg text-medium">Rp. -</td>
                <td class="text-center"><a class="remove-from-cart" href="<?php echo base_url(); ?>pembeli/produk/keranjang/delete_cart/<?php echo $items['rowid']; ?>" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>

        </div>
        <div class="shopping-cart-footer">
          <div class="column">
            <form class="coupon-form" method="post">
              <input class="form-control form-control-sm" type="text" placeholder="Kode Voucer" required>
              <button class="btn btn-outline-primary btn-sm" type="submit">Apply Voucer</button>
            </form>
          </div>
          <div class="column text-lg">Subtotal: <span class="text-medium">RP. <?php echo number_format($this->cart->total(), 2, '.', ','); ?></span></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column"><a class="btn btn-outline-secondary" href="<?php echo base_url();?>pembeli/dashboard"><i class="icon-arrow-left"></i>&nbsp;Belanja Lagi ?</a></div>
          <div class="column"><a class="btn btn-primary" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart" data-toast-message="is updated successfully!">Update Keranjang</a><a class="btn btn-success" href="<?php echo base_url();?>pembeli/checkout">Checkout</a></div>
        </div>
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">Yang mungkin anda cari</h3>
        <!-- Carousel-->
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
           <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="text-light merek"><img style="height: 25px;" src="<?php echo base_url();?>assets/img/brands/small/asus.png"></div>
              <a class="product-thumb" href="shop-single.html">
                <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_zenfone.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">ASUS Zenfone 4 Max 3/32 GB </a></h3>
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
              <a class="product-thumb" href="shop-single.html">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2.000.000</h4>
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
              <a class="product-thumb" href="shop-single.html">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2000.000</h4>
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
              <a class="product-thumb" href="shop-single.html">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2000.000</h4>
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
              <a class="product-thumb" href="shop-single.html">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2000.000</h4>
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
              <a class="product-thumb" href="shop-single.html">
              <img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Asus Zenfon 4 Selfie 3/32 GB</a></h3>
              <h4 class="product-price">RP.2000.000</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">BELI SEKARANG</button>
              </div>
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
</body>
</html>
