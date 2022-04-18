<script>
  document.title = "Pesanan Saya | e-Store";
</script>
<div class="page-content">
  <!--start breadcrumb-->
  <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
    <div class="container">
      <div class="page-breadcrumb d-flex align-items-center">
        <h3 class="breadcrumb-title pe-3">Pesanan Saya</h3>
        <div class="ms-auto">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:;">Account</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Pesanan Saya</li>
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
      <h3 class="d-none">Account</h3>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-none mb-3 mb-lg-0 border">
                <div class="card-body">
                  <div class="list-group list-group-flush"> <a href="<?= site_url('profile_users'); ?>" class="list-group-item d-flex justify-content-between align-items-center">Dashboard <i class='bx bx-tachometer fs-5'></i></a>
                    <a href="<?= site_url('pemesanan_users/index') ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"> Pesanan Saya<i class='bx bx-cart-alt fs-5'></i></a>
                    <a href="<?= site_url('profile_users/detail_user'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Detail Profile <i class='bx bx-user-circle fs-5'></i></a>
                    <a href="<?= site_url('login_users/logout'); ?>" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"> Logout <i class='bx bx-log-out fs-5'></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-none mb-0">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th>No Invoice</th>
                          <th>Nama</th>
                          <th>Status</th>
                          <th>Total</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <!-- <?php print_r($pelangganid); ?> -->
                      <tbody>
                        <?php if ($result && count($result) > 0) :
                          foreach ($result as $key => $val) : ?>
                            <tr>
                              <?php if ($pelangganid == $val['pelangganid']) : ?>
                                <td><?= $val['noinvoice']; ?></td>
                                <td><?= $val['namabarang']; ?></td>
                                <td>
                                  <div class="badge rounded-pill bg-danger w-100"><?= $val['status']; ?></div>
                                </td>
                                <td><?= format_angka($val['hargabarang']); ?> / 1 item</td>
                                <td>
                                  <div class="d-flex gap-2"> <a href="<?= site_url('pemesanan_users/detail/' . $val['id']); ?>" class="btn btn-dark btn-sm rounded-0">Detail</a>
                                    <!-- <a href="javascript:;" class="btn btn-dark btn-sm rounded-0">Pay</a> -->
                                    <!-- <a href="javascript:;" class="btn btn-dark btn-sm rounded-0">Cancel</a> -->
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
              </div>
            </div>
          </div>
          <!--end row-->
        </div>
      </div>
    </div>
  </section>
  <!--end shop cart-->
</div>