<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <h3 class="breadcrumb-title pe-3">Keranjang Belanja</h3>
        <div class="ms-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:;">Belanja</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Keranjang Belanja</li>
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
            <div class="checkout-review">
              <div class="card  rounded-0 shadow-none mb-3 border">
                <div class="card-body">
                  <h5 class="mb-0">Review Pesanan</h5>
                  <div class="my-3 border-bottom"></div>
                  <?php foreach ($checkout as $key => $val) : ?>
                    <div class="row align-items-center g-3">
                      <div class="col-12 col-lg-6">
                        <div class="d-lg-flex align-items-center gap-2">
                          <div class="cart-img text-center text-lg-start">
                            <a href="<?= site_url('utamas/detail/' . $val['id']); ?>">
                              <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $val['gambarbarang'] ?>" alt="Gambar Barang" style="width: 100px;">
                            </a>
                          </div>
                          <div class="cart-detail text-center text-lg-start">
                            <h6 class="mb-2"><?= $val['namabarang']; ?></h6>
                            <p class="mb-0">Kategori: <span><?= $val['namakategori']; ?></span>
                            </p>
                            <p class="mb-2"><span></span>
                            </p>
                            <h5 class="mb-0">Rp. <?= format_angka($val['harga']); ?></h5>
                            <!-- <?php var_dump($checkout); ?> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-3">
                        <div class="cart-action text-center">
                          <input type="number" class="form-control rounded-0" value="1" min="1">
                        </div>
                      </div>
                      <div class="col-12 col-lg-3">
                        <div class="text-center">
                          <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-x-circle me-0'></i></a>
                            <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-edit'></i> Edit</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="card rounded-0 shadow-none mb-3 border">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="shipping-aadress">
                        <h5 class="mb-3">Shipping to:</h5>
                        <p class="mb-1"><span class="text-dark">Customer:</span> Jhon Michle</p>
                        <p class="mb-1"><span class="text-dark">Address:</span> 47-A, Street Name, City, Australia</p>
                        <p class="mb-1"><span class="text-dark">Phone:</span> (123) 472-796</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card rounded-0 shadow-none mb-3 border">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="d-grid"><a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-chevron-left"></i>Back to Payment</a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="d-grid"><a href="checkout-complete.html" class="btn btn-white btn-ecomm">Complete Order<i class="bx bx-chevron-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">
            <div class="checkout-form p-3 bg-light">
              <div class="card rounded-0 border bg-transparent shadow-none">
                <div class="card-body">
                </div>
              </div>
              <!-- <div class="card rounded-0 border bg-transparent shadow-none">
                <div class="card-body">
                  <p class="fs-5">Estimate Shipping and Tax</p>
                  <div class="my-3 border-top"></div>
                  <div class="mb-3">
                    <label class="form-label">Country Name</label>
                    <select class="form-select rounded-0">
                      <option selected>United States</option>
                      <option value="1">Australia</option>
                      <option value="2">India</option>
                      <option value="3">Canada</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">State/Province</label>
                    <select class="form-select rounded-0">
                      <option selected>California</option>
                      <option value="1">Texas</option>
                      <option value="2">Canada</option>
                    </select>
                  </div>
                  <div class="mb-0">
                    <label class="form-label">Zip/Postal Code</label>
                    <input type="email" class="form-control rounded-0">
                  </div>
                </div>
              </div> -->
              <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                <div class="card-body">
                  <?php $query = $this->db->select('id')->from('checkout')->get();
                  $jmlbarang = $query->num_rows();
                  foreach ($checkout as $key => $val) {
                    $hargabarang = $val['harga'];
                    $total = $jmlbarang * $hargabarang;
                  }
                  ?>
                  <!-- <p class="mb-2">Subtotal: <span class="float-end">$198.00</span>
                  </p>
                  <p class="mb-2">Shipping: <span class="float-end">--</span>
                  </p>
                  <p class="mb-2">Taxes: <span class="float-end">$14.00</span>
                  </p>
                  <p class="mb-0">Discount: <span class="float-end">--</span>
                  </p> -->
                  <div class="my-3 border-top"></div>
                  <h5 class="mb-0">Harga Total: <span class="float-end">Rp. <?= format_angka($total); ?></span></h5>
                  <div class="my-4"></div>
                  <div class="d-grid"> <a href="javascript:;" class="btn btn-dark btn-ecomm">Proceed to Checkout</a>
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