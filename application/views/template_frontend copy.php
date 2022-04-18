<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?= config_item('base_url') ?>asset\e_store_logo\logo1.jpg" type="image/png" />
    <!--plugins-->
    <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?= config_item('base_url') ?>template_frontend/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?= config_item('base_url') ?>template_frontend/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?= config_item('base_url') ?>template_frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?= config_item('base_url') ?>template_frontend/assets/css/app.css" rel="stylesheet">
    <link href="<?= config_item('base_url') ?>template_frontend/assets/css/icons.css" rel="stylesheet">
    <title>e-Store</title>
  </head>

  <?php $url_1 = $this->uri->segment('1'); ?>

  <body>

    <b class="screen-overlay"></b>
    <!--wrapper-->
    <div class="wrapper">
      <!--start top header wrapper-->
      <div class="header-wrapper">
        <div class="top-menu border-bottom">
          <div class="container">
            <nav class="navbar navbar-expand">
              <div class="shiping-title text-uppercase font-13 d-none d-sm-flex">Welcome to e-Store!</div>
              <ul class="navbar-nav social-link ms-lg-2 ms-auto">
                <li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="header-content pb-3 pb-md-0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-4 col-md-auto">
                <div class="d-flex align-items-center">
                  <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main">
                    <i class='bx bx-menu'></i>
                  </div>
                  <div class="logo d-none d-lg-flex">
                    <a href="<?= config_item('base_url') ?>">
                      <img src="<?= config_item('base_url') ?>asset\e_store_logo\logo.jpg" class="logo-icon" alt="" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="col col-md order-4 order-md-2">
                <form action="<?php echo site_url('caris/index'); ?>" method="get" role="search">
                  <div class="input-group flex-nowrap px-xl-4">
                    <input type="text" name="keyword" class="form-control w-100" placeholder="Search for Products"><span class="input-group-text cursor-pointer bg-transparent"><button type="submit" class='bx bx-search'></button></span>
                  </div>
              </div>
              </form>
              <div class="col-4 col-md-auto order-3 d-none d-xl-flex align-items-center">
                <div class="fs-1 text-white"><i class='bx bx-headphone'></i>
                </div>
                <?php if ($this->session->userdata('pelangganid') == "") : ?>
                <div class="ms-2">
                  <a href="<?= site_url('login_users') ?>" class="btn btn-dark">Sign In</a>
                  <a href="<?= site_url('registrations') ?>" class="btn btn-success">Daftar</a>
                </div>
                <?php endif; ?>
              </div>
              <div class="col-4 col-md-auto order-2 order-md-4">
                <div class="top-cart-icons float-end">
                  <nav class="navbar navbar-expand">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown">
                        <?php if ($this->session->userdata('pelangganid') != "") : ?>
                      <li class="nav-item"><a class="nav-link cart-link" href="#" data-bs-toggle="dropdown"><i class='bx bx-user'></i></a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                          <li><a class="dropdown-item" href="<?= site_url('profile_users') ?>">Akun Saya</a>
                          </li>
                          <li><a class="dropdown-item" href="<?= site_url('login_users/logout') ?>">Logout</a>
                          </li>
                        </ul>
                      </li>
                      <?php endif; ?>
                      <?php if ($this->session->userdata('pelangganid') != "") : ?>
                      <li class="nav-item dropdown dropdown-large">
                        <a href="<?= site_url('checkouts') ?>" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown"> <span class="alert-count">
                            <!-- Jumlah Barang Dalam Keranjang -->
                            <?php $query = $this->db->select('id')->from('checkout')->get();
                          echo $jmlbarang = $query->num_rows(); ?>
                          </span>
                          <i class='bx bx-shopping-bag'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="<?= site_url('checkouts') ?>">
                            <div class="cart-header">
                              <p class="cart-header-clear ms-auto mb-0"> Lihat Detail Keranjang >></p>
                            </div>
                          </a>
                          <div class="cart-list">
                            <a class="dropdown-item" href="javascript:;">
                              <div class="d-flex align-items-center">
                                <div class="flex-grow-1">

                                  <h6 class="cart-product-title">T-Shirt White</h6>

                                  <p class="cart-product-price">1 X $29.00</p>
                                </div>
                                <div class="position-relative">
                                  <div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
                                  </div>
                                  <div class="cart-product">
                                    <img src="<?= config_item('base_url') ?>template_frontend/assets/images/products/01.png" class="" alt="product image">
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <a href="javascript:;">
                            <div class="text-center cart-footer d-flex align-items-center">
                              <h5 class="mb-0">TOTAL</h5>
                              <h5 class="mb-0 ms-auto">$189.00</h5>
                            </div>
                          </a>
                          <div class="d-grid p-3 border-top"> <a href="javascript:;" class="btn btn-dark btn-ecomm">CHECKOUT</a>
                          </div>
                        </div>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <!--end row-->
          </div>
        </div>
        <div class="primary-menu border-top">
          <div class="container">
            <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
              <div class="offcanvas-header">
                <button class="btn-close float-end"></button>
                <h5 class="py-2">Navigation</h5>
              </div>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?= config_item('base_url') ?>">Home </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"> Kategori <i class='bx bx-chevron-down'></i>
                  </a>
                  <div class="dropdown-menu dropdown-large-menu">
                    <div class="row">
                      <div class="col-md-4">
                        <h6 class="large-menu-title">Electronics</h6>
                        <ul class="">
                          <?php if ($kategori && count($kategori) > 0) :
                          foreach ($kategori as $key => $val) : ?>


                          <li>
                            <a href="<?= site_url('kategori_produks/index/' . $val['id']); ?>" class="dropdown-item"><?= $val['nama']; ?></a>
                          </li>

                          <?php endforeach;
                        endif; ?>
                        </ul>
                      </div>
                      <!-- end col-3 -->
                      <div class="col-md-4">
                        <div class="pramotion-banner1">
                          <img src="<?= config_item('base_url') ?>asset\e_store_logo\logo.jpg" class="img-fluid" alt="Logo E-Store" style="padding-top: 70px; padding-left:40px" />
                        </div>
                      </div>
                      <!-- end col-3 -->
                    </div>
                    <!-- end row -->
                  </div>
                  <!-- dropdown-large.// -->
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('abouts'); ?>">Tentang Kami</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('contacts'); ?>"> Contact Us </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--end top header wrapper-->
      <!--start page wrapper -->
      <div class="page-wrapper">
        <?= $contents; ?>
      </div>
      <!--end page wrapper -->
      <!--start footer section-->
      <footer>
        <section class="py-4 border-top bg-light">
          <div class="container">
            <hr />
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
              <div class="col">
                <p class="mb-0">Copyright © 2022. All right reserved.</p>
              </div>
              <div class="col text-end">
                <div class="payment-icon">
                  <div class="row row-cols-auto g-2 justify-content-end">
                    <div class="col">
                      <img src="<?= config_item('base_url') ?>template_frontend/assets/images/icons/visa.png" alt="" />
                    </div>
                    <div class="col">
                      <img src="<?= config_item('base_url') ?>template_frontend/assets/images/icons/paypal.png" alt="" />
                    </div>
                    <div class="col">
                      <img src="<?= config_item('base_url') ?>template_frontend/assets/images/icons/mastercard.png" alt="" />
                    </div>
                    <div class="col">
                      <img src="<?= config_item('base_url') ?>template_frontend/assets/images/icons/american-express.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--end row-->
          </div>
        </section>
      </footer>
      <!--end footer section-->
      <!--start quick view product-->
      <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
      <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="<?= config_item('base_url') ?>template_frontend/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?= config_item('base_url') ?>template_frontend/assets/js/jquery.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--app JS-->
    <script src="<?= config_item('base_url') ?>template_frontend/assets/js/app.js"></script>
    <script src="<?= config_item('base_url') ?>template_frontend/assets/js/index.js"></script>
    <!-- Javascript -->
    <script src="<?= config_item('base_url') ?>template_admin/light/myscript/myscript.js"></script>
  </body>

</html>
