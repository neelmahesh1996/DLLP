<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DLLP | Gallery</title>

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
            <h1 class="m-0">Gallery</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
<div class="row">
<div class="col col-md-3 col-lg-3 m-2">
  
</div>


<div class="col col-md-6 col-lg-6 m-2">
  <div class="text-center">
  <h4>Upload Demo Video</h4>
  <form method="post"  id="gallery" enctype="multipart/form-data">
    <div class="form-group">
      <select class="form-control" id="select_course1" name="select_course1" onchange="set_value()">
        <option id="default">select course</option>    

        <?php
              require 'connection.php';

              $con=mysqli_connect($host,$username,$password,$dbname);

              if($con === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
               }
              else
              {
              //echo "connection  success";

              $sql="select * from course";
              $result = $con->query($sql);

              $result = $con->query($sql);

             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
              $id=$row["course_id"];
              $dr=$row["course_duration"];
              $fs=$row["course_fees"];
              $c_name=$row["course_name"];
        ?>

         
        
        <option id="<?php echo $id?>"><?php echo $c_name?></option>


      
        
        <?php


             }
           }
           else
           {
            ?>
             <option>No Course Available</option>

            
<?php

         }

       }

        ?>
      </select>
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control" name="gallery_title" id="gallery_title" placeholder="video/document/pdf title"> 
    </div>
    <div class="form-group mb-3">
      <textarea class="form-control" rows="4" id="gallery_description" name="gallery_description" placeholder="video/document/pdf short description"></textarea>
    </div>
    <div class="form-group mb-3">
      <input type="file" class="form-control" name="gallery_file" id="gallery_file"> 
    </div>

    <div class="text-center">
      <input type="button" class="btn btn-success btn-sm" value="Upload video" onclick="upload_lecture()">
       <input type="button" class="btn btn-success btn-sm" value="Upload Document/PDF" onclick="upload_document()">
       <input type="button" class="btn btn-success btn-sm" value="Upload Demo video" onclick="upload_demo()">
    </div>
     
    <input type="hidden" name="course_id" id="course_id">
  </form>
</div>
</div>



        </div>
                <!-- /.direct-chat-pane -->
              </div>
              </div>
       </section>       <!-- /.card-body -->
   <script type="text/javascript">

    function set_value()
    {
       
      var sc=document.getElementById("select_course1");
      var id=sc.options[sc.selectedIndex].id;
      document.getElementById("course_id").value=id;
      //alert(id);
    }

     function upload_lecture()
     {
       if(document.getElementById("select_course1").value=="select course")
      {
        alert("plese select course name");
      }
      else if(document.getElementById("gallery_title").value=="")
      {
        alert("plese enter video/demo/document title");
      }
      else if(document.getElementById("gallery_description").value=="")
      {
        alert("plese enter video/demo/document description");
      }
      else if(document.getElementById("gallery_file").value=="")
      {
        alert("plese select video/demo/document file to upload");
      }
      else
      {
        var frm=document.getElementById("gallery");
        frm.action="add_lecture_video.php";
        frm.submit();
      }
     }

     function upload_document()
     {
       if(document.getElementById("select_course1").value=="select course")
      {
        alert("plese select course name");
      }
      else if(document.getElementById("gallery_title").value=="")
      {
        alert("plese enter video/demo/document title");
      }
      else if(document.getElementById("gallery_description").value=="")
      {
        alert("plese enter video/demo/document description");
      }
      else if(document.getElementById("gallery_file").value=="")
      {
        alert("plese select video/demo/document file to upload");
      }
      else
      {
        var frm=document.getElementById("gallery");
        frm.action="add_lecture_document.php";
        frm.submit();
      }
     }

     function upload_demo()
     {
       if(document.getElementById("select_course1").value=="select course")
      {
        alert("plese select course name");
      }
      else if(document.getElementById("gallery_title").value=="")
      {
        alert("plese enter video/demo/document title");
      }
      else if(document.getElementById("gallery_description").value=="")
      {
        alert("plese enter video/demo/document description");
      }
      else if(document.getElementById("gallery_file").value=="")
      {
        alert("plese select video/demo/document file to upload");
      }
      else
      {
        var frm=document.getElementById("gallery");
        frm.action="add_lecture_demo.php";
        frm.submit();
      }
     }


     
     
   </script>        

          
          
  </div>
  <!-- /.content-wrapper -->
 <footer class="main-footer text-right">
    <strong>Copyright &copy; 2021 DLLP.</strong>
    All rights reserved.
    
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
</body>
</html>
