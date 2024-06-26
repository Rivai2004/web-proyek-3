<?php
include_once 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login");
  exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * from login_admin WHERE username = '$username'";
$hasil = $conn->query($sql);
if ($hasil->num_rows > 0) {
  $row = $hasil->fetch_assoc();
  $email = $row['username'];
}

$id_informasi = "";
$image = "";
$judul = "";
$deskripsi = "";
$sukses = "";
$error = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = "";
}
if ($op == 'delete') {
  $id_informasi = $_GET['id'];
  $sql1 = "delete from informasi where id_informasi= '$id_informasi'";
  $q1 = mysqli_query($conn, $sql1);
  if ($q1) {
    $sukses = "Berhasil hapus data";
  } else {
    $error = "Gagal melakukan delete data";
  }
}
if ($op == 'edit') {
  $id_informasi = $_GET['id'];
  $sqldef = "select * from informasi where id_informasi = '$id_informasi'";
  $q1 = mysqli_query($conn, $sqldef);
  $r1 = mysqli_fetch_array($q1);
  $id_informasi = $r1['id_informasi'];
  $image  = $r1['image'];
  $judul = $r1['judul'];
  $deskripsi = $r1['deskripsi'];

  if ($id_informasi == '') {
    $error = "Data tidak ditemukan";
  }
}
if (isset($_POST['simpan'])) { //untuk create
  $id_informasi = $_POST['id_informasi'];
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];

  if ($id_informasi && $judul && $deskripsi && isset($_FILES['image']['name'])) {
    $image = $_FILES['image']['name']; // Nama file gambar
    $image_tmp = $_FILES['image']['tmp_name']; // Lokasi sementara file gambar

    // Memindahkan file gambar ke folder tujuan
    $folder_tujuan = "img/" . $image;
    if (move_uploaded_file($image_tmp, $folder_tujuan)) {
      if ($op == 'edit') { //untuk update
        $sql1 = "update informasi set image='$image',judul='$judul', deskripsi='$deskripsi' where id_informasi = '$id_informasi'";
        $q1 = mysqli_query($conn, $sql1);
        if ($q1) {
          $sukses = "Data berhasil diupdate";
        } else {
          $error = "Data gagal diupdate";
        }
      } else { //untuk insert
        $sql1 = "insert into informasi(id_informasi,image,judul,deskripsi) values ('$id_informasi','$image','$judul','$deskripsi')";
        $q1 = mysqli_query($conn, $sql1);
        if ($q1) {
          $sukses = "Berhasil memasukkan data baru";
        } else {
          $error = "Gagal memasukkan data";
        }
      }
    } else {
      $error = "Gagal mengunggah file gambar";
    }
  } else {
    $error = "Silakan masukkan semua data";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Desa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome-free/css/all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://bulakan.desa.id/wp-content/themes/rife-free/style.css" />

  <script src="https://kit.fontawesome.com/528ab7355f.js" crossorigin="anonymous"></script>
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <div class="input-group-append">
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="dropdown-divider"></div>\
          </div>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Admin desa</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="img/user3-128x128.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $email ?></a>
          </div>
          <div class="info">
            <a href="logout" class="d-block">Logout</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <?php include_once 'navbar.php' ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <!-- untuk memasukkan data -->
        <div class="card">
          <div class="card-header">
            Edit Jadwal
          </div>
          <div class="card-body">
            <?php
            if ($error) {
            ?>
              <script>
                Swal.fire("<?php echo $error ?>");
              </script>
            <?php

            }
            ?>
            <?php
            if ($sukses) {
            ?>
              <script>
                Swal.fire("<?php echo $sukses ?>");
              </script>
            <?php

            }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-3 row">
                <label for="id_informasi" class="col-sm-2 col-form-label">ID SOTK</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_informasi" name="id_informasi" value="<?php echo $id_informasi ?>" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                  <input type="file" name="image" class="from-control" id="file">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul ?>" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi ?>" required>
                </div>
              </div>
              <div class="col-12">
                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
              </div>
            </form>
          </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
          <div class="card-header text-white bg-secondary">
            Data Pengguna
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID SOTK</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">judul</th>
                  <th scope="col">deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql2 = "SELECT * FROM informasi";
                $q2 = mysqli_query($conn, $sql2);
                $urut = 1;
                while ($r2 = mysqli_fetch_array($q2)) {
                  $id_informasi = $r2['id_informasi'];
                  $image  = $r2['image'];
                  $judul = $r2['judul'];
                  $deskripsi = $r2['deskripsi'];
                ?>
                  <tr>
                    <th scope="row">
                      <?php echo $urut++ ?>
                    </th>
                    <td scope="row">
                      <?php echo $id_informasi ?>
                    </td>
                    <td scope="row">
                      <img src="img/<?php echo $image ?>" alt="Gambar" width="100px" height="auto">
                    </td>
                    <td scope="row">
                      <?php echo $judul ?>
                    </td>
                    <td scope="row">
                      <?php echo $deskripsi ?>
                    </td>
                    <td scope="row">
                      <a href="?op=edit&id=<?php echo $id_informasi ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                      <a href="?op=delete&id=<?php echo $id_informasi ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023
        <a href="https://adminlte.io">Desa Sleman</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>By Polindra</b>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script>
    $(function() {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");

      var areaChartData = {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
        ],
        datasets: [{
            label: "Digital Goods",
            backgroundColor: "rgba(60,141,188,0.9)",
            borderColor: "rgba(60,141,188,0.8)",
            pointRadius: false,
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [28, 48, 40, 19, 86, 27, 10],
          },
          {
            label: "Electronics",
            backgroundColor: "rgba(210, 214, 222, 1)",
            borderColor: "rgba(210, 214, 222, 1)",
            pointRadius: false,
            pointColor: "rgba(210, 214, 222, 1)",
            pointStrokeColor: "#c1c7d1",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
      };

      var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
            },
          }, ],
          yAxes: [{
            gridLines: {
              display: false,
            },
          }, ],
        },
      };

      // This will get the first returned node in the jQuery collection.
      new Chart(areaChartCanvas, {
        type: "line",
        data: areaChartData,
        options: areaChartOptions,
      });

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
      var lineChartOptions = $.extend(true, {}, areaChartOptions);
      var lineChartData = $.extend(true, {}, areaChartData);
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false;

      var lineChart = new Chart(lineChartCanvas, {
        type: "line",
        data: lineChartData,
        options: lineChartOptions,
      });

      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $("#donutChart").get(0).getContext("2d");
      var donutData = {
        labels: ["Chrome", "IE", "FireFox", "Safari", "Opera", "Navigator"],
        datasets: [{
          data: [700, 500, 400, 600, 300, 100],
          backgroundColor: [
            "#f56954",
            "#00a65a",
            "#f39c12",
            "#00c0ef",
            "#3c8dbc",
            "#d2d6de",
          ],
        }, ],
      };
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      };
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: "doughnut",
        data: donutData,
        options: donutOptions,
      });

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      var pieData = donutData;
      var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
      };
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(pieChartCanvas, {
        type: "pie",
        data: pieData,
        options: pieOptions,
      });

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      var barChartData = $.extend(true, {}, areaChartData);
      var temp0 = areaChartData.datasets[0];
      var temp1 = areaChartData.datasets[1];
      barChartData.datasets[0] = temp1;
      barChartData.datasets[1] = temp0;

      var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false,
      };

      new Chart(barChartCanvas, {
        type: "bar",
        data: barChartData,
        options: barChartOptions,
      });

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $("#stackedBarChart")
        .get(0)
        .getContext("2d");
      var stackedBarChartData = $.extend(true, {}, barChartData);

      var stackedBarChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            stacked: true,
          }, ],
          yAxes: [{
            stacked: true,
          }, ],
        },
      };

      new Chart(stackedBarChartCanvas, {
        type: "bar",
        data: stackedBarChartData,
        options: stackedBarChartOptions,
      });
    });

    function visimisi(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
</body>

</html>