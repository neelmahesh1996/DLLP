
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="appcss/assets/img/favicon.png" rel="icon">
        <link href="appcss/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="appcss/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="appcss/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="appcss/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="appcss/assets/vendor/venobox/venobox.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="appcss/assets/css/style.css" rel="stylesheet">

        <link href="appcss/assets/css/preload.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
        <script>
            $(window).load(function () {
                $(".se-pre-con").fadeOut("slow");
            });
        </script>  

    </head>

    <body>

                <?php

                    if(isset($_REQUEST['rid']))
                    {
                        $rid=$_REQUEST['rid'];

                        if($rid=="")
                        {
                          header('Location:user_login.php');
                          exit;  
                        }
                    }
                    else
                    {
                       header('Location:user_login.php');
                        exit; 
                        
                    }

                ?>
        <!-- <div class="se-pre-con text-center">
            <div class="spinner-border text-warning " style="margin-top: 50%"></div>
        </div> -->

        <div id="myModal" class="modal fade">
            <div class="modal-dialog pr-3">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="msg"></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>  
                </div>
            </div>
        </div>



        



        <!-- ======= Header ======= -->
        <header id="header" class=" header fixed-top" style="background-color:#D35400">
            <div class="container">

                <div class="logo text-center">
                    <p class="appname">
                        <a class=" mr-3"><b>DIGITAL LANGUAGE PORTAL</b></a>
                    </p>

                </div>
                

            </div>

        </header><!-- End #header -->

        <!-- ======= Hero Section ======= -->


        <main id="main">
            <div class="container" >
                <caption class="mt-3">Add More Courses</caption>
                <div class="bg-white">

                   <form method="post" action="update_course.php" id="registration_form">
<div class="row">
<div class="col">
    <input type="hidden" name="rid" id="rid" value="<?php echo $rid ?>">

  <table class="table">
  <tr class="bg-info text-white">
    <th>#</th>
    <th>Course Name</th>
    <th>Fee</th>
    <!--  <th>Course Duration</th> -->
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
       <!--  <td><?php echo $dr?></td> -->
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

  
    <div class="form-group mb-5 mr-2 text-right">
      <a href="#" class="btn btn-info text-white" onclick="new_register()"><span  style="font-size:12px;font-weight: bold;">Save and Procced<span></a>
    </div>
    
    

    


    
    




    
  
</div>
</div>
</div>
        </div>
        </form>
                
            </div>    

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="fixed-bottom" style="background-color: #D35400;">
            <div class="container">
                <table align="center" style="width:100%;font-size:20px;">
                    <tr align=center>
                        <td><a href="index.php?rid=<?php echo $rid ?>"><i class="icofont-home pl-1 "><span style="font-size:12px;"><p class="f">Home</p></span></i></a></td>
                        <td><a href="meeting.php?rid=<?php echo $rid ?>"><i class="icofont-video pl-1"><span class="pt-0" style="font-size:12px;"><p class="f">Meeting</p></span></i></a></td>
                        <td><a href="media.php?rid=<?php echo $rid ?>"><i class="icofont-youtube-play pl-1"><span style="font-size:12px;"><p class="f">Media</p></span></i></a></td>
                        <td><a href="documents.php?rid=<?php echo $rid ?>"><i class="icofont-folder-open pl-1"><span style="font-size:12px;"><p class="f">Document</p></span></i></a></td>
                        <td><a href="profile.php?rid=<?php echo $rid ?>"><i class="icofont-user pl-1"><span style="font-size:12px;"><p class="f">My Profile</p></span></i></a></td>
                       
                    </tr>
                </table>

            </div>
        </footer><!-- End #footer -->
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
        var frm=document.getElementById("registration_form");
        frm.submit();

     }
        </script>


        <!-- Vendor JS Files -->
        <script src="appcss/assets/vendor/jquery/jquery.min.js"></script>
        <script src="appcss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="appcss/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="appcss/assets/vendor/php-email-form/validate.js"></script>
        <script src="appcss/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="appcss/assets/vendor/venobox/venobox.min.js"></script>

        <!-- Template Main JS File -->
        <script src="appcss/assets/js/main.js"></script>
        

           
    </body>

</html>