<!--start product detail-->
<section class="py-4">
  <div class="container">
    <div class="product-detail-card">
      <div class="product-detail-body">
        <div class="row g-0">
          <div class="col-12 col-lg-5">
            <div class="image-zoom-section">
              <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                <div class="item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="img-fluid" alt="">
                </div>
                <div class="item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="img-fluid" alt="">
                </div>
                <div class="item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="img-fluid" alt="">
                </div>
                <div class="item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="img-fluid" alt="">
                </div>
              </div>
              <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                <button class="owl-thumb-item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="" alt="">
                </button>
                <button class="owl-thumb-item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="" alt="">
                </button>
                <button class="owl-thumb-item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="" alt="">
                </button>
                <button class="owl-thumb-item">
                  <img src="<?= config_item('base_url') ?>asset/g_barang/<?= $result['gambar'] ?>" class="" alt="">
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-7">
            <div class="product-info-section p-3">
              <h3 class="mt-3 mt-lg-0 mb-0"><?= $result['nama_brg']; ?></h3>
              <div class="d-flex align-items-center mt-3 gap-2">
                <h5 class="mb-0 text-decoration-line-through text-light-3"><span class="text-danger">Rp. <?= format_angka($result['harga']); ?></span></h5>
                <h4 class="mb-0">Rp. <?= format_angka($result['hargadiskon']); ?></h4>
              </div>
              <div class="mt-3">
                <h6>Kategori Product :</h6>
                <p class="mb-0"><?= $result['namakategori']; ?></p>
              </div>
              <div class="mt-3">
                <h6>Deskripsi :</h6>
                <p class="mb-0"><?= $result['deskripsi']; ?></p>
              </div>
              <dl class="row mt-3">
                <h6>Stok Tersisa : <?= $result['stok']; ?></h6>
              </dl>
              <!--end row-->
              <!-- <?php print_r($result); ?> -->
              <div class="d-flex gap-2 mt-3">
                <?php if ($this->session->userdata('pelangganid') != "") : ?>
                  <!-- <a href="#" class="btn btn-danger btn-ecomm"> <i class="bx bxs-cart-add"></i> Masukkan Keranjang</a> -->
                  <form action="<?= base_url('checkouts/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="barangid" value="<?= $result['id'] ?>">
                    <input type="hidden" class="form-control" name="kategoriid" id="kategoriid" value="<?= $result['kategoriid']; ?>">
                    <div class="mt-0 mb-4">
                      <label for="">Jumlah Pesan:</label>
                      <input type="number" name="kuantitas" id="kuantitas" class="form-control" value="1" min="1">
                    </div>
                    <input type="hidden" name="harga" class="form-control" value="<?= $result['hargadiskon'] ?>">
                    <button type="submit" class="btn btn-warning btn-ecomm"> Pesan Sekarang</button>
                  </form>
                <?php endif; ?>
              </div>
              <hr />
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
  </div>
</section>
<!--end product detail-->