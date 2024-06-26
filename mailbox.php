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
$servername = "localhost";
$user = "root";
$pass = "";
$db = "desa";

$conn = mysqli_connect($servername, $user, $pass, $db);
if (!$conn) {
  die("connection gagal :" . mysqli_connect_error());
}
//mysqli_close($conn);
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
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Surat</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Surat</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <a href="compose.html" class="btn btn-primary btn-block mb-3"></a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fas fa-inbox"></i> Surat
                      <?php $query = "SELECT COUNT(*) AS total FROM aduan_warga";
                      $result = mysqli_query($conn, $query);

                      if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $total = $row['total'];
                      } ?>
                      <?php
// Query untuk menghitung jumlah surat
$sql_count = "SELECT COUNT(*) AS total_surat FROM surat";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$total_surat = $row_count['total_surat'];
?>

<span class="badge bg-primary float-right"><?php echo $total_surat; ?></span>

                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Surat</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <button type="button" class="btn btn-default btn-sm checkbox-toggle" id="btnPilihSemua">
                    <i class="far fa-square"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" id="btnHapus">
                      <i class="far fa-trash-alt"></i>
                    </button>
                    <script>
                      document.getElementById('btnPilihSemua').addEventListener('click', function() {
                        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                        checkboxes.forEach(function(checkbox) {
                          checkbox.checked = true;
                        });
                      });

                      document.getElementById('btnHapus').addEventListener('click', function() {
                        var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                        var data = [];
                        checkboxes.forEach(function(checkbox) {
                          data.push(checkbox.value);
                        });

                        if (data.length > 0) {
                          var xhr = new XMLHttpRequest();
                          xhr.onreadystatechange = function() {
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                              if (xhr.status === 200) {
                                // Sukses, lakukan tindakan setelah penghapusan
                                location.reload(); // Refresh halaman setelah penghapusan
                              } else {
                                // Error, lakukan penanganan error yang sesuai
                                console.error(xhr.responseText);
                              }
                            }
                          };
                          xhr.open('POST', 'hapus_data.php', true);
                          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                          xhr.send('data=' + JSON.stringify(data));
                        }
                      });
                    </script>
                  </div>
                  <div class="table-responsive mailbox-messages">
                  <?php
include_once 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle status update request
if (isset($_GET['ubah_status_id'])) {
    $ubah_status_id = intval($_GET['ubah_status_id']);
    $update_sql = "UPDATE surat SET status='selesai' WHERE id=$ubah_status_id";
    $conn->query($update_sql);
}

$sql = "SELECT * FROM surat ORDER BY id DESC";
$result = $conn->query($sql);
?>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama user</th>
            <th>Nama Surat</th>
            <th>File</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Database query
        $sql = "SELECT id, namauser, namasurat, file_path, status FROM surat ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $iteration = 1; // Initialize iteration counter
            while($row = $result->fetch_assoc()) {
                // Sanitize output
                $id = htmlspecialchars($row["id"]);
                $namauser = htmlspecialchars($row["namauser"]);
                $namasurat = htmlspecialchars($row["namasurat"]);
                $file_path = htmlspecialchars($row["file_path"]);
                $status = htmlspecialchars($row["status"]);

                echo "<tr>";
                echo "<td>$iteration</td>"; // Display iteration counter
                echo "<td>$namauser</td>";
                echo "<td>$namasurat</td>";
                echo "<td><a href='$file_path' download><i class='fas fa-paperclip'></i> Download</a></td>";
                echo "<td>$status</td>";
                if ($status == 'proses') {
                    echo "<td><a href='?ubah_status_id=$id'>Ubah ke Selesai</a></td>";
                } else {
                    echo "<td>Selesai</td>";
                }
                echo "</tr>";

                $iteration++; // Increment iteration counter
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>

                    <!-- /.table -->
                  </div>
                  <!-- /.mail-box-messages -->
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
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