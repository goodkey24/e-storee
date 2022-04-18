<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8">
      <h2 class="h3 mb-4 page-title">Settings</h2>
      <center>
        <p class="card-text">
          <font class="info text-center">
            <h6 class="hide-it"><?= $this->session->flashdata('pesan'); ?></h6>
          </font>
        </p>
      </center>
      <div class="my-4">
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
          </li>
        </ul>
        <div class="row mt-5 align-items-center">
          <div class="col-md-3 text-center mb-5">
            <div class="avatar avatar-xl">
              <img src="<?= config_item('base_url') ?>asset/g_admin/<?= $result['gambar'] ?>" alt="..." class="avatar-img rounded-circle mb-2">
            </div>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target=".bd-example-modal-sm">Ganti Foto</button>
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="<?= config_item('base_url') ?>asset/g_admin/<?= $result['gambar'] ?>" class="avatar-img mb-3" alt="Gambar Profile">
                    <form action="<?= site_url('profiles/proses_gambar'); ?>" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="adminid" id="adminid" value="<?= $result['id'] ?>">
                      <input type="file" class="mb-3" name="gambar" id="gambar">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> <!-- small modal -->
          </div>
          <div class="col">
            <div class="row align-items-center">
              <div class="col-md-7">
                <h4 class="mb-1"><?= $result['nama']; ?></h4>
                <p class="small mb-3"><span class="badge badge-dark"><?= $result['username']; ?></span></p>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-7">
                <p class="text-muted">Name : <?= $result['nama']; ?> </p>
              </div>
              <div class="col">
                <p class="small mb-0 text-muted">Username : <?= $result['username']; ?></p>
                <p class="small mb-0 text-muted"></p>
                <p class="small mb-3 text-muted"></p>
                <button type="button" class="btn mb-2 btn-outline-primary" data-toggle="modal" data-target="#edit_profile" data-whatever="@mdo">Edit Profile</button>
                <div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="varyModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?= site_url('profiles/proses'); ?>" method="post">
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Ubah Nama :</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $result['nama'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Ubah Username :</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $result['username'] ?>">
                          </div>
                          <div class="form-group">
                            <label for="inputPassword6">Ubah Password :</label>
                            <input type="password" class="form-control" name="password" id="password" value="<?= $result['password_hid'] ?>">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn mb-2 btn-primary">Save Change</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.card-body -->
    </div> <!-- /.col-12 -->
  </div> <!-- .row -->
</div> <!-- .container-fluid -->
