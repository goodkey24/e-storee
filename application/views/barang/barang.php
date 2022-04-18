<script>
  document.title = "List Data Barang | e-Store";
</script>
<?php $url_1 = $this->uri->segment('1'); ?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="mb-2 page-title">Data Barang</h2>
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
                    <a href="<?= site_url('barangs/add_barang') ?>" class="btn btn-primary float-right ml-3 text-white" type="button">Add Data +</a>
                  <?php endif; ?>
                </div>
              </div>
              <!-- table -->
              <table class="table datatables" id="dataTable-1">
                <thead class="thead-dark">
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($result && count($result) > 0) :
                    foreach ($result as $key => $val) : ?>
                      <tr>
                        <th><?= $key + 1; ?><span class="co-name"></span></th>
                        <td><?= $val['nama_brg']; ?></td>
                        <td><?= $val['namakategori']; ?></td>
                        <td><img style="width: 100px;" src="<?= base_url() . 'asset/g_barang/' . $val['gambar']; ?>" alt="Gambar Barang"></td>
                        <td><?= $val['stok']; ?></td>
                        <td><span class="post-date"><?= format_tanggal($val['tgl']); ?></span>
                        <td class="text-uppercase"><?= $val['status']; ?></td>
                        <td><?= format_angka($val['harga']); ?></td>
                        <td><?= format_angka($val['hargadiskon']); ?></td>
                        <td><?= substr($val['deskripsi'], 0, 60,) . "..."; ?></td>
                        <?php if ($this->session->userdata('level') == "admin") : ?>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="<?= site_url('barangs/edit_barang/' . $val['id']); ?>">Edit</a>
                              <a class="dropdown-item" href="<?= site_url('barangs/remove/') . $val['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin, Ingin Menghapus Data Ini ?')">Remove</a>
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