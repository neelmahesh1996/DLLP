<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DLLP | Manage Gallery</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    
      <div class="input-group input-group-sm ml-3">
        <input class="form-control " type="text" placeholder="Search" aria-label="Search" id="searchtxt">
        <div class="input-group-append">
          <button class="btn btn-navbar">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Digital Language Portal</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_course.php" class="nav-link active">
                   <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_enquiry.php" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Enquiry</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="manage_meeting.php" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_registration.php" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_fees.php" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Submission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_gallery.php" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Manage Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="course.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Course
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="registration.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Registration
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="gallery.php" class="nav-link">
              <i class="nav-icon fas fa-camera"></i>
              <p>
                Gallery
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="meeting.php" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Meeting
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
                      </ul>
          </li>
                  </ul>
      </nav>
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
            <h1 class="m-0">Manage Gallery</h1>
          </div><!-- /.col -->
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
<div class="row">
      <table class="table">
        <thead>
          <tr>
            <td colspan="7" align="center"><h4>Demo Video List</h4></td>
          </tr>
        <tr class="bg-info text-white" style="font-weight: bold;">
          <td>Video ID</td>
          <td>Upload Date</td>
          <td>course ID</td>
          <td>Video Title</td>
          <td>Video Description</td>
          <td>Store Path</td>
           <td>Status</td>
          <td>Action</td>
          
        </tr>  
        </thead>
        <tbody id="myTable1">
          
          <?php

              require 'connection.php';
              $con=mysqli_connect($host,$username,$password,$dbname);
              if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
               }
              else
              {

              //echo "connection  success";

              $sql="select * from demo_video";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $pid=$row["demo_video_id"];
              
          ?>
          <tr>
          <td><?php echo $row["demo_video_id"]?></td>
          <td><?php echo $row["upload_date"]?></td>
          <td><?php echo $row["course_id"]?></td>
          <td><?php echo $row["video_title"]?></td>
          <td><?php echo $row["video_description"]?></td>
          <td><?php echo $row["video_path"]?></td>
          <td><?php echo $row["status"]?></td>
          <td><input type="button" class="btn btn-sm btn-success" name="" value="Activate" onclick="manage_demo_active('<?php echo $pid?>')"><br>
              <input type="button" class="btn btn-sm btn-danger mt-1" name="" value="De-activate" onclick="manage_demo_deactive('<?php echo $pid?>')">
          </tr>


         <?php
       
             }
           }
           else
           {
            ?>


             <h6 class="text-danger">No Video found</h6>
 
         <?php

         }

       }

       ?>
        </tbody>
       
      </table>



      <table class="table mt-5">
        <thead>
          <tr>
            <td colspan="7" align="center"><h4>Lecture Video List</h4></td>
          </tr>
        <tr class="bg-info text-white" style="font-weight: bold;">
          <td>Video ID</td>
          <td>Upload Date</td>
          <td>course ID</td>
          <td>Video Title</td>
          <td>Video Description</td>
          <td>Store Path</td>
          <td>Status</td>
          <td>Action</td>
          
        </tr>  
        </thead>
        <tbody id="myTable2">
          
          <?php

              require 'connection.php';
              $con=mysqli_connect($host,$username,$password,$dbname);
              if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
               }
              else
              {

              //echo "connection  success";

              $sql="select * from lecture_video";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $pid=$row["lecture_video_id"];
              
          ?>
          <tr>
          <td><?php echo $row["lecture_video_id"]?></td>
          <td><?php echo $row["upload_date"]?></td>
          <td><?php echo $row["course_id"]?></td>
          <td><?php echo $row["video_title"]?></td>
          <td><?php echo $row["video_description"]?></td>
          <td><?php echo $row["video_path"]?></td>
          <td><?php echo $row["status"]?></td>
          <td><input type="button" class="btn btn-sm btn-success" name="" value="Activate" onclick="manage_lecture_active('<?php echo $pid?>')"><br>
              <input type="button" class="btn btn-sm btn-danger mt-1" name="" value="De-activate" onclick="manage_lecture_deactive('<?php echo $pid?>')">
          </tr>


         <?php
       
             }
           }
           else
           {
            ?>


             <h6 class="text-danger">No Video found</h6>
 
         <?php

         }

       }

       ?>
        </tbody>
      </table>


      <table class="table mt-5">
        <thead>
          <tr>
            <td colspan="7" align="center"><h4>Document/Pdf List</h4></td>
          </tr>
        <tr class="bg-info text-white" style="font-weight: bold;">
          <td>Document ID</td>
          <td>Upload Date</td>
          <td>course ID</td>
          <td>Document Title</td>
          <td>Document Description</td>
          <td>Store Path</td>
          <td>Status</td>
          <td>Action</td>
          
        </tr>  
        </thead>
        <tbody id="myTable3">
          
          <?php

              require 'connection.php';
              $con=mysqli_connect($host,$username,$password,$dbname);
              if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
               }
              else
              {

              //echo "connection  success";

              $sql="select * from course_document";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $pid=$row["document_id"];
              
          ?>
          <tr>
          <td><?php echo $row["document_id"]?></td>
          <td><?php echo $row["upload_date"]?></td>
          <td><?php echo $row["course_id"]?></td>
          <td><?php echo $row["document_title"]?></td>
          <td><?php echo $row["document_description"]?></td>
          <td><?php echo $row["document_path"]?></td>
          <td><?php echo $row["status"]?></td>
          <td><input type="button" class="btn btn-sm btn-success" name="" value="Activate" onclick="manage_document_active('<?php echo $pid?>')"><br>
              <input type="button" class="btn btn-sm btn-danger mt-1" name="" value="De-activate" onclick="manage_document_deactive('<?php echo $pid?>')">
          </tr>


         <?php
       
             }
           }
           else
           {
            ?>


             <h6 class="text-danger">No Documents found</h6>
 
         <?php

         }

       }

       ?>
        </tbody>
      </table>

