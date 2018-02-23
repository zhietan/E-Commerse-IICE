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
              <a class="active" href="checkout-payment.html"><span class="angle"></span>3. Pembayaran</a>
              <a class="completed" href="checkout-shipping.html"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>2. Pengiriman</a>
              <a class="completed" href="checkout"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>1. Alamat</a></div>
            <h4>Pilih Metode Pembayaran</h4>
            <hr class="padding-bottom-1x">
             <div class="accordion" id="accordion" role="tablist">

              <div class="card">
                <div class="card-header" role="tab">
                  <h5><a href="#card" data-toggle="collapse" data-parent="#accordion"><i class="icon-columns"></i>Transfer Bank</a></h5>
                </div>
                <div class="collapse" id="card" role="tabpanel">
                  <div class="card-body">
                    <b>Pilih Bank</b>
                    <table class="table">
                    <tr>
                      <td>Mandiri</td>
                      <td>9994xxxxxx</td>
                      
                    </tr>
                    <tr>
                      <td>BCA</td>
                      <td>2349562xxxxx</td>
                    </tr>
                    <tr>
                      <td>CIMB</td>
                      <td>23s49562xxxxx</td>
                    </tr>
                  </table>
                  </div>
                  
                </div>
              </div>

              <div class="card">
                <div class="card-header" role="tab">
                  <h5><a class="collapsed" href="#paypal" data-toggle="collapse" data-parent="#accordion"><i class="socicon-paypal"></i>Saldo IICE</a></h5>
                </div>
                <div class="collapse" id="paypal" role="tabpanel">
                  <div class="card-body">
                    <p>Masukan Jumlah Saldo</p>
                    <form class="row" method="post">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="E-mail" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="password" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="navi-link" href="#">Forgot password?</a>
                          <button class="btn btn-outline-primary margin-top-none" type="submit">Log In</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" role="tab">
                  <h5><a class="collapsed" href="#points" data-toggle="collapse" data-parent="#accordion"><i class="icon-medal"></i>Virtual Account</a></h5>
                </div>
                <div class="collapse" id="points" role="tabpanel">
                  <div class="card-body">
                    <p>You currently have<span class="text-medium"> 290</span> Reward Points to spend.</p>
                    <div class="custom-control custom-checkbox d-block">
                      <input class="custom-control-input" type="checkbox" id="use_points">
                      <label class="custom-control-label" for="use_points">Use my Reward Points to pay for this order.</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h5><a class="collapsed" href="#cod" data-toggle="collapse" data-parent="#accordion"><i class="icon-medal"></i>Pembayaran Instan / COD</a></h5>
                </div>
                <div class="collapse" id="cod" role="tabpanel">
                  <div class="card-body">
                    <p>You currently have<span class="text-medium"> 290</span> Reward Points to spend.</p>
                    <div class="custom-control custom-checkbox d-block">
                      <input class="custom-control-input" type="checkbox" id="use_points">
                      <label class="custom-control-label" for="use_points">Use my Reward Points to pay for this order.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="checkout-footer margin-top-1x">
              <div class="column"><a class="btn btn-outline-secondary" href="Pengiriman"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Kembali</span></a></div>
              <div class="column"><a class="btn btn-primary" href="review"><span class="hidden-xs-down">Lanjutkan&nbsp;</span><i class="icon-arrow-right"></i></a></div>
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
                <!-- sidebar kosong -->
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
