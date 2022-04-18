<script>
document.title = "Tambah Data Barang | e-Store";
</script>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Edit Barang</h2>
      <p class="text-muted"></p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form Edit Barang</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form class="justify-content-center" action="<?= base_url('barangs/proses_edit'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="barangid" value="<?= $barangid ?>">
                <div class="form-group mb-3">
                  <label for="nama_brg">Input Nama Barang</label>
                  <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?= $result['nama_brg']; ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="kategori">Pilih Kategori</label>
                  <?= form_dropdown('kategoriid', $kategoriid, $result['kategoriid'], 'id = "kategori" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="kategori">Upload Gambar</label>
                  <input type="file" class="form-control" name="gambar" id="gambar"><span style="color:red;"><?= $result['gambar'] ?></span>
                </div>
                <div class="form-group mb-3">
                  <label for="stok">Input Stok</label>
                  <input type="number" name="stok" id="stok" class="form-control" value="<?= $result['stok']; ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="datepicker">Input Tanggal</label>
                  <input type="text" id="datepicker" name="tgl" class="form-control" value="<?= explode_tanggal($result['tgl']) ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="status">Pilih Status Barang</label>
                  <?= form_dropdown('status', $status, $result['status'], 'id="status" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="harga">Input Harga</label>
                  <input type="text" name="harga" id="harga" class="form-control separator_uang" value="<?= $result['harga']; ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="hargadiskon">Input Harga Diskon</label>
                  <input type="text" name="hargadiskon" id="hargadiskon" class="form-control separator_uang" value="<?= $result['hargadiskon']; ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Deskripsi</label>
                  <textarea id="ckeditor" name="deskripsi" class="ckeditor"><?= $result['deskripsi'] ?></textarea>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    <a href="<?= site_url('barangs/') ?>" class="btn btn-secondary waves-effect">
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