</div>

      
</div>
       </section>       <!-- /.card-body -->
           

          
  </div>
  <!-- /.content-wrapper -->
<form method="post" action="demo_status.php" id="updateform_demo">
  <input type="hidden" name="pid" id="pid">
  <input type="hidden" name="actionid" id="actionid">
  <input type="hidden" name="actiontable" id="actiontable">

</form>

<form method="post" action="lecture_status.php" id="updateform_lecture">
  <input type="hidden" name="pid" id="pid1">
  <input type="hidden" name="actionid" id="actionid1">
  <input type="hidden" name="actiontable" id="actiontable1">

</form>

<form method="post" action="document_status.php" id="updateform_document">
  <input type="hidden" name="pid" id="pid2">
  <input type="hidden" name="actionid" id="actionid2">
  <input type="hidden" name="actiontable" id="actiontable2">

</form>
  


 

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
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

<script type="text/javascript">
    function manage_demo_active(pid)
    {
      //alert(pid);
      document.getElementById('pid').value=pid;
      document.getElementById('actionid').value="Active";
      document.getElementById('actiontable').value="main";
      var frm=document.getElementById('updateform_demo');
      frm.submit();
    }

    function manage_demo_deactive(pid)
    {

      document.getElementById('pid').value=pid;
      document.getElementById('actionid').value="Deactive";
      document.getElementById('actiontable').value="main";
      var frm=document.getElementById('updateform_demo');
      frm.submit();
    }
    
    
    
    
    
    
     function manage_lecture_active(pid)
    {
      //alert(pid);
      document.getElementById('pid1').value=pid;
      document.getElementById('actionid1').value="Active";
      document.getElementById('actiontable1').value="main";
      var frm=document.getElementById('updateform_lecture');
      frm.submit();
    }

    function manage_lecture_deactive(pid)
    {

      document.getElementById('pid1').value=pid;
      document.getElementById('actionid1').value="Deactive";
      document.getElementById('actiontable1').value="main";
      var frm=document.getElementById('updateform_lecture');
      frm.submit();
    }
    
    
    
    
     function manage_document_active(pid)
    {
      //alert(pid);
      document.getElementById('pid2').value=pid;
      document.getElementById('actionid2').value="Active";
      document.getElementById('actiontable2').value="main";
      var frm=document.getElementById('updateform_document');
      frm.submit();
    }

    function manage_document_deactive(pid)
    {

      document.getElementById('pid2').value=pid;
      document.getElementById('actionid2').value="Deactive";
      document.getElementById('actiontable2').value="main";
      var frm=document.getElementById('updateform_document');
      frm.submit();
    }

  </script>
<script>
            $(document).ready(function(){
  $("#searchtxt").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

    $("#myTable2 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

    $("#myTable3 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

  });
});
           </script>

</body>
</html>
