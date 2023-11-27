<?php


include '../userprocess/memberInsert.php';
insertMembers();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create | Ticket</title>


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
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

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
                                    <a href="userdash.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="userticket.php" class="nav-link active" >
                                            <i class="far fa-user nav-icon"></i>
                                            <p>Ticket Form</p>
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
                                    <a href="userboat.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="usercottage.php" class="nav-link">
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
        <section id="memberList">
    <div class="container">
        <h3>Member List</h3>
        <p>Add individual members.</p>

        <!-- Button to trigger the modal -->

        <!-- Member Modal -->
        <form method="POST" action="">
      
                            <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                        
                     
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="memberCount">Number of Members</label>
                                    <input type="number" name="memberCount" class="form-control" id="memberCount" placeholder="Enter the number of members" required>
                                </div>

                                <div class="form-group">
                                    <label for="memberFields">Member Names</label>
                                    <div id="memberFields">
                                        <!-- Dynamically generated member input fields will appear here -->
                                    </div>
                                </div>
                           
                        </div>
                        <div class="modal-footer">
    <button type="button" class="btn btn-secondary">Close</button>
    <button type="button" class="btn btn-primary" id="generateMembers">Generate Members</button>
    <button type="submit" class="btn btn-success" id="submitMembers" name="submitMembers">Submit</button>
</div>
</form>

    

<script>
document.addEventListener("DOMContentLoaded", function () {
    const memberFields = document.getElementById("memberFields");
    const generateMembersButton = document.getElementById("generateMembers");

    generateMembersButton.addEventListener("click", function () {
        const memberCountInput = document.getElementById("memberCount");
        const count = parseInt(memberCountInput.value, 10); // Always specify the radix

        // Clear existing member fields
        memberFields.innerHTML = "";

        for (let i = 0; i < count; i++) {
            // Create a div for the input group
            const inputGroup = document.createElement("div");
            inputGroup.classList.add("form-group");

            // Create the label for the input
            const label = document.createElement("label");
            label.setAttribute("for", "memberName" + i);
            label.textContent = "Member " + (i + 1) + " Name";

            // Create the input field
            const input = document.createElement("input");
            input.type = "text";
            input.classList.add("form-control");
            input.name = "memberName[]";
            input.id = "memberName" + i;
            input.placeholder = "Enter member name";
            input.required = true;

            // Append the label and input to the input group
            inputGroup.appendChild(label);
            inputGroup.appendChild(input);

            // Append the input group to the fields container
            memberFields.appendChild(inputGroup);
        }
    });
});
</script>



</div>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br>
<?php include '../footer.php' ?>   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
</html>