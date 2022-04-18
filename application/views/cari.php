<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <h3 class="breadcrumb-title pe-3">Hasil Pencarian</h3>
        <div class="ms-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home </a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:;">Pencarian</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Barang</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--end breadcrumb-->
  <!--start shop cart-->
  <section class="py-4">
    <div class="container">
      <div class="card py-3 mt-sm-3">
        <div class="card-body text-center">
          <h2 class="h4 pb-3"><?= $this->session->flashdata('pesan'); ?></h2>
          <?php if ($result && ($result) > 0) {
            foreach ($result as $row) {
              echo "<a href='" . site_url('utamas/detail/' . $row->id) . "'><h2> <br>" . $row->nama_brg . "<br>" . $row->tgl . "";
            }
          } ?>
          <div class="spacer">
            <a class="btn btn-light rounded-0 mt-3 me-3" href="<?= site_url(); ?>">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end shop cart-->
</div>
