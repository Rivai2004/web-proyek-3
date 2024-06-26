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

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
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
      </ul>
      <!-- Message End -->
      </a>
      <div class="dropdown-divider"></div>
  </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
      <i class="fas fa-th-large"></i>
    </a>
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
      <?php include_once 'navbar.php' ?>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row
        <!-- /.row -->
        <!-- Main row -->
        <div class=" row">
          <!-- Left col -->
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable" style="float:right" ;>
            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>

              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15858.751904619945!2d108.2731252256399!3d-6.434110375518928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec7a1ac265321%3A0xa22200096bcee5db!2sLeuwigede%2C%20Kec.%20Widasari%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1679913014214!5m2!1sid!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <strong>Copyright &copy; 2023
            <a href="https://adminlte.io">Desa Sleman</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
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
      </script>
</body>

</html>