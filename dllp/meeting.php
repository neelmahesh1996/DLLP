
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


        <form id="single" method="post" action="app_product_info.jsp">
            <input type="hidden" id="regid1" name="regid" value="<%=regid%>">
            <input type="hidden" id="pid1" name="pid">
        </form>
        <form id="combo" method="post" action="app_product_info_combo.jsp">
            <input type="hidden" id="regid2" name="regid" value="<%=regid%>">
            <input type="hidden" id="pid2" name="pid">
        </form>

        



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
                <caption class="mt-3">Meeting Notification</caption>
                <div>

                    <?php
                    
                            require 'connection.php';
                             $con=mysqli_connect($host,$username,$password,$dbname);
                            if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
              ?>
                <h3>No meeting available</h3>

              <?php
               }
              else
              {

              //echo "connection  success";

              $sql="select * from fees where registration_id=".$rid." AND status='Paid'";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $cid=$row["course_id"];

                    $sql1="select * from course_meeting where course_id=".$cid." AND status='Active' order by meeting_id desc";
                  $result1 = $con->query($sql1);
                 if ($result1->num_rows > 0) {

                while($row1 = $result1->fetch_assoc()) 
                  {


                

                        ?>
                        
                       <div class="mt-2 pt-2" style="background-color: white;">
        <h6 class="" align="center"><?php echo $row1["course_name"] ?></h6>
        <p class="pl-2 pb-4"> <b>Date: <?php echo $row1["meeting_date"]?> <br>
            Time : <?php echo $row1["meeting_time"]?><br>
            Meeting ID : <?php echo $row1["meeting_zoomid"]?><br>
            Meeting Password : <?php echo $row1["meeting_password"] ?></b><br>
            Meeting Link : <a href="<?php echo $row1["meeting_link"] ?>" class="text-primary"><u>Click here to join the Meetting</u></a>
        </p>     
    </div>
                    <?php
                }
            }

             }
           }
           else
           {
            ?>


             <h3>No meeting available</h3>
 
         <?php

         }

       }

       ?>
    
   

                
                
            </div>    

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="fixed-bottom" style="background-color: #D35400;">
            <div class="container">
                <table align="center" style="width:100%;font-size:20px;">
                    <tr align=center>
                        <td><a href="index.php?rid=<?php echo $rid ?>"><i class="icofont-home pl-1 "><span style="font-size:12px;"><p class="f">Home</p></span></i></a></td>
                        <td><a href="meeting.php?rid=<?php echo $rid ?>"><i class="icofont-video pl-1 active"><span class="pt-0" style="font-size:12px;"><p class="f">Meeting</p></span></i></a></td>
                        <td><a href="media.php?rid=<?php echo $rid ?>"><i class="icofont-youtube-play pl-1"><span style="font-size:12px;"><p class="f">Media</p></span></i></a></td>
                        <td><a href="documents.php?rid=<?php echo $rid ?>"><i class="icofont-folder-open pl-1"><span style="font-size:12px;"><p class="f">Document</p></span></i></a></td>
                        <td><a href="profile.php?rid=<?php echo $rid ?>"><i class="icofont-user pl-1"><span style="font-size:12px;"><p class="f">My Profile</p></span></i></a></td>
                       
                    </tr>
                </table>

            </div>
        </footer><!-- End #footer -->



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