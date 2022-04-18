<script>
  document.title = "Tambah Data Pemesanan | e-Store";
</script>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Tambah Pemesanan</h2>
      <p class="text-muted"></p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form Tambah Pemesanan</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <form class="justify-content-center" action="<?= base_url('pemesanans/proses_add'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="pemesananid" value="">
                <div class="form-group mb-3">
                  <label for="pelanggan">Pilih Pelanggan</label>
                  <?= form_dropdown('pelangganid', $pelangganid, '', 'id = "pelanggan" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="barang">Pilih Barang</label>
                  <?= form_dropdown('barangid', $barangid, '', 'id = "barang" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="kategori">Pilih Kategori</label>
                  <?= form_dropdown('kategoriid', $kategoriid, '', 'id = "kategori" class="form-control" required'); ?>
                </div>
                <div class="form-group mb-3">
                  <label for="datepicker">Tanggal Pesan</label>
                  <input type="text" name="tanggalpesan" id="datepicker" class="form-control" placeholder="Tanggal Pesan" value="<?= format_tanggal(date('Y,m,d')); ?>" required>
                </div>
                <div class="form-group mb-3">
                  <label for="stok">Input Jumlah Pesanan</label>
                  <input type="number" name="jmlpesan" id="jmlpesan" class="form-control" placeholder="Jumlah Pesanan" value="" required>
                </div>
                <div class="form-group mb-3">
                  <label for="harga">Input Harga</label>
                  <input type="text" name="harga" id="harga" class="form-control separator_uang" placeholder="Harga" required>
                </div>
                <div class="form-group mb-3">
                  <label for="gambar">Upload Gambar</label>
                  <input type="file" name="gambar" id="gambar" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                  <label for="status">Pilih Status Barang</label>
                  <?= form_dropdown('status', $status_brg, '', 'id="status" class="form-control" required'); ?>
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