<?php
$testid=$_GET['testid'];
$question_id=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DLLP | Add Questions</title>

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
            <h1 class="m-0">Add Questions</h1>
          </div><!-- /.col -->
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
<div>  
<form id="addquestion" method="post" action="save_question.php">  

          <?php

              require 'connection.php';
              $con=mysqli_connect($host,$username,$password,$dbname);
              if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
              //echo "error connection";
               }
              else
              {

              //echo "connection  success";

                $sql1="select * from question where test_id=$testid";
              $result1 = $con->query($sql1);
             if ($result1->num_rows > 0) {

            while($row1 = $result1->fetch_assoc()) 
              {
                $question_id=$question_id+1;

              }
                }

              $question_id=$question_id+1;

              //echo $question_id;

              $sql="select * from test where test_id=$testid";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $qno=$row["no_of_question"];

              
          ?>
          <div class="pb-2 bg-white border border-dark text-center">
            <input type="hidden" name="qesno" id="qesno" value="<?php echo $qno ?>">
            <input type="hidden" name="testid"  value="<?php echo $testid ?>">
            <p><b><?php echo $row["exam_title"]?></b></p>
            <p><b>Subject Name :<?php echo $row["subject_name"]?>&nbsp;&nbsp;&nbsp;
            Number Of Question :<?php echo $row["no_of_question"]?><br>
            Total Marks :<?php echo $row["total_marks"]?>&nbsp;&nbsp;&nbsp;
            Exam Time :<?php echo $row["exam_timing"]?>&nbsp;Hour</b></p>
          </div>
          
          <div>

            <div class="m-2 border p-3" style="background-color: #D5D8DC;">
               <b>Question No. <?php echo $question_id ?></b>
              <div class="form-group">
                <textarea class="form-control" rows="3" id="question" name="question"></textarea>
              </div>
              <div class="row">

              <div class="form-group col col-lg-5 col-md-5">
                <b>A</b><input type="text" class="form-control" id="option_a" name="option_a">
              </div>
              <div class="form-group col col-lg-5 col-md-5">
                <b>B</b><input type="text" class="form-control" id="option_b" name="option_b">
              </div>
              <div class="form-group col col-lg-5 col-md-5">
                <b>C</b><input type="text" class="form-control" id="option_c" name="option_c">
              </div>
              <div class="form-group col col-lg-5 col-md-5">
                <b>D</b><input type="text" class="form-control" id="option_d" name="option_d">
              </div>

            </div>

            <div class="row">

              <div class="form-group col col-lg-2 col-md-2">
                <label>Answer</label>
                <input type="text" class="form-control" id="answer" name="answer">
              </div>
              <div class="form-group col col-lg-2 col-md-2">
                <label>Mark</label>
                <input type="number" class="form-control" id="mark" name="mark">
              </div>
              

            </div>
             
            </div>

            
            <div class="text-right">
           <input type="button" class="btn btn-sm btn-success" name="" value="save and next" onclick="add_question()">
              </div>
          </div>  
         <?php
       
             }
           }
           else
           {
            ?>
            <h6>no quetion to added</h6>

             
 
         <?php

         }

       }

       ?>

   </form>    
</div>

      
</div>
       </section>       <!-- /.card-body -->
           

          
  </div>
  <!-- /.content-wrapper -->

  


 

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
    function add_question()
    {
          if(document.getElementById("question").value=="")
          {
            alert("Please type question ");
          }
          else if(document.getElementById("option_a").value=="")
          {
            alert("Please type option A ");
          }
          else if(document.getElementById("option_b").value=="")
          {
            alert("Please type option B ");
          }
          else if(document.getElementById("option_c").value=="")
          {
            alert("Please type option C ");
          }
          else if(document.getElementById("option_d").value=="")
          {
            alert("Please type option D ");
          }
          else if(document.getElementById("answer").value=="")
          {
            alert("Please type answer");
          }
          else if(document.getElementById("mark").value=="")
          {
            alert("Please type mark ");
          }
          else
          {
             var frm=document.getElementById("addquestion");
            frm.submit();
          }
      
      
      
    }

    
  </script>
<script>
            $(document).ready(function(){
  $("#searchtxt").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
           </script>

</body>
</html>
