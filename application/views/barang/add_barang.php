<script>
  document.title = "Tambah Data Barang | e-Store";
</script>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Tambah Barang</h2>
      <p class="text-muted"></p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form Tambah Barang</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form class="justify-content-center" action="<?= base_url('barangs/proses_add'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="barangid" value="">
                <div class="form-group mb-3">
                  <label for="nama_brg">Input Nama Barang</label>
                  <input type="text" name="nama_brg" id="nama_brg" class="form-control" placeholder="Nama Barang" required>
                </div>
                <div class="form-group mb-3">
                  <label for="kategori">Pilih Kategori</label>
                  <?= form_dropdown('kategoriid', $kategoriid, '', 'id = "kategori" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="gambar">Gambar :</label>
                  <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                <div class="form-group mb-3">
                  <label for="stok">Input Stok</label>
                  <input type="number" name="stok" id="stok" class="form-control" placeholder="Stok" value="" required>
                </div>
                <div class="form-group mb-3">
                  <label for="simpleinput">Input Tanggal</label>
                  <input type="text" name="tgl" id="datepicker" class="form-control" placeholder="Tanggal" value="<?= format_tanggal(date("Y-m-d")); ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="status">Pilih Status Barang</label>
                  <?= form_dropdown('status', $status, '', 'id="status" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="harga">Input Harga</label>
                  <input type="text" name="harga" id="harga" class="form-control separator_uang" placeholder="Harga" required>
                </div>
                <div class="form-group mb-3">
                  <label for="hargadiskon">Input Harga Diskon</label>
                  <input type="text" name="hargadiskon" id="hargadiskon" class="form-control separator_uang" placeholder="Harga Diskon" required>
                </div>
                <div class="form-group mb-3">
                  <label for="ckeditor">Input Deskripsi</label>
                  <textarea type="text" id="ckeditor" name="deskripsi" class="ckeditor form-control"></textarea>
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