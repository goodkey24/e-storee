<?php $query = $this->db->select('id')->from('admin')->get();
$admin = $query->num_rows(); ?>
<?php $query = $this->db->select('id')->from('user')->get();
$user = $query->num_rows(); ?>
<?php $query = $this->db->select('id')->from('barang')->get();
$barang = $query->num_rows(); ?>
<?php $query = $this->db->select('id')->from('pemesanan')->get();
$pemesanan = $query->num_rows(); ?>
<?php
$url_1 = $this->uri->segment('1');
?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow text-white border-0">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary-light">
                    <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                  </span>
                </div>
                <div class="col pr-0">
                  <p class="small text-muted mb-0">Jumlah Admin</p>
                  <span class="h3 mb-0 text-dark"><?= $admin; ?></span>
                  <span class="small text-muted"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary">
                    <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                  </span>
                </div>
                <div class="col pr-0">
                  <p class="small text-muted mb-0">Jumlah User</p>
                  <span class="h3 mb-0"><?= $user; ?></span>
                  <span class="small text-success"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary">
                    <i class="fe fe-16 fe-filter text-white mb-0"></i>
                  </span>
                </div>
                <div class="col">
                  <p class="small text-muted mb-0">Jumlah Barang</p>
                  <div class="row align-items-center no-gutters">
                    <div class="col-auto">
                      <span class="h3 mr-2 mb-0"><?= $barang; ?></span>
                    </div>
                    <div class="col-md-12 col-lg">
                      <div class="progress progress-sm mt-2" style="height:3px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-sm bg-primary">
                    <i class="fe fe-16 fe-activity text-white mb-0"></i>
                  </span>
                </div>
                <div class="col">
                  <p class="small text-muted mb-0">Jumlah Pemesanan</p>
                  <span class="h3 mb-0"><?= $pemesanan; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end section -->
      <div class="row align-items-center my-2">
        <div class="col-auto ml-auto">
          <form class="form-inline">
            <div class="form-group">
              <label for="reportrange" class="sr-only"></label>
              <div id="reportrange" class="px-2 py-2 text-muted">
                <i class="fe fe-calendar fe-16 mx-2"></i>
                <span class="small"></span>
              </div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-12 text-muted"></span></button>
              <button type="button" class="btn btn-sm"><span class="fe fe-filter fe-12 text-muted"></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>