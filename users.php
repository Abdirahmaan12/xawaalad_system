<!DOCTYPE html>
<html lang="en">
<head>
 <?php 
 include("library/head.php");
 include("conn.php");

 ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  

  <!-- Navbar -->
  <?php include("library/nav.php");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php include("library/sidebar.php");?>
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
   <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> User Registeration form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="functions.php" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="fname">fullname</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter full_name" require="">
                  </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control"  name="username" id="username" placeholder="usern_name" require="">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" require="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password" id="password" placeholder="Password" require="">
                  </div>
                  <div class="form-group">
                    <label for="tell">tell</label>
                    <input type="number" class="form-control" name="tell" id="tell" placeholder="tell" require="">
                  </div>
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control"  name="date_reg" id="date">
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Register </button>
                  <button type="submit" name="update"  class="btn btn-success ml-4">Update </button>
                </div>
              </form>
            </div>
    </div>
    <div class="col-2"></div>
   </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("library/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include("library/script.php");?>
</body>
</html>
