<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= config_item('base_url') ?>template_admin\light\assets\products\p1.jpg">
  <title>e-Store | Dashboard </title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/feather.css">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/select2.css">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/dropzone.css">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/uppy.min.css">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/jquery.steps.css">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/jquery.timepicker.css">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/quill.snow.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/app-dark.css" id="darkTheme" disabled>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/dataTables.bootstrap4.css">
  <!-- Upload File -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/css/uppy.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= config_item('base_url') ?>template_admin/light/mycss/bootstrap-datepicker.min.css">
  <!-- Mas Mongkey -->
  <style>
    /* styling navlist */
    #navlist {
      background-color: #0074D9;
      position: absolute;
      width: 100%;
    }

    /* styling navlist anchor element */
    #navlist a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 15px;
    }

    .navlist-right {
      float: right;
    }

    /* hover effect of navlist anchor element */
    #navlist a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>

  <?= isset($_styles) ? $_styles : ""; ?>
</head>
<?php
$url_1 = $this->uri->segment('1');
?>

<body class="vertical  light  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
            <i class="fe fe-sun fe-16"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="<?= config_item('site_url') ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="<?= config_item('base_url') ?>template_admin/light/assets/images/logo.svg" alt="..." class="avatar-img rounded-circle">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= site_url('profiles') ?>">Profile</a>
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="<?= site_url('logins/logout') ?>">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?= site_url('utama_admins') ?>">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="<?= $url_1 == "utama_admins" ? "active" : ""; ?>">
            <a href="<?= site_url('utama_admins') ?>">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text"> Dashboard </span><span class="sr-only">(current)</span>
            </a>
          </li>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Menu</span>
          </p>
          <li class="<?= $url_1 == "barangs" ? "active" : ""; ?>nav-item">
            <a href="<?= site_url('barangs') ?>" class="nav-link">
              <i class="fe fe-lock fe-16"></i>
              <span class="ml-3 item-text">Barang</span><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="<?= $url_1 == "kategoris" ? "active" : ""; ?>nav-item">
            <a href="<?= site_url('kategoris') ?>" class="nav-link">
              <i class="fe fe-lock fe-16"></i>
              <span class="ml-3 item-text">Kategori</span><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="<?= $url_1 == "utama_admins" ? "active" : ""; ?>nav-item">
            <a href=" <?= site_url('admins') ?>" class="nav-link">
              <i class="fe fe-lock fe-16"></i>
              <span class="ml-3 item-text">Admin</span><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="<?= $url_1 == "utama_admins" ? "active" : ""; ?>nav-item">
            <a href="<?= site_url('users') ?>" class="nav-link">
              <i class="fe fe-users fe-16"></i>
              <span class="ml-3 item-text">User</span><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="<?= $url_1 == "utama_admins" ? "active" : ""; ?>nav-item">
            <a href="<?= site_url('pemesanans'); ?>" class="nav-link">
              <i class="fe fe-user fe-16"></i>
              <span class="ml-3 item-text">Pemesanan</span><span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <main role="main" class="main-content">
      <!-- ===============Start Right Contents Here============== -->
      <?php echo $contents; ?>
      <!-- ===============End Right Contents Here================ -->
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src=" <?= config_item('base_url') ?>template_admin/light/js/jquery.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/popper.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/moment.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/bootstrap.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/simplebar.min.js"></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/daterangepicker.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.stickOnScroll.js'></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/tinycolor-min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/config.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/d3.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/topojson.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/datamaps.all.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/datamaps-zoomto.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/datamaps.custom.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/Chart.min.js"></script>
  <!-- ==================Data Tables================= -->
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.dataTables.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/dataTables.bootstrap4.min.js'></script>
  <!-- Upload File -->
  <script src="<?= config_item('base_url') ?>template_admin/light/myscript/myscript.js"></script>
  <script>
    $('#dataTable-1').DataTable({
      autoWidth: true,
      "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
      ]
    });
  </script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/gauge.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/jquery.sparkline.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/apexcharts.min.js"></script>
  <script src="<?= config_item('base_url') ?>template_admin/light/js/apexcharts.custom.js"></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.mask.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/select2.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.steps.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.validate.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.timepicker.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/dropzone.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/uppy.min.js'></script>
  <script src='<?= config_item('base_url') ?>template_admin/light/js/quill.min.js'></script>
  <!-- Uppy Js -->
  <script src="<?= config_item('base_url') ?>template_admin/light/js/uppy.min.js"></script>
  <!-- Date Range Picker -->
  <script src='<?= config_item('base_url') ?>template_admin/light/js/daterangepicker.js'></script>
  <!-- Time Picker -->
  <script src='<?= config_item('base_url') ?>template_admin/light/js/jquery.timepicker.js'></script>
  <!-- Separator Uang -->
  <script src="<?= config_item('base_url') ?>template_admin\light\js\jsmongkey\jquery.maskMoney.min.js"></script>
  <!-- Date Picker -->
  <script src="<?= config_item('base_url') ?>template_admin/light/myscript/bootstrap-datepicker.min.js"></script>
  <!-- CKeditor -->
  <script src="<?= config_item('base_url') ?>template_admin\light\ckeditor\ckeditor.js"></script>
  <script>
    $('.select2').select2({
      theme: 'bootstrap4',
    });
    $('.select2-multi').select2({
      multiple: true,
      theme: 'bootstrap4',
    });
    $('.drgpicker').daterangepicker({
      singleDatePicker: true,
      timePicker: false,
      showDropdowns: true,
      locale: {
        format: 'MM/DD/YYYY'
      }
    });
    $('.time-input').timepicker({
      'scrollDefault': 'now',
      'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
      $('.datetimes').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
      placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
      placeholder: "____-___"
    });
    $('.input-money').mask("#.##0", {
      reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/,
          optional: true
        }
      },
      placeholder: "___.___.___.___"
    });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
      var toolbarOptions = [
        [{
          'font': []
        }],
        [{
          'header': [1, 2, 3, 4, 5, 6, false]
        }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{
            'header': 1
          },
          {
            'header': 2
          }
        ],
        [{
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }
        ],
        [{
            'script': 'sub'
          },
          {
            'script': 'super'
          }
        ],
        [{
            'indent': '-1'
          },
          {
            'indent': '+1'
          }
        ], // outdent/indent
        [{
          'direction': 'rtl'
        }], // text direction
        [{
            'color': []
          },
          {
            'background': []
          }
        ], // dropdown with defaults from theme
        [{
          'align': []
        }],
        ['clean'] // remove formatting button
      ];
      var quill = new Quill(editor, {
        modules: {
          toolbar: toolbarOptions
        },
        theme: 'snow'
      });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg) {
      var uppy = Uppy.Core().use(Uppy.Dashboard, {
        inline: true,
        target: uptarg,
        proudlyDisplayPoweredByUppy: false,
        theme: 'dark',
        width: 770,
        height: 210,
        plugins: ['Webcam']
      }).use(Uppy.Tus, {
        endpoint: 'https://master.tus.io/files/'
      });
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      });
    }
  </script>
  <script>
    var uptarg = document.getElementByClass('drag-drop-area');
    if (uptarg) {
      var uppy = Uppy.Core().use(Uppy.Dashboard, {
        inline: true,
        target: uptarg,
        proudlyDisplayPoweredByUppy: false,
        theme: 'dark',
        width: 770,
        height: 210,
        plugins: ['Webcam']
      }).use(Uppy.Tus, {
        endpoint: 'https://master.tus.io/files/'
      });
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      });
    }
  </script>
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
  <!-- ================================================== Other JS=============================================== -->
  <script>
    var base_url = "<?= config_item('base_url') ?>";
    $(document).ready(function() {

      $(function() {
        CKEDITOR.replace('ckeditor');
      });
    });

    //Date picker
    $('#tgl_mulai').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true
    });
    $('#tgl_akhir').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true
    });
    $('#tgl_m').datepicker({
      format: "dd-mm-yyyy",
      autoclose: true
    });
    $('#tgl_a').datepicker({
      format: "dd-mm-yyyy",
      autoclose: true
    });
    $('#bln_mulai').datepicker({
      format: "yyyy-mm",
      minViewMode: 1,
      autoclose: true
    });
    $('#bln_akhir').datepicker({
      format: "yyyy-mm",
      minViewMode: 1,
      autoclose: true
    });
    $('#tahun').datepicker({
      format: "yyyy",
      minViewMode: 2,
      autoclose: true
    });
    $('#datepicker').datepicker({
      orientation: "bottom auto",
      autoclose: true,
      format: 'dd-mm-yyyy'
    });

    $('.separator_uang').maskMoney({
      precision: 0
    });
    $('#ecommerce-product-list').DataTable({
      "lengthMenu": [5, 10, 20, 50, 100],
      "language": {
        "paginate": {
          "previous": "<i class='flaticon-arrow-left-1'></i>",
          "next": "<i class='flaticon-arrow-right'></i>"
        },
        "info": "Showing page _PAGE_ of _PAGES_"
      },
      drawCallback: function(settings) {
        $('[data-toggle=""]').tooltip();
      }
    });
  </script>
  <?= isset($_scripts) ? $_scripts : ""; ?>
</body>

</html>