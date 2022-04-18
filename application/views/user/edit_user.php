<script>
document.title = "Edit Data User | e-Store";
</script>
<div class="container-fluid">
  <div class="row justify-content-center">
    <center>
      <p class="card-text">
        <font class="info text-center">
          <h6 class="hide-it"><?= $this->session->flashdata('pesan'); ?></h6>
        </font>
      </p>
    </center>
    <div class="col-12">
      <h2 class="page-title">Edit User</h2>
      <p class="text-muted"></p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form Edit User</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form class="justify-content-center" action="<?= base_url('users/proses'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="userid" value="<?= $userid ?>">
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="<?= $result['nama']; ?>" placeholder="Nama" required>
                </div>
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Jenis Kelamin</label>
                  <?= form_dropdown('jk', $jk, $result['jk'], 'id="jk" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $result['alamat']; ?>" placeholder="Alamat" required>
                </div>
                <div class="form-group mb-3">
                  <label for="email">Input Email</label>
                  <input type="text" name="email" id="email" class="form-control" value="<?= $result['email']; ?>" placeholder="Email" required>
                </div>
                <div class="form-group mb-3">
                  <label for="example-email">Input Username</label>
                  <input type="text" name="username" id="username" class="form-control" value="<?= $result['username']; ?>" placeholder="Username" required>
                </div>
                <div class="form-group mb-3">
                  <label for="example-password">Input Password</label>
                  <input type="password" name="password" id="password" value="<?= $result['password_hid']; ?>" class="form-control" required>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    <a href="<?= site_url('users/') ?>" class="btn btn-secondary waves-effect">
                      Batal
                    </a>
                  </div>
                </div>
              </form>
            </div> <!-- /.col -->
          </div>
        </div>
      </div> <!-- / .card -->
    </div>
  </div>
</div>
