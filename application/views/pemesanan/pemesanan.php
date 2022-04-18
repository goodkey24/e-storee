<script>
  document.title = "List Data pemesanan | e-Store";
</script>
<?php $url_1 = $this->uri->segment('1'); ?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="mb-2 page-title">Data Pemesanan</h2>
      <center>
        <p class="card-text">
          <font class="info text-center">
            <h6 class="hide-it"><?= $this->session->flashdata('pesan'); ?></h6>
          </font>
        </p>
      </center>
      <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <div class="col ml-auto">
                <div class="dropdown float-right">
                  <?php if ($this->session->userdata('level') == "admin") : ?>
                    <a href="<?= site_url('pemesanans/add_pemesanan') ?>" class="btn btn-primary float-right ml-3 text-white" type="button">Add Data +</a>
                  <?php endif; ?>
                </div>
              </div>
              <!-- table -->
              <table class="table datatables" id="dataTable-1">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Barang</th>
                    <th>Kat.Barang</th>
                    <th>Tgl Pesan</th>
                    <th>Jml Pesanan</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($result && count($result) > 0) :
                    foreach ($result as $key => $val) : ?>
                      <tr>
                        <th><?= $key + 1; ?><span class="co-name"></span></th>
                        <td><?= $val['namapelanggan']; ?></td>
                        <td><?= $val['namabarang']; ?></td>
                        <td><?= $val['namakategori']; ?></td>
                        <td><?= format_tanggal($val['tanggalpesan']); ?></td>
                        <td>
                          <center><?= $val['jmlpesan']; ?></center></span>
                        </td>
                        <td><?= $val['hargabarang']; ?></td>
                        <td><img src="<?= base_url() . 'asset/g_pemesanan/' . $val['gambarbarang']; ?>" style="width: 100px;" alt="Gambar Pesanan"></td>
                        <td class="text-uppercase"><?= $val['status']; ?></td>
                        <?php if ($this->session->userdata('level') == "admin") : ?>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="<?= site_url('pemesanans/edit_pemesanan/' . $val['id']); ?>">Edit</a>
                              <a class="dropdown-item" href="<?= site_url('pemesanans/remove/') . $val['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin, Ingin Menghapus Data Ini ?')">Remove</a>
                            </div>
                          </td>
                        <?php endif; ?>
                      </tr>
                  <?php endforeach;
                  endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- simple table -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
</div> <!-- .container-fluid -->