<div class="page-content">
  <!--start Featured product-->
  <section class="py-4">
    <div class="container">
      <div class="d-flex align-items-center">
        <?php foreach ($result as $key => $val) : ?>
          <h5 class="text-uppercase mb-0">Kategori <span class="text-success"><?= $val['namakategori']; ?></span>
          </h5>
        <?php endforeach; ?>
        <a href="#" class="btn btn-dark btn-ecomm ms-auto rounded-0">Lihat Lainnya<i class='bx bx-chevron-right'></i></a>
      </div>
      <hr />
      <div class="product-grid">
        <!-- <?php print_r($result); ?> -->

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
          <?php if ($result && count($result) > 0) :
            foreach ($result as $key => $val) : ?>


              <div class="col">
                <div class="card rounded-0 product-card">
                  <div class="card-header bg-transparent border-bottom-0">
                    <div class="d-flex align-items-center justify-content-end gap-3">
                      <a href="javascript:;">
                      </a>
                      <a href="javascript:;">
                      </a>
                    </div>
                  </div>
                  <a href="<?= site_url('utamas/detail/' . $val['id']) ?>">
                    <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $val['gambar'] ?>" style="height: 310px;" class="card-img-top" alt="Gambar Barang">
                  </a>
                  <div class="card-body">
                    <div class="product-info">
                      <a href="javascript:;">
                        <p class="product-catergory font-13 mb-1"><?= $val['namakategori']; ?></p>
                      </a>
                      <a href="<?= site_url('utamas/detail/' . $val['id']) ?>">
                        <h6 class="product-name mb-2"><?= $val['nama_brg']; ?></h6>
                      </a>
                      <div class="d-flex align-items-center">
                        <div class="mb-1 product-price"><span class="me-1 text-decoration-line-through text-danger">Rp. <?= format_angka($val['harga']); ?></span>
                          <span class="fs-5">Rp.<?= format_angka($val['hargadiskon']); ?></span>
                        </div>
                        <!-- <div class="cursor-pointer ms-auto">
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                    </div> -->
                      </div>
                      <div class="product-action mt-2">
                        <div class="d-grid gap-2">
                          <?php if ($this->session->userdata('pelangganid') != "") : ?>
                            <a href="#" class="btn btn-danger btn-ecomm"> <i class="bx bxs-cart-add"></i> Masukkan Keranjang</a>
                            <a href="#" class="btn btn-warning btn-ecomm"> Beli Sekarang</a>
                          <?php endif; ?>
                          <!-- <a href="javascript:;" class="btn btn-light btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a> -->
                          <!-- <?php echo "<a class='btn btn-success btn-ecomm' href='" . site_url('Utamas/detail/' . $val['id']) . "'>" . 'Detail' . "</a>" ?> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


          <?php endforeach;
          endif; ?>
        </div>
        <!--end row-->
      </div>
    </div>
  </section>
  <!--end Featured product-->
</div>