<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="<?= config_item('base_url') ?>template_frontend/assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="<?= config_item('base_url') ?>template_frontend/assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
  <!-- loader-->
  <link href="<?= config_item('base_url') ?>template_frontend/assets/css/pace.min.css" rel="stylesheet" />
  <script src="<?= config_item('base_url') ?>template_frontend/assets/js/pace.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="<?= config_item('base_url') ?>template_frontend/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="<?= config_item('base_url') ?>template_frontend/assets/css/app.css" rel="stylesheet">
  <link href="<?= config_item('base_url') ?>template_frontend/assets/css/icons.css" rel="stylesheet">
  <title>e-Store Login</title>
</head>
<script>
  var base_url = "<?= config_item('base_url') ?>";

  function login(e) {
    var e = e || window.event;
    $("#konfirmasi").html(
      "<div class='alert alert-info' role='alert'>Sedang Proses...</div>"
    );
    var data = $('#f_login').serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      data: data,
      url: base_url + "login_users/cek_login",
      success: function(response) {
        if (response.status == 0) {
          $("#konfirmasi").html(response.keterangan);
        } else {
          $("#konfirmasi").html(response.keterangan);
          window.location.assign(base_url + 'utamas');
        }
      }
    });
    return false;
  }
</script>

<body> <b class="screen-overlay"></b>
  <!--wrapper-->
  <div class="wrapper">
    <!--start top header wrapper-->
    <div class="header-wrapper">
      <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
          <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
              <h3 class="breadcrumb-title pe-3">Sign in</h3>
              <div class="ms-auto">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop cart-->
        <section class="">
          <div class="container">
            <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
              <div class="row row-cols-1 row-cols-xl-2">
                <div class="col mx-auto">
                  <div class="card">
                    <center>
                      <p class="card-text">
                        <font class="info text-center">
                          <h6 class="hide-it"><?= $this->session->flashdata('pesan'); ?></h6>
                        </font>
                      </p>
                    </center>
                    <div class="card-body">
                      <div class="border p-4 rounded">
                        <div class="text-center">
                          <h3 class="">Sign in</h3>
                          <p>Belum Punya Akun? <a href="<?= site_url('registrations') ?>">Daftar Disini</a>
                          </p>
                        </div>
                        <div class="d-grid">
                        </div>
                        <div class="login-separater text-center mb-4"> <span></span>
                          <hr />
                        </div>
                        <div class="form-body">
                          <form class="row g-3" id="f_login" method="post" onsubmit="return login();">
                            <div id="konfirmasi"></div>
                            <div class="col-12">
                              <label for="email" class="form-label">Enter Email</label>
                              <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                            </div>
                            <div class="col-12">
                              <label for="password" class="form-label">Enter Password</label>
                              <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control border-end-0" name="password" id="password" placeholder="Masukkan Password"> <a href="javascript:;" class="input-group-text bg-transparent"></a>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-check form-switch">
                              </div>
                            </div>
                            <div class="col-md-6 text-end"> <a href="#"></a>
                            </div>
                            <div class="col-12">
                              <div class="d-grid">
                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end row-->
            </div>
          </div>
        </section>
        <!--end shop cart-->
      </div>
    </div>
  </div>
</body>
<!-- Bootstrap JS -->
<script src="<?= config_item('base_url') ?>template_frontend/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="<?= config_item('base_url') ?>template_frontend/assets/js/jquery.min.js"></script>
<script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
<script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= config_item('base_url') ?>template_frontend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--app JS-->
<script src="<?= config_item('base_url') ?>template_frontend/assets/js/app.js"></script>
<!--Password show & hide js -->
<script src="<?= config_item('base_url') ?>template_frontend/assets/js/show-hide-password.js"></script>
</body>

</html>