<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <h3 class="breadcrumb-title pe-3">Sign Up</h3>
        <div class="ms-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--end breadcrumb-->
  <!--start shop cart-->
  <section class="py-0 py-lg-5">
    <div class="container">
      <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
          <div class="col mx-auto">
            <div class="card mb-0">
              <center>
                <p class="card-text">
                  <font class="info text-center">
                    <h6 class="hide-it"><?= $this->session->flashdata('pesan'); ?></h6>
                  </font>
                </p>
              </center>
              <div class="card-body">
                <div class="border p-4 rounded">
                  <div class="text-center">
                    <h3 class="">Sign Up</h3>
                    <p>Sudah Punya Akun ? <a href="<?= site_url('login_users') ?>">Login Disini</a>
                    </p>
                  </div>
                  <div class="login-separater text-center mb-4"> <span></span>
                    <hr />
                  </div>
                  <div class="form-body">
                    <form class="row g-3" action="<?= base_url('registrations/proses'); ?>" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="" value="">
                      <div class="col-sm-6">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                      </div>
                      <div class="col-sm-6">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <?= form_dropdown('jk', $jk, '', 'id="jk" class="form-control" required'); ?>
                      </div>
                      <div class="col-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                      </div>
                      <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                          <input type="email" class="form-control border-end-0" name="email" id="email" placeholder="Masukkan Email">
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                          <input type="text" class="form-control border-end-0" name="username" id="username" placeholder="Masukkan Username">
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group" id="show_hide_password">
                          <input type="password" class="form-control border-end-0" name="password" id="password" placeholder="Masukkan Password">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button type="submit" class="btn btn-dark"><i class='bx bx-user'></i>Daftar</button>
                        </div>
                      </div>
                    </form>
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