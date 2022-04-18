<script>
document.title = "Edit List Kategori | e-Store";
</script>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Edit Kategori</h2>
      <p class="text-muted"></p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form Edit Kategori</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form class="justify-content-center" action="<?= base_url('kategoris/proses'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="kategoriid" value="<?= $kategoriid ?>">
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" value="<?= $result['nama']; ?>" required>
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
