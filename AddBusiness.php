<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Create Business </title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Profile Photo </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Pending Approval </a>
            <a class="dropdown-item" href="#">Ali ahmad booked your Hall </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
  
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
   
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- sidebar end -->
    <!-- /#wrapper -->
 <div id="content-wrapper">

        <div class="container-fluid">

   

          
          <div class="row">
            <div class="col-xl-3 col-md-3"></div>
             <div class="col-xl-6 col-md-6">

                <div class="card card-login mx-auto mt-5">
                <div class="card-header">Create Business</div>
                <div class="card-body">
          <form method="POST" action="createbusinessAction.php" enctype="multipart/form-data">
                <div class="form-group">
                <div class="form-label-group">
                    <input type="text" name="c_name" id="inputName" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                    <label for="inputName"> Business Name</label>
                </div>
                </div>
            <div class="form-group">
            <div class="form-label-group">
                    <input type="text" id="inputCity" name="c_city" class="form-control" placeholder="City" required="required" autofocus="autofocus">
                    <label for="inputCity"> City</label>
            </div>
            </div>
            <div class="form-group">
            <div class="form-label-group">
                    <input type="text" id="inputArea" name="c_area" class="form-control" placeholder="Area" required="required" autofocus="autofocus">
                    <label for="inputArea">Area</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputLoction" name="c_location" class="form-control" placeholder="Location" required="required" autofocus="autofocus">
                    <label for="inputLocation"> Location</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputDays" name="c_day" class="form-control" placeholder="Open Days" required="required" autofocus="autofocus">
                    <label for="inputDays">Open Days</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputServices" name="c_service" class="form-control" placeholder="Services" required="required" autofocus="autofocus">
                    <label for="inputServices">Services</label>
                  </div>
                  </div>
                  
                   <div class="form-group">
                  <div class="form-label-group">
                    <input type="number" id="inputnumber" name="c_bookingcharges" class="form-control" placeholder="Contact Number" required="required" autofocus="autofocus">
                    <label for="inputNumber">Booking Charges</label>
                  </div>
                  </div> 

                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="nContact" id="inputContact" name="c_businesscontact" class="form-control" placeholder="Contact Number" required="required" autofocus="autofocus">
                    <label for="inputNumber">Business Contact</label>
                  </div>
                  </div> 
                  
                    <input name="image" type="file" required="required" accept="image/*"><br>
                    <br>
                  

                  <button class="btn btn-primary btn-block"  name="businesscreate">Submit</button>
          </form>
         </div>
      </div>
      </div>
      <div class="col-xl-3 col-md-3"></div>
      </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  assort tech Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
