
<!DOCTYPE html>
<html>
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
  
  <link href="appcss/assets/css/preload.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");
	});	
    </script>  
    
    
    </head>
    <body>
        
        <!-- <div class="se-pre-con text-center">
            <div class="spinner-border text-warning " style="margin-top: 50%"></div>
        </div> -->
        
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="msg"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>  
        </div>
        </div>
        </div>

        <div class="container">
        <div class="pt-5 pb-5">
            <div class="text-center">
                <img src="user-plus.svg" height="150" width="150"></img>
            </div>
            <p class="mt-2">New Registration</p>
            <form method="post" action="new_register.php" id="registration_form">
<div class="row">

<div class="col">
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
      <input type="text" class="form-control" name="username" id="username" placeholder="username/ mobile no /email">
    </div>
    <div class="form-group mb-3">
      <input type="password" class="form-control" name="password" id="password" placeholder="password">
    </div>
    <div class="form-group mb-3">
     <textarea class="form-control" name="address" id="address" rows="5" placeholder="address"></textarea>
    </div>
</div>
</div>

<div class="row">
<div class="col">
    
    
      <h6>Select courses</h6>

  <table class="table">
  <tr>
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
  
    <!-- <div class="form-group mb-3">
      <input type="text" class="form-control" name="duration" id="duration" placeholder="course duration">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control" name="fee" id="fee" placeholder="course fees">
    </div> -->
    

    


    
    




    
  
</div>
</div>
</div>
        </div>
        </form>
            
            <footer id="footer" class="pt-5 mb-3">
            
          <div class="container m-0">   
              
	  <table align="center" style="width:100%;">
          <tr>
	  <td align="left"><a href="forgetpassword.php" class="btn btn-info"><span style="font-size:12px;color:#000000;font-weight: bold;">Forget Password<span></a></td>
          <td align="right"><a href="#" class="btn btn-info" onclick="new_register()"><span  style="font-size:12px;color:#000000;font-weight: bold;">Register Now<span></a></td>
       	  </tr>
	  </table>

	  </div>
            
  </footer><!-- End #footer -->
        </div>
        
        </div> 
        
        <script>

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
       
         document.getElementById("msg").innerHTML="please enter student name";
        $('#myModal').modal('show');
      }
      else if(document.getElementById("mobile").value=="")
      {
        
        document.getElementById("msg").innerHTML="plese enter mobile number";
        $('#myModal').modal('show');
      }
      else if(document.getElementById("email").value=="")
      {
       
        document.getElementById("msg").innerHTML="plese enter email ID";
        $('#myModal').modal('show');
      }
      else if(document.getElementById("qualification").value=="")
      {
        
        document.getElementById("msg").innerHTML="plese enter qualification details";
        $('#myModal').modal('show');
      }
      else if(document.getElementById("username").value=="")
      {
        
        document.getElementById("msg").innerHTML="plese enter username";
        $('#myModal').modal('show');
      }
      else if(document.getElementById("password").value=="")
      {
        
        document.getElementById("msg").innerHTML="plese enter password";
        $('#myModal').modal('show');
      }
      else if(document.getElementById("address").value=="")
      {
        
        document.getElementById("msg").innerHTML="plese enter full address";
        $('#myModal').modal('show');
      }
      else
      {

        var frm=document.getElementById("registration_form");
        frm.submit();
      }
     }


        </script>   
<script src="appcss/assets/vendor/jquery/jquery.min.js"></script>
  <script src="appcss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="appcss/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="appcss/assets/vendor/php-email-form/validate.js"></script>
  <script src="appcss/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="appcss/assets/vendor/venobox/venobox.min.js"></script> 
  <!-- <%
      
      if(re!=null)
      {
          if(re.equals("1"))
          {
         %>
         <script>
             document.getElementById("msg").innerHTML="Login Failed";
             $('#myModal').modal('show');
         </script>
         <% 
          }
          
          if(re.equals("2"))
          {
           %>
         <script>
             document.getElementById("msg").innerHTML="Successfully Register to veggies station";
             $('#myModal').modal('show');
         </script>
         <%    
          }
          if(re.equals("3"))
          {
           %>
         <script>
             document.getElementById("msg").innerHTML="Password reset Successfully ";
             $('#myModal').modal('show');
         </script>
         <%    
          }
          if(re.equals("4"))
          {
           %>
         <script>
             document.getElementById("msg").innerHTML="Password Not reset try again";
             $('#myModal').modal('show');
         </script>
         <%    
          }
          if(re.equals("5"))
          {
           %>
         <script>
             document.getElementById("msg").innerHTML="Incorrect Email Id or Mobile";
             $('#myModal').modal('show');
         </script>
         <%    
          }
      }
      
      re="";
      %> -->
    </body>
</html>
