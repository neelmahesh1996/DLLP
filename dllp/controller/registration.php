<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DLLP | Registration</title>

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
            <h1 class="m-0">Registration</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <h6>New Registration</h6>
        <form method="post" action="new_register.php" id="registration_form">
<div class="row">

<div class="col col-md-5 col-lg-5 m-2">
  <input type="hidden" name="mp_id" id="mp_id">
      <div class="form-group mb-3">
      <input type="text" class="form-control" name="name" id="name" placeholder="student  name">
    </div>
     <div class="form-group mb-3">
      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile number">
    </div>
     <div class="form-group mb-3">
      <input type="text" class="form-control" name="email" id="email" placeholder="email ID">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control" name="qualification" id="qualification" placeholder="qualification /degree eg BCA">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control" name="username" id="username" placeholder="username">
    </div>
    <div class="form-group mb-3">
      <input type="password" class="form-control" name="password" id="password" placeholder="password">
    </div>
    <div class="form-group mb-3">
     <textarea class="form-control" name="address" id="address" rows="5" placeholder="address"></textarea>
    </div>
</div>



<div class="col col-md-5 col-lg-5 m-2">
    
    
      <h6>Select courses</h6>

  <table class="table">
  <tr>
    <th>#</th>
    <th>Course Name</th>
    <th>Course Fee</th>
     <th>Course Duration</th>
  </tr>


      <!--select class="form-control" id="select_course1" name="select_course1" onchange="set_value()">
        <option id="default">select course</option-->    

        <?php
              require 'connection.php';

              $con=mysqli_connect($host,$username,$password,$dbname);

              if($con === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
               }
              else
              {
              //echo "connection  success";

              $sql="select * from course where status='Active'";
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

         
        
       <!--  <option id="<?php //echo $id?>"><?php //echo $c_name?></option> -->
       <tr>
        <td><input type="checkbox" class="form-control-sm" id="<?php echo $id?>" name="<?php echo $id?>" value="unchecked" onclick="set_check_value(<?php echo $id?>)"></td>
        <td><?php echo $c_name?></td>
        <td><?php echo $fs?></td>
        <td><?php echo $dr?></td>
       </tr>
       <!-- <input type="checkbox" class="form-control-sm" id="<?php //echo $id?>" name="<?php //echo $id?>" value="uc" onclick="set_check_value(<?php //echo $id?>)">&nbsp;<?php //echo $c_name?><?php //echo $fs?>&nbsp;
       &nbsp; -->


      
        
        <?php


             }
           }
           else
           {
            ?>
             <!-- <option> -->No Course Available<!-- </option> -->

            
<?php

         }

       }

        ?>
      </table>
  
    <!-- <div class="form-group mb-3">
      <input type="text" class="form-control" name="duration" id="duration" placeholder="course duration">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control" name="fee" id="fee" placeholder="course fees">
    </div> -->
    

    


    <div class="text-right">
      <input type="button" class="btn btn-success btn-sm" value="Save And Proceed" onclick="new_register()">
    </div>
    




    
  
</div>
</div>
        </div>
        </form>
                <!-- /.direct-chat-pane -->
              </div>
       </section>       <!-- /.card-body -->
       

           

   <script type="text/javascript">
    

    function set_check_value(ckid)
    {
      //alert(ckid);
      var c=document.getElementById(ckid);
      //alert(c);
      //alert(c.checked);
      if(c.checked==true)
      {
        c.value="checked";
      }
      else
      {
        c.value="unchecked";
      }

      //alert(document.getElementById(ckid).value);
    }
    

    
     function new_register()
     {
      //alert("call ok");
      if(document.getElementById("name").value=="")
      {
        alert("please enter student name");
      }
      else if(document.getElementById("mobile").value=="")
      {
        alert("plese enter mobile number");
      }
      else if(document.getElementById("email").value=="")
      {
        alert("plese enter email ID");
      }
      else if(document.getElementById("qualification").value=="")
      {
        alert("plese enter qualification details");
      }
      else if(document.getElementById("username").value=="")
      {
        alert("plese enter username");
      }
      else if(document.getElementById("password").value=="")
      {
        alert("plese enter password");
      }
      else if(document.getElementById("address").value=="")
      {
        alert("plese enter full address");
      }
      else
      {

        var frm=document.getElementById("registration_form");
        $('#duration').attr("disabled",false);
        $('#fee').attr("disabled",false);
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
