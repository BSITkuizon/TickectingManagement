<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Prices</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<style>
    .sidebar {
        background: rgb(13, 126, 194);
        background: linear-gradient(0deg, rgba(13, 126, 194, .453321321) 58%, rgba(208, 170, 89, 0.8548669467787114) 77%);
    }

    th {
        background-color: #3ea175;
        /* Header background color */
        color: #fff;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

        <?php include '../userside/nav.php'; ?>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="adminhome.php" class="brand-link">
                <img src="../img/slsulogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
                <span class="brand-text font-weight-light">WanderLust</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../img/canigs.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="adminhome.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminticket.php" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p> Agent Management</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="adminprice.php" class="nav-link">
                                        <i class="fas fa-money-bill nav-icon"></i>
                                        <p>Price Management</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-check-circle nav-icon"></i>
                                <p>
                                    Cottage/Boat Status
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="adminboat.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/search/enhanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cottage</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">MISCELLANEOUS</li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-line text-info"></i>
                                <p>Report</p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Logout</p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        <!-- Sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">


                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- =========================================================== -->

                        <?php
                        // Dynamic counts obtained from the database (replace with actual counts)
                        $dynamicCounts = [
                            "Two-Story w/ Attic" => 3,
                            "Duplex Cottage(Right Side of the Island)" => 2,
                            "Duplex Cottage(Left Side of the Island)" => 4,
                            "Tourism Building Room" => 1
                        ];

                        foreach ($dynamicCounts as $cottageType => $count) {
                            $infoBoxClass = "";
                            if ($count > 2) {
                                $infoBoxClass = "bg-gradient-info";
                            } elseif ($count > 1) {
                                $infoBoxClass = "bg-gradient-success";
                            } elseif ($count > 0) {
                                $infoBoxClass = "bg-gradient-warning";
                            } else {
                                $infoBoxClass = "bg-gradient-danger";
                            }
                        ?>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box <?php echo $infoBoxClass; ?>">
                                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text"><?php echo $cottageType; ?></span>
                                        <span class="info-box-number" id="availableCottages"><?php echo $count; ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-success">
                                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Duplex Cottage(Right Side of the Island)</span>
                                        <span class="info-box-number" id="availableCottages">41,410</span>


                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-warning">
                                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Duplex Cottage(Left Side of the Island)</span>
                                        <span class="info-box-number" id="availableCottages">41,410</span>


                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box bg-gradient-danger">
                                    <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Tourism Building Room</span>
                                        <span class="info-box-number" id="availableCottages">41</span>


                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        <?php } ?>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">

                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">

                    </section>

                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">


                    </section>

                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


    <!-- ./wrapper -->



    <?php include '../footer.php' ?>






    <script src="../adminsidebar/activesidebar.js"></script>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
</body>

</html>