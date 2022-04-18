<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= config_item('base_url') ?>template_admin\light\assets\products\p1.jpg">
    <title>e-Store | Login</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/app-light.css" id="lightTheme">
    <!-- <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/app-dark.css" id="darkTheme" disabled> -->
  </head>
  <script>
  var base_url = "<?= config_item('base_url') ?>";

  function login(e) {
    var e = e || window.event;
    $("#konfirmasi").html("<div class='alert alert-info' role='alert'>Sedang Proses...</div>");
    var data = $('#f_login').serialize();
    $.ajax({
      type: "POST",
      dataType: "json",
      data: data,
      url: base_url + "logins/cek_login",
      success: function(response) {
        if (response.status == 0) {
          $("#konfirmasi").html(response.keterangan);
        } else {
          $("#konfirmasi").html(response.keterangan);
          window.location.assign(base_url + 'utama_admins');
        }
      }
    });
    return false;
  }
  </script>

  <body class="light">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form id="f_login" class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="" method="post" onsubmit="return login();">
          <div id="konfirmasi"></div>
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
          <h1 class="h6 mb-3">Sign in</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only"> Username</label>
            <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukkan Username..." required="" autofocus="">
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required="">
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
          <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
      </div>
    </div>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/jquery.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/popper.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/moment.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/bootstrap.min.js"></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/simplebar.min.js"></script>
    <script src='<?= config_item('base_url') ?>template_admin/light/js/daterangepicker.js'></script>
    <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.stickOnScroll.js'></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/tinycolor-min.js"></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/config.js"></script>
    <script src="<?= config_item('base_url') ?>template_admin/light/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
    </script>
  </body>

</html>
</body>

</html>
