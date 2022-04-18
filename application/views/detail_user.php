<script>
  document.title = "Detail Profile | e-Store";
</script>
<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <h3 class="breadcrumb-title pe-3">

          <h3 class="breadcrumb-title pe-3"><i class="bx bx-user"></i> <span class="text-danger"><?= $result['nama']; ?></span></h3>
        </h3>
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
              <div class="card shadow-none mb-3 mb-lg-0 border">
                <div class="card-body">
                  <div class="list-group list-group-flush"> <a href="<?= site_url('profile_users'); ?>" class="list-group-item d-flex justify-content-between align-items-center">Dashboard <i class='bx bx-tachometer fs-5'></i></a>
                    <a href="<?= site_url('pemesanan_users/index') ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"> Pesanan Saya<i class='bx bx-cart-alt fs-5'></i></a>
                    <a href="<?= site_url('profile_users/detail_user'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Detail Profile <i class='bx bx-user-circle fs-5'></i></a>
                    <a href="<?= site_url('login_users/logout'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"> Logout <i class='bx bx-log-out fs-5'></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <font class="info text-center">
                <h6 class="hide-it"><?= $this->session->flashdata('pesan'); ?></h6>
              </font>
              <div class="card shadow-none mb-0 border">
                <div class="card-body">
                  <!-- Start Form Edit Profile -->
                  <form class="row g-3" action="<?= site_url('profile_users/proses'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="pelangganid" value="<?= $result['id'] ?>">
                    <div class="col-12">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" value="<?= $result['nama']; ?>" required>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Jenis Kelamin</label>
                      <?= form_dropdown('jk', $jk, $result['jk'], 'id="jk" class="form-control" required'); ?>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $result['alamat']; ?>">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" value="<?= $result['email']; ?>">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="username" value="<?= $result['username']; ?>">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" value="<?= $result['password_hid']; ?>">
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark btn-ecomm">Save Changes</button>

                    </div>
                  </form>
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