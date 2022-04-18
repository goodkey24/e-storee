<script defer>
  document.title = "Akun Saya | e-Store";
</script>
<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <!-- <?php print_r($result); ?> -->
        <h3 class="breadcrumb-title pe-3"><i class="bx bx-user"></i> <span class="text-danger"><?= $result['nama']; ?></span></h3>

        <div class="ms-auto">
          <nav aria-label="breadcrumb">
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--end breadcrumb-->
  <!--start shop cart-->
  <section class="py-4">
    <div class="container">
      <h3 class="d-none">Account</h3>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-none mb-3 mb-lg-0 border rounded-0">
                <div class="card-body">
                  <div class="list-group list-group-flush"> <a href="" class="list-group-item d-flex justify-content-between align-items-center">Dashboard <i class='bx bx-tachometer fs-5'></i></a>
                    <a href="<?= site_url('pemesanan_users/index'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Pesanan Saya<i class='bx bx-cart-alt fs-5'></i></a>
                    <a href="<?= site_url('profile_users/detail_user'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"> Detail Profil <i class='bx bx-user-circle fs-5'></i></a>
                    <a href="<?= site_url('login_users/logout'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"> Logout <i class='bx bx-log-out fs-5'></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-none mb-0">
                <div class="card-body">
                  <p>Hello <strong>
                      <?= $result['nama']; ?>
                    </strong></p>
                  <p>Dari Dasbor akun Anda, Anda dapat melihat Pesanan Terbaru Anda, mengelola alamat pengiriman dan penagihan, serta mengedit kata sandi dan detail akun Anda</p>
                </div>
              </div>
            </div>
          </div>
          <!--end row-->
        </div>
      </div>
    </div>
  </section>
  <!--end shop cart-->
</div>