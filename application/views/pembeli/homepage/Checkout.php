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
    
 
  
    <!-- <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Checkout</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Checkout</li>
            </ul>
          </div>
        </div>
      </div> -->
    
    <div class="container padding-top-3x mb-2">
        <div class="row">
          <!-- Checkout Adress-->
          <div class="col-xl-9 col-lg-8">
            <div class="checkout-steps">
              <a href="checkout-review.html">4. Review</a>
              <a href="checkout-payment.html"><span class="angle"></span>3. Pembayaran</a>
              <a href="pengiriman"><span class="angle"></span>2. Pengiriman</a>
              <a class="active" href="checkout-address.html"><span class="angle"></span>1. Alamat</a>
            </div>
            <h4>Alamat Lengkap</h4>
            <hr class="padding-bottom-1x">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-fn">Nama Depan</label>
                  <input class="form-control" type="text" id="checkout-fn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-ln">Nama Belakang</label>
                  <input class="form-control" type="text" id="checkout-ln">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-email">Alamat E-mail</label>
                  <input class="form-control" type="email" id="checkout-email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-phone">Nomer HP</label>
                  <input class="form-control" type="text" id="checkout-phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-company">Company</label>
                  <input class="form-control" type="text" id="checkout-company">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-country">Provinsi</label>
                  <select class="form-control" id="checkout-country">
                    <option>Pilih Provinis</option>
                    <option>Jawa Barat</option>
                    <option>Jakarta</option>
                    <option>Jawa Timur</option>
                    <option>Jawa Tengah</option>
                    <option>Banten</option>
                    <option>Riau</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-city">Kota</label>
                  <select class="form-control" id="checkout-city">
                    <option>Pilih Kota</option>
                    <option>Jakarta</option>
                    <option>Berlin</option>
                    <option>Geneve</option>
                    <option>New York</option>
                    <option>Paris</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-zip">Kode POS</label>
                  <input class="form-control" type="text" id="checkout-zip">
                </div>
              </div>
            </div>
            <div class="row padding-bottom-1x">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-address1">Alamat 1</label>
                  <input class="form-control" type="text" id="checkout-address1">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-address2">Alamat 2</label>
                  <input class="form-control" type="text" id="checkout-address2">
                </div>
              </div>
            </div>
            <h4>Alamat Pengiriman</h4>
            <hr class="padding-bottom-1x">
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="same_address" checked>
                <label class="custom-control-label" for="same_address">Same as billing address</label>
              </div>
            </div>
            <div class="checkout-footer">
              <div class="column">
                <a class="btn btn-outline-secondary" href="<?php echo base_url();?>pembeli/user/view_cart">
                  <i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Kembali ke Keranjang</span></a>
                </div>
              <div class="column"><a class="btn btn-primary" href="pengiriman"><span class="hidden-xs-down">Lanjutkan&nbsp;</span><i class="icon-arrow-right"></i></a></div>
            </div>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Order Summary Widget-->
              <section class="widget widget-order-summary">
                <h3 class="widget-title">Rekap Order</h3>
                <table class="table">
                  <tr>
                    <td>Subtotal:</td>
                    <td class="text-medium">Rp. 0</td>
                  </tr>
                  <tr>
                    <td>Ongkos Kirim:</td>
                    <td class="text-medium">Rp.0</td>
                  </tr>
                  <tr>
                    <td>Estimasi Pajak:</td>
                    <td class="text-medium">Rp.0</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-lg text-medium">Rp.0</td>
                  </tr>
                </table>
              </section>
              <!-- Featured Products Widget-->
              <section class="widget widget-featured-products">
                <table class="table">
                                        <tr>
                                          <td>
                                            <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/jne.png" alt="Product"></a></div></td>
                                            <td>Reguler<ul class="list-check"></ul></td>
                                            <td></td>
                                            <td>Kilat</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/jnt.png" alt="Product"></a></div></td>
                                            <td>Reguler<li class="list-check"></li></td>
                                            <td></td>
                                            <td>Kilat<li class="list-check"></li></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/sicepat.png" alt="Product"></a></div></td>
                                            <td>Reguler<li class="list-check"></li></td>
                                            <td></td>
                                            <td>Kilat<li class="list-check"></li></td>
                                            <td></td>
                                        </tr>
                                       
                  </table>
              </section>
              <!-- Promo Banner-->
              <section class="promo-box" style="background-image: url(<?php echo base_url();?>assets/img/shop/products/promo/hp1.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">HOT Promo</h4>
                  <h3 class="text-bold text-light text-shadow">Minggu ini</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Beli Sekarang
                  </a>
                </div>
              </section>
            </aside>
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
