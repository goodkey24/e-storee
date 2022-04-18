<script defer>
  document.title = "Detail Pesanan | e-Store";
</script>
<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <h3 class="breadcrumb-title pe-3">Checkout</h3>
        <div class="ms-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="<?= config_item('base_url') ?>"><i class="bx bx-home-alt"></i> Home</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:;">Pesanan Saya</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--end breadcrumb-->
  <!--start shop cart-->
  <section class="py-4">
    <div class="container">
      <div class="shop-cart">
        <div class="row">
          <div class="col-12 col-xl-8">
            <div class="checkout-details">
              <div class="card bg-transparent rounded-0 shadow-none">
                <div class="card-body">
                  <div class="steps steps-light">
                    <a class="step-item active" href="shop-cart.html">
                      <div class="step-progress"><span class="step-count">1</span>
                      </div>
                      <div class="step-label"><i class='bx bx-cart'></i>Cart</div>
                    </a>
                    <a class="step-item active current" href="checkout-details.html">
                      <div class="step-progress"><span class="step-count">2</span>
                      </div>
                      <div class="step-label"><i class='bx bx-user-circle'></i>Details</div>
                    </a>
                    <a class="step-item" href="checkout-shipping.html">
                      <div class="step-progress"><span class="step-count">3</span>
                      </div>
                      <div class="step-label"><i class='bx bx-cube'></i>Shipping</div>
                    </a>
                    <a class="step-item" href="checkout-payment.html">
                      <div class="step-progress"><span class="step-count">4</span>
                      </div>
                      <div class="step-label"><i class='bx bx-credit-card'></i>Payment</div>
                    </a>
                    <a class="step-item" href="checkout-review.html">
                      <div class="step-progress"><span class="step-count">5</span>
                      </div>
                      <div class="step-label"><i class='bx bx-check-circle'></i>Review</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card rounded-0">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="">
                      <!-- <img src="assets/images/avatars/avatar-1.png" width="90" alt="" class="rounded-circle p-1 border"> -->
                    </div>
                    <div class="ms-2">
                      <h6 class="mb-0"><?= $result['namapelanggan']; ?></h6>
                      <p class="mb-0"></p>
                    </div>
                    <div class="ms-auto"> <a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-edit'></i> Edit Profile</a>
                    </div>
                  </div>
                  <div class="border p-3">
                    <h2 class="h5 mb-0">Detail Pesanan</h2>
                    <!-- <?php print_r($result) ?> -->
                    <div class="my-3 border-bottom"></div>
                    <div class="form-body">
                      <form class="row g-3">
                        <div class="col-md-6">
                          <label class="form-label">Nama Lengkap</label>
                          <input class="form-control rounded-0" value="<?= $result['namapelanggan'] ?>" readonly>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Username</label>
                          <input class="form-control rounded-0" value="<?= $result['usernamepel'] ?>" readonly>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Jenis Kelamin</label>
                          <input class="form-control rounded-0 text-uppercase" value="<?= $result['jkpel'] ?>" readonly>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Alamat</label>
                          <textarea class="form-control rounded-0" readonly><?= $result['alamatpel'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                          <div class="d-grid"> <a href="<?= site_url() ?>" class="btn btn-light btn-ecomm"><i class='bx bx-chevron-left'></i>Belanja Kembali</a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="d-grid"> <a href="#" class="btn btn-dark btn-ecomm">Bayar<i class='bx bx-chevron-right'></i></a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">
            <div class="order-summary">
              <div class="card rounded-0">
                <div class="card-body">
                  <div class="card rounded-0 border bg-transparent shadow-none">
                  </div>
                  <div class="card rounded-0 border bg-transparent shadow-none">
                    <div class="card-body">
                      <p class="fs-5"></p>
                      <div class="my-3 border-top"></div>
                      <div class="d-flex align-items-center">
                        <a class="d-block flex-shrink-0" href="javascript:;">
                          <!-- <img src="" width="75" alt="Product"> -->
                        </a>
                        <div class="ps-2">
                          <h6 class="mb-1 text-dark"><?= $result['namabarang']; ?></h6>
                          <div class="widget-product-meta"><span class="me-2">Rp.<?= format_angka($result['hargabarang']); ?></span><span class="">x <?= $result['jmlpesan']; ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                        <div class="card-body">
                          <p class="mb-2">_-:-_ <span class="float-end"><?php $hargasatuan = $result['hargabarang'];
                                                                        $jmlpesan = $result['jmlpesan'];
                                                                        $subtotal = $hargasatuan * $jmlpesan; ?></span>
                          </p>
                          <p class="mb-0">Discount: <span class="float-end">--</span>
                          </p>
                          <p class="mb-0">Jumlah Pesanan: <span class="float-end"> <?= $result['jmlpesan']; ?></span></p>
                          <div class="my-3 border-top"></div>
                          <h5 class="mb-0">Harga Total: <span class="float-end">Rp.<?= format_angka($subtotal); ?></span></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--end row-->
          </div>
        </div>
  </section>
  <!--end shop cart-->
</div>