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
              <a class="active" href="checkout-shipping.html"><span class="angle"></span>2. Pengiriman</a>
              <a class="completed" href="checkout"><span class="angle"></span>
                <span class="step-indicator icon-circle-check"></span>1. Alamat</a></div>
            <h4>Pilih Metode Pengiriaman</h4>
            <hr class="padding-bottom-1x">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="thead-default">
                  <tr>
                    <th></th>
                    <th>Pilih Kurir</th>
                    <th>Waktu Pengiriman</th>
                    <th>Estimasi Biaya</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-middle">
                      <div class="custom-control custom-radio mb-0">
                        <input class="custom-control-input" type="radio" id="jne" name="shipping-method" checked>
                        <label class="custom-control-label" for="jne"></label>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/jne.png" alt="Product"></a></div>
                      <span class="text-muted text-sm">Pengiriman di hari libur akan di krim ke esokan hari nya</span>
                    </td>
                    <td class="align-middle">3 - 6 Hari</td>
                    <td class="align-middle">Rp. 15.000</td>
                  </tr>

                  <tr>
                    <td class="align-middle">
                      <div class="custom-control custom-radio mb-0">
                        <input class="custom-control-input" type="radio" id="jnt" name="shipping-method" checked>
                        <label class="custom-control-label" for="jnt"></label>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/jnt.png" alt="Product"></a></div>
                      <span class="text-muted text-sm">Pengiriman di hari libur akan di krim ke esokan hari nya</span>
                    </td>
                    <td class="align-middle">1 - 2 Hari</td>
                    <td class="align-middle">Rp. 10.000</td>
                  </tr>

                  <tr>
                    <td class="align-middle">
                      <div class="custom-control custom-radio mb-0">
                        <input class="custom-control-input" type="radio" id="tiki" name="shipping-method" checked>
                        <label class="custom-control-label" for="tiki"></label>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/tiki.png" alt="Product"></a></div>
                      <span class="text-muted text-sm">Pengiriman di hari libur akan di krim ke esokan hari nya</span>
                    </td>
                    <td class="align-middle">1 - 2 Hari</td>
                    <td class="align-middle">Rp. 10.000</td>
                  </tr>

                  <tr>
                    <td class="align-middle">
                      <div class="custom-control custom-radio mb-0">
                        <input class="custom-control-input" type="radio" id="pos" name="shipping-method" checked>
                        <label class="custom-control-label" for="pos"></label>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/pos.png" alt="Product"></a></div>
                      <span class="text-muted text-sm">Pengiriman di hari libur akan di krim ke esokan hari nya</span>
                    </td>
                    <td class="align-middle">4 - 6 Hari</td>
                    <td class="align-middle">Rp. 20.000</td>
                  </tr>

                  <tr>
                    <td class="align-middle">
                      <div class="custom-control custom-radio mb-0">
                        <input class="custom-control-input" type="radio" id="grab" name="shipping-method" checked>
                        <label class="custom-control-label" for="grab"></label>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/grab.png" alt="Product"></a></div>
                      <span class="text-muted text-sm">Hanya Berlaku di daerah JABODETABEK</span>
                    </td>
                    <td class="align-middle">Hari yang sama</td>
                    <td class="align-middle">Rp. 25.000</td>
                  </tr>


                </tbody>
              </table>
            </div>
            <div class="checkout-footer margin-top-1x">
              <div class="column"><a class="btn btn-outline-secondary" href="checkout"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Kembali</span></a></div>
              <div class="column"><a class="btn btn-primary" href="Pembayaran"><span class="hidden-xs-down">Lanjutkan&nbsp;</span><i class="icon-arrow-right"></i></a></div>
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
