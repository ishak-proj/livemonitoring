<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        SISTEM MONITORING AIR PIPA
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel='shortcut icon' href="img/pipe.png">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="img/pipe.png" alt="" style="width: 50px;height: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3">SISTEM MONITORING AIR PIPA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Jumlah Laporan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">(Edit Disini)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Total Laporan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">(Edit Disini)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Live Monitoring</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>                          
                        <div class="card-body">
                            <div class="chart-area" style="height: auto;">
                                <canvas id="flowChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="table"></div>
                            </div>
                            <div class="my-2"></div>
                            <a href="#" id="prevButton" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text">Previous</span>
                            </a>
                            <a href="#" id="nextButton" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Next</span>
                            </a>
                            <div class="my-2"></div>
                        </div>
                    </div>

                    <!-- <script>
                        // Konfigurasi Firebase
                        var firebaseConfig = {
                            apiKey: "AIzaSyD4pC5OV0VmjjiPsm2VFoIkDli0Y7jtgrA",
                            authDomain: "livemonitoringwater.firebaseapp.com",
                            databaseURL: "https://livemonitoringwater-default-rtdb.asia-southeast1.firebasedatabase.app",
                            storageBucket: "livemonitoringwater.appspot.com"
                        };

                        firebase.initializeApp(firebaseConfig);
                        var db = firebase.database();

                        // Inisialisasi Chart.js
                        var ctx = document.getElementById('flowChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: [],
                                datasets: [{
                                    label: 'Sensor 1',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    data: [],
                                    fill: false
                                }, {
                                    label: 'Sensor 2',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    data: [],
                                    fill: false   
                                }, {
                                    label: 'Threshold',
                                    borderColor: 'rgba(100, 99, 132, 1)',
                                    data: [],
                                    fill: false
                                }]
                            },
                            options: {
                                responsive: true,
                                spanGaps: true,
                                scales: {
                                    x: {
                                        display: true
                                    },
                                    y: {
                                        display: true,
                                        suggestedMin: 0
                                    }
                                }
                            }
                        });

                        // Fungsi untuk memuat data dari Firebase dan memperbarui chart dan tabel
                        function loadData() {
                            db.ref('flow_data').on('child_added', function(snapshot) {
                                var data = snapshot.val();
                                var labels = chart.data.labels;
                                var sensor1Data = chart.data.datasets[0].data;
                                var sensor2Data = chart.data.datasets[1].data;
                                var thresData = chart.data.datasets[2].data;
                                // var statData = chart.data.datasets[3].data;
                                var table = document.getElementById('dataTable').getElementsByTagName('tbody')[0];

                                // Tambahkan data baru ke chart
                                labels.push(data.timestamp);
                                sensor1Data.push(data.sensor === 'Sensor 1' ? data.flow_rate : null);
                                sensor2Data.push(data.sensor === 'Sensor 2' ? data.flow_rate : null);
                                thresData.push(data.sensor === 'Threshold' ? data.threshold : null);
                                chart.update();

                                // Tambahkan data baru ke tabel
                                var row = table.insertRow(-1);
                                row.insertCell(0).innerHTML = data.sensor;
                                row.insertCell(1).innerHTML = data.flow_rate;
                                row.insertCell(2).innerHTML = data.timestamp;
                                row.insertCell(3).innerHTML = data.threshold;
                                // row.insertCell(3).innerHTML = data.stat_relay;
                            });
                        }

                        // Panggil fungsi untuk memuat data saat halaman dimuat
                        loadData();
                    </script> -->
                    <script>
                        // Konfigurasi Firebase
                        var firebaseConfig = {
                            apiKey: "AIzaSyD4pC5OV0VmjjiPsm2VFoIkDli0Y7jtgrA",
                            authDomain: "livemonitoringwater.firebaseapp.com",
                            databaseURL: "https://livemonitoringwater-default-rtdb.asia-southeast1.firebasedatabase.app",
                            projectId: "livemonitoringwater",
                            storageBucket: "livemonitoringwater.appspot.com",
                            messagingSenderId: "926767213419",
                            appId: "1:926767213419:web:863257eca2486e9eb07a2e"
                        };
                    
                        firebase.initializeApp(firebaseConfig);
                    
                        // Mendapatkan referensi database
                        var database = firebase.database().ref().child("data_air");
                    
                        // Mendapatkan data dari Firebase dan menampilkan dalam grafik garis dan tabel
                        database.on("value", function(snapshot) {
                            var data = snapshot.val();
                            var timestamps = Object.keys(data).map(function(key) {
                                return data[key].timestamp;
                            });
                            var debit_air_sensor1 = Object.keys(data).map(function(key) {
                                return data[key].sensor === "Sensor 1" ? data[key].debit_air : null;
                            });
                            var debit_air_sensor2 = Object.keys(data).map(function(key) {
                                return data[key].sensor === "Sensor 2" ? data[key].debit_air : null;
                            });
                            var threshold_sensor1 = Object.keys(data).map(function(key) {
                                return data[key].sensor === "Sensor 1" ? data[key].threshold : null;
                            });
                            var threshold_sensor2 = Object.keys(data).map(function(key) {
                                return data[key].sensor === "Sensor 2" ? data[key].threshold : null;
                            });
                    
                            // Tampilkan data dalam grafik garis menggunakan Chart.js
                            var ctx = document.getElementById("flowChart").getContext("2d");
                            var chart = new Chart(ctx, {
                                type: "line",
                                data: {
                                    labels: timestamps,
                                    datasets: [{
                                        label: "Sensor 1",
                                        data: debit_air_sensor1,
                                        borderColor: "rgba(75, 192, 192, 1)",
                                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                                        fill: true
                                    },
                                    {
                                        label: "Sensor 2",
                                        data: debit_air_sensor2,
                                        borderColor: "rgba(255, 99, 132, 1)",
                                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                                        fill: true
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    spanGaps: true,
                                    scales: {
                                        x: {
                                            display: true,
                                            title: {
                                                display: true,
                                                text: "Timestamp"
                                            }
                                        },
                                        y: {
                                            display: true,
                                            title: {
                                                display: true,
                                                text: "Debit Air (L/s)"
                                            }
                                        }
                                    }
                                }
                            });
                    
                            // Tampilkan data dalam tabel
                            const pageSize = 5;
                            let curPage = 1;
                            document.querySelector('#nextButton').addEventListener('click', nextPage, false);
                            document.querySelector('#prevButton').addEventListener('click', previousPage, false);

                            function previousPage() {
                            if(curPage > 1) curPage--;
                            renderTable();
                            }

                            function nextPage() {
                            if((curPage * pageSize) < data.length) curPage++;
                            renderTable();
                            }

                            function renderTable() {
                            // create html
                            let table = '';
                            timestamps.filter((row, index) => {
                                    let start = (curPage-1)*pageSize;
                                    let end =curPage*pageSize;
                                    if(index >= start && index < end) return true;
                            }).forEach(i => {
                                table += "<tr><td>" + timestamps[i] + "</td><td>" + (debit_air_sensor1[i] !== null ? "Sensor 1" : "Sensor 2") + "</td>"+
                                "<td>" + (debit_air_sensor1[i] !== null ? debit_air_sensor1[i] : debit_air_sensor2[i]) + "</td>"+
                                "<td>" + (debit_air_sensor1[i] !== null ? threshold_sensor1[i] : threshold_sensor2[i]) + "</td>"+
                                "</tr>";
                            });
                            table.innerHTML = result;
                            }

                            var table = "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
                            table += "<thead><tr><th>Timestamp</th><th>Sensor</th><th>Debit Air (L/s)</th><th>Threshold</th></tr></thead><tfoot><tr><th>Timestamp</th><th>Sensor</th><th>Debit Air (L/s)</th><th>Threshold</th></tr></tfoot><tbody>";
                            for (var i = 0; i < timestamps.length; i++) {
                                table += "<tr>";
                                table += "<td>" + timestamps[i] + "</td>";
                                table += "<td>" + (debit_air_sensor1[i] !== null ? "Sensor 1" : "Sensor 2") + "</td>";
                                table += "<td>" + (debit_air_sensor1[i] !== null ? debit_air_sensor1[i] : debit_air_sensor2[i]) + "</td>";
                                table += "<td>" + (debit_air_sensor1[i] !== null ? threshold_sensor1[i] : threshold_sensor2[i]) + "</td>";
                                table += "</tr>";
                            }
                            table += "</tbody></table>";
                            document.getElementById("table").innerHTML = table;
                        });
                    </script>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Monitoring 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>