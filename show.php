<?php
   include("dbconfig.php");
   $sql="SELECT * FROM registration";
   $res=mysqli_query($db,$sql);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link href="style/style.css" rel="stylesheet" type="text/css">
 

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu -->
     

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>JE Campus Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          
          <span class="input-group-btn">
                
              </span>
        </div>
      </form>
      <!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php /*echo 'error';*/ ?></div>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
      <h5>SHOW DETAILS</h5>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Login</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
    

    <div class="container">
    <div class="row">
      <div class="col-sm-30 col-md-40 col-lg-35 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><strong>Student Registration Details</strong></h5>
            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col">#Sl. No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Father's Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Address1</th>
                  <th scope="col">Address2</th>
                  <th scope="col">Near</th>
                  <th scope="col">Landmark</th>
                  <th scope="col">PO</th>
                  <th scope="col">PS</th>
                  <th scope="col">Dist.</th>
                  <th scope="col">PIN</th>
                  <th scope="col">Alt. Mobile</th>
                  <th scope="col">Class</th>
                  <th scope="col">Course</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i=1;
                  while($rows=mysqli_fetch_assoc($res))
                  {
                ?>    
                    <tr>
                      <th scope="row"><?php echo $i++;?>.</th>
                      <td><?php echo $rows['name']; ?></td>
                      <td><?php echo $rows['father_name']; ?></td>
                      <td><?php echo $rows['email']; ?></td>
                      <td><?php echo $rows['contact_number']; ?></td>
                      <td><?php echo $rows['address1']; ?></td>
                      <td><?php echo $rows['address2']; ?></td>
                      <td><?php echo $rows['near']; ?></td>
                      <td><?php echo $rows['landmark']; ?></td>
                      <td><?php echo $rows['po']; ?></td>
                      <td><?php echo $rows['ps']; ?></td>
                      <td><?php echo $rows['dist']; ?></td>
                      <td><?php echo $rows['pin']; ?></td>
                      <td><?php echo $rows['alt_number']; ?></td>
                      <td><?php echo $rows['class']; ?></td>
                      <td><?php echo $rows['course']; ?></td>
                    </tr> 
                    <?php
                      }
                    ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 JE Campus Admin.</strong> By Sumitra Sinha M-8250180974.All rights reserved.
  </footer>



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>