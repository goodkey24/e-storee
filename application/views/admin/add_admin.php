<script>
document.title = "Tambah Data Admin | e-Store";
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
      <h2 class="page-title">Tambah Admin</h2>
      <p class="text-muted"></p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form Tambah Admin</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form class="justify-content-center" action="<?= base_url('admins/proses_add'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="adminid" value="">
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group mb-3">
                  <label for="example-email">Input Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group mb-3">
                  <label for="example-password">Input Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                  <label for="example-palaceholder">Upload Gambar</label>
                  <input type="file" name="gambar" id="gambar" class="form-control" placeholder="placeholder" required>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    <a href="<?= site_url('admins/') ?>" class="btn btn-secondary waves-effect">
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
