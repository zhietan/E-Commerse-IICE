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
           <div class="">
             <div class="checkout-steps">
              <a class="active" href="checkout-review.html"> 4. Review</a>
              <a class="completed" href="checkout-payment.html"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>3. Pembayaran</a>
              <a class="completed" href="checkout-shipping.html"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>2. Pengiriman</a>
              <a class="completed" href="checkout"><span class="angle"></span><span class="step-indicator icon-circle-check"></span>1. Alamat</a></div>
            <h4>Review Order anda</h4>
             <div class="table shopping-cart">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th class="text-center">Subtotal</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="<?php echo base_url();?>pembeli/produk/detail_produk"><img src="<?php echo base_url();?>assets/img/shop/products/hp/asus_selfie.jpg" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title">
                            <a href="<?php echo base_url();?>pembeli/produk/detail_produk">Asus Zenfon 4 Selfie 3/32 GB</a>
                          </h4>
                      <span><em>RAM:</em> 3/32 GB</span>
                      <span><em>Color:</em> Dark </span>
                        </div>
                  </div>
                </td>
                    <td class="text-center text-lg text-medium">Rp.1.215.000</td>
                    <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="cart.html">Edit</a></td>
                  </tr>
                 
                  
                </tbody>
              </table>
              <div class="row padding-top-1x mt-3">
              <div class="col-sm-6">
                <h5>Pengiriman ke:</h5>
                <ul class="list-unstyled">
                  <li><span class="text-muted">Nama lengkap:</span>Fauzi Agustian</li>
                  <li><span class="text-muted">Alamar:</span>Jl.Raya Pluit No.2 Landmark Pluit</li>
                  <li><span class="text-muted">HP:</span>+62(21) 234 554 30</li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h5>Metode Pembayaran:</h5>
                <ul class="list-unstyled">
                  <li><span class="text-muted">Bank Transfer:</span></li>
                  <li><span class="text-muted"></span>BCA</li>
                </ul>
              </div>
            </div>
            </div>

            <div class="checkout-footer margin-top-1x">
              <div class="column"><a class="btn btn-outline-secondary" href="pembayaran"><i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Kembali</span></a></div>
              <div class="column"><a class="btn btn-primary" href="review"><span class="hidden-xs-down">Lanjutkan&nbsp;</span><i class="icon-arrow-right"></i></a></div>
            </div>
          </div>
          <!-- Sidebar          -->
          
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
