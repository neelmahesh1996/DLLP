
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
                <img src="lock.svg" height="150" width="150"></img>
            </div>
            
            <form class="mt-5" id="loginform" method="post" action="update_password.php">
                
                
                <div class="input-group mb-2 px-2">
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="icofont-mobile-phone"></i></div>
                </div>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="register mobile number">
                </div>
                <div class="input-group mb-2 px-2">
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="icofont-email"></i></div>
                </div>
                    <input type="text" class="form-control" id="email" name="email" placeholder="register email id">
                </div>
                <div class="input-group mb-2 px-2">
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="icofont-key"></i></div>
                </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="new password">
                </div>
                <div class=" mb-2 px-2 py-3">
                    <input type="button"  class="form-control btn btn-info"  value="CHANGE PASSWORD" onclick="check()" style=";color:white;font-weight: bold">
                </div>
                
            </form>
            
            <footer id="footer" class="pt-5 mb-3">
            
          <div class="container m-0">   
              
	  <table align="center" style="width:100%;">
          <tr>
	  <td align="left"><a href="registration.php" class="btn btn-info"><span style="font-size:12px;color:#000000;font-weight: bold;">CREATE ACCOUNT<span></a></td>
          <td align="right"><a href="user_login.php" class="btn btn-info"><span  style="font-size:12px;color:#000000;font-weight: bold;">LOGIN NOW<span></a></td>
       	  </tr>
	  </table>

	  </div>
            
  </footer><!-- End #footer -->
        </div>
        
        </div> 
        
        <script>
            function check()
            {
                var mobile=document.getElementById("mobile").value;
                var email=document.getElementById("email").value;
                var password=document.getElementById("password").value;
                if(mobile=="")
                {
                     document.getElementById("msg").innerHTML="Please Enter register mobile no";
                     $('#myModal').modal('show');
                }
                else if(email=="")
                {
                     document.getElementById("msg").innerHTML="Please Enter register email id";
                     $('#myModal').modal('show');
                }
                else if(password=="")
                {
                    document.getElementById("msg").innerHTML="Please Enter new Password";
                     $('#myModal').modal('show');
                }
                else
                {
                    var frm=document.getElementById("loginform");
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
