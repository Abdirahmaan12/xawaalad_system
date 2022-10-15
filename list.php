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
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <table class="table ">
               <thead>
                    <tr>
                        <th>user_id</th>
                        <th>username</th>
                        <th>fullname</th>
                        <th>email</th>
                        <th>tell</th>
                        <th>date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                     
                     $query= "SELECT *FROM users";
                     $result = $conn->query($query);
                     $htmlTable="";

                     if($result){
                        $htmlTable .= "<tr>";
                      
                        while($row = $result->fetch_assoc()){
                            
                            $htmlTable .= "<td>". $row['user_id'] . "</td>";
                            $htmlTable .= "<td>". $row['fullname'] . "</td>";
                            $htmlTable .= "<td>". $row['username'] . "</td>";
                            $htmlTable .= "<td>". $row['email'] . "</td>";
                            $htmlTable .= "<td>". $row['tell'] . "</td>";
                            $htmlTable .= "<td>". $row['date_reg'] . "</td>";
                            
                            // $link = "users.php?" . "user_id" . $row['user_id']. "&fullname" . $row['fullname'] . "&username" . $row['username'] . "&email" . $row['email'] . "&tell" . $row['tell'] . "&date_reg" . $row['date_reg'];

                            $htmlTable .= "<td>" . '<a href="" class="btn btn-success">Update</a>' . "</td>";
                            $htmlTable .= "</tr>";
                           
                        }
                         
                       echo $htmlTable;

                     }else{
                        echo conn->error;
                     }
                    ?>
                    </tbody>
            </table>
        </div>
    </div>
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
