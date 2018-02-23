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
            <h1>Detail Produk</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li><a href="shop-grid-ls.html">Shop</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Detail Product</li>
            </ul>
          </div>
        </div>
      </div> -->
    
    <div class="container padding-top-1x mb-1">

        <?php foreach ($detail_produk as $spl){ ?>

        <div class="row">
          <!-- Poduct Gallery-->
          <div class="col-md-4">
            <div class="product-gallery">
              <div class="gallery-wrapper">
                <div class="text-light pricetag"><h3 class="text-center">Diskon 40%</h3></div>
                
              </div>
              <?php $imgProduct = $this->iice_model->join3table('library_products', 'library_products_model', 'library_products_images', 'ProductModel', 'ModelID', 'ProductID', $spl->ProductID); ?>
              <div class="product-carousel owl-carousel">
                <?php $no = 1; ?>
                <?php foreach($imgProduct->result() as $img){ ?>
                <div data-hash="<?php echo $no; ?>"><img src="<?php echo base_url();?>assets/img/shop/products/hp/<?php echo $img->ProductsImage; ?>" alt="Product"></div>
                <?php $no++; } ?>                
              </div>
              
              <ul class="product-thumbnails">
              <?php $no = 1; ?>
              <?php foreach($imgProduct->result() as $img){ ?>
                <li><a href="#<?php echo $no; ?>"><img src="<?php echo base_url();?>assets/img/shop/products/hp/<?php echo $img->ProductsImage; ?>" alt="Product"></a></li>
              <?php $no++; } ?>
              </ul>
              
              
            </div>
          </div>
          <!-- Product Info-->
          <div class="col-md-5">
            <div class="padding-top-2x mt-2 hidden-md-up"></div>
              <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
              </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 Ulasan</span>
            <h2 class="padding-top-1x text-normal"><?php echo $spl->DescriptionsTitle; ?></h2><span class="h2 d-block">
              <del class="text-muted text-normal"><!-- harga yang di diskon --></del>&nbsp; Rp.<?php echo number_format($spl->ProductPrice, 2, '.', ','); ?></span>
            
                <table class="table">
                  <tr>
                    <td>Dilihat </td>
                    <td class="text-small">42 x</td>
                  </tr>
                  <tr>
                    <td>Berat </td>
                    <td class="text-small">700 gr</td>
                  </tr>
                  <tr>
                    <td>Terjual </td>
                    <td class="text-small">23</td>
                  </tr>
                  <tr>
                    <td>Kondisi</td>
                    <td class="text-lg text-medium text-success">Baru</td>
                  </tr>
                </table>

            <div class="row margin-top-1x">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="size">Lokasi Anda</label>
                  <select class="form-control" id="size">
                    <option>Pilih Lokasi</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                    <option>Medan</option>
                   
                  </select>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-group">
                  <label for="color">Pilih Warna</label>
                  <select class="form-control" id="color">
                    <option>Black</option>
                    <option>Black/Orange/Green</option>
                    <option>Gray/Purple/White</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="quantity">Jumlah</label>
                  <select class="form-control" id="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- <div class="pt-1 mb-2"><span class="text-medium">NO ORDER:</span> #21457832</div> -->
           <!--  <div class="padding-bottom-1x mb-2"><span class="text-medium">Categories:&nbsp;</span><a class="navi-link" href="#">HP & Smartphone,</a><a class="navi-link" href="#"> ASUS,</a><a class="navi-link" href="#"> Zenfone Series</a></div> -->
            <hr class="mb-3">
            <div class="d-flex flex-wrap justify-content-between">
              
              <div class="sp-buttons mt-2 mb-2">
               <!--  <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button> -->
                <a class="btn btn-success" href="<?php echo base_url();?>pembeli/view_cart"><i class="icon-buy"></i> Beli Sekarang</a>
                <a class="btn btn-primary" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> Tambahkan ke Keranjang</a>
               
              </div>
            </div>
          </div>
          <div class="col-md-3  page-sidebar-right">
                    <aside>
                        <div class="card sidebar-card card-contact-seller">
                            <div class="card-header">
                              <div class="entry-share">
                                <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                              </div>
                            </div>
                            <div class="card-content user-info">
                                <div class="card-body text-center">
                                    <div class="seller-info">
                                        <div class="company-logo-thumb">
                                            <a><img src="<?php echo base_url();?>assets/img/account/seller/iice.png" class=" " alt="img"> </a>
                                        </div>
                                        <h4 class="no-margin"> PT.Triffecta Radius Internasional  </h4>

                                        <p>Location: <strong>Jakarta Utara</strong></p>

                                        <p> Web: <strong>www.iice.co.id</strong></p>
                                    </div>
                                    <div class="user-ads-action">

                                        <a href="#" data-toggle="modal" class="btn   btn-danger btn-block"><i
                                                class=" icon-mail"></i> Kirim Pesan </a>
                                        <!-- <a href="#contactAdvertiser" data-toggle="modal"
                                           class="btn   btn-info btn-block"><i class=" icon-mail-2"></i> Send Enquiry
                                        </a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                        <!-- Aside side bar -->
                        <div class="card sidebar-card">
                            <div class="card-header">Jasa Pengiriman</div>
                            <div class="card-content">
                                <div class="card-body text-left">
                                    <ul class="list-check">
                                      <table class="table">
                                        <tr>
                                          <td>
                                            <div class="entry-thumb"><a href="shop-single.html"><img src="<?php echo base_url();?>assets/img/expedisi/jne.png" alt="Product"></a></div></td>
                                            <td>Reguler<li class="list-check"></li></td>
                                            <td></td>
                                            <td>Kilat<li class="list-check"></li></td>
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
                                    </ul>
                                    <p><a class="pull-right" href="#">  <i
                                            class="fa fa-angle-double-right"></i> </a></p>
                                </div>
                            </div>
                        </div>
                        <!--/.categories-list-->
                    </aside>
                </div>
        </div>
        <!-- Product Tabs-->
        <div class="row padding mb-3">
          <div class="col-lg-9 offset-lg-1">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">Detail Barang</a></li>
              <li class="nav-item"><a class="nav-link" href="#Estimasi" data-toggle="tab" role="tab">Estimasi Ongkos Kirim</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">Ulasan Barang (3)</a></li> -->
              <!-- <li class="nav-item"><a class="nav-link" href="#feedback" data-toggle="tab" role="tab">Feedback</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="description" role="tabpanel">
                <?php echo $spl->DescriptionsDetails; ?>  
              </div>

              <div class="tab-pane fade show" id="Estimasi" role="tabpanel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error blanditiis a, deserunt magnam pariatur quam suscipit quae. Veniam, deserunt reprehenderit quasi hic recusandae itaque omnis fugiat animi architecto facilis repellendus. Commodi dolorem, eius consectetur. Amet maiores nemo at nobi s aspernatur velit, sequi odio, a veritatis inventore autem esse provident in? Placeat, sunt!</p>
                <p class="mb-30">Iste assumenda, vitae, aliquam excepturi libero quia ullam quisquam tenetur id sint labore. Pariatur praesentium velit, fugit facere maxime voluptates optio qui? Quidem obcaecati necessitatibus rem aspernatur, mollitia, assumenda explicabo numquam minus eos sapiente totam dicta, laborum dolorum! Vitae distinctio quos non ut fugiat.</p>
              </div>
              <div class="tab-pane fade" id="reviews" role="tabpanel">
                <!-- Review-->
                <div class="comment">
                  <div class="comment-author-ava"><img src="img/reviews/01.jpg" alt="Review author"></div>
                  <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                      <h4 class="comment-title">Average quality for the price</h4>
                      <div class="mb-2">
                          <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                          </div>
                      </div>
                    </div>
                    <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    <div class="comment-footer"><span class="comment-meta">Francis Burton</span></div>
                  </div>
                </div>
                <!-- Review-->
                <div class="comment">
                  <div class="comment-author-ava"><img src="img/reviews/02.jpg" alt="Review author"></div>
                  <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                      <h4 class="comment-title">My husband love his new...</h4>
                      <div class="mb-2">
                          <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                          </div>
                      </div>
                    </div>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="comment-footer"><span class="comment-meta">Maggie Scott</span></div>
                  </div>
                </div>
                <!-- Review-->
                <div class="comment">
                  <div class="comment-author-ava"><img src="img/reviews/03.jpg" alt="Review author"></div>
                  <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                      <h4 class="comment-title">Soft, comfortable, quite durable...</h4>
                      <div class="mb-2">
                          <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                          </div>
                      </div>
                    </div>
                    <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="comment-footer"><span class="comment-meta">Jacob Hammond</span></div>
                  </div>
                </div>
                <!-- Review Form-->
                <h5 class="mb-30 padding-top-1x">Leave Review</h5>
                <form class="row" method="post">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="review_name">Your Name</label>
                      <input class="form-control form-control-rounded" type="text" id="review_name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="review_email">Your Email</label>
                      <input class="form-control form-control-rounded" type="email" id="review_email" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="review_subject">Subject</label>
                      <input class="form-control form-control-rounded" type="text" id="review_subject" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="review_rating">Rating</label>
                      <select class="form-control form-control-rounded" id="review_rating">
                        <option>5 Stars</option>
                        <option>4 Stars</option>
                        <option>3 Stars</option>
                        <option>2 Stars</option>
                        <option>1 Star</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="review_text">Review </label>
                      <textarea class="form-control form-control-rounded" id="review_text" rows="8" required></textarea>
                    </div>
                  </div>
                  <div class="col-12 text-right">
                    <button class="btn btn-outline-primary" type="submit">Submit Review</button>
                  </div>
                </form>
              </div>
              <!-- feedback -->
               <div class="tab-pane fade" id="feedback" role="tabpanel">
                <!-- Review-->
                <div class="comment">
                  <div class="comment-author-ava"><img src="img/reviews/01.jpg" alt="Review author"></div>
                  <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                      <h4 class="comment-title">Average quality for the price</h4>
                      <div class="mb-2">
                          <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                          </div>
                      </div>
                    </div>
                    <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    <div class="comment-footer"><span class="comment-meta">Francis Burton</span></div>
                  </div>
                </div>
                <!-- Review-->
                <div class="comment">
                  <div class="comment-author-ava"><img src="img/reviews/02.jpg" alt="Review author"></div>
                  <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                      <h4 class="comment-title">My husband love his new...</h4>
                      <div class="mb-2">
                          <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                          </div>
                      </div>
                    </div>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="comment-footer"><span class="comment-meta">Maggie Scott</span></div>
                  </div>
                </div>
                <!-- Review-->
                <div class="comment">
                  <div class="comment-author-ava"><img src="img/reviews/03.jpg" alt="Review author"></div>
                  <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                      <h4 class="comment-title">Soft, comfortable, quite durable...</h4>
                      <div class="mb-2">
                          <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                          </div>
                      </div>
                    </div>
                    <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="comment-footer"><span class="comment-meta">Jacob Hammond</span></div>
                  </div>
                </div>
                <!-- Review Form-->
                
                
              </div>
            </div>
          </div>
        </div>
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">Produk Terkait</h3>
        <?php }?>
        <!-- Carousel-->
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
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
