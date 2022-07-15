<?php
if(isset($_REQUEST['rid']))
{
    $rid=$_REQUEST['rid'];
}
else
{
    $rid="";
}

?>
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

        <script>
            function showinfo(pid)
            {
                document.getElementById("pid1").value = pid;
                var frm1 = document.getElementById("single");
                frm1.submit();
            }
            function showinfocombo(pid)
            {
                document.getElementById("pid2").value = pid;
                var frm1 = document.getElementById("combo");
                frm1.submit();
            }
        </script>



        <!-- ======= Header ======= -->
        <header id="header" class=" header fixed-top" style="background-color:#D35400">
            <div class="container">

                <div class="logo text-center">
                    <p class="appname">
                        <a class="text-center"><b>DIGITAL LANGUAGE PORTAL</b></a>
                    </p>

                </div>
                <!-- <div class="logo float-right">
                    <p  style="font-size:20px;">
                        
                        <a href="news.jsp" class="notification">
                            <span><i class="icofont-notification pl-2 "></i></span>
                            <span class="badge">2</span>
                        </a>


                    </p>

                </div> -->



                <!-- <nav class="nav-menu float-right d-none d-lg-block">
                    <ul>
                         <li class="active"><a href="index.jsp">Home</a></li>
                         <li><a href="message.jsp">Thoughts</a></li>
                         <li><a href="video.jsp">Media</a></li>  
                         <li><a href="daily.jsp">Daily Thoughts</a></li>  
                         <li><a href="https://api.whatsapp.com/send?phone=+919527343215&text=Type your message">Chat Now</a></li>
                         <li><a href="donation.jsp">Donation</a><hr></li>
                         <li><a href="news.jsp">Events</a></li>
                         <li><a href="about.jsp">About App</a><hr></li>
                         
                    </ul>
                </nav>.nav-menu -->

            </div>

        </header><!-- End #header -->

        <!-- ======= Hero Section ======= -->


        <main id="main">
            <div class="container" >
                <div class="text-center text-dark pb-2">
                    <h3><b>IBMRD College, AHMEDNAGAR </b></h3>
                </div>
                
                 <a href="notification.php?rid=<?php echo $rid ?>" class="float">
                   <!--  <i class="icofont-alarm my-float"></i> -->
                   <img src="alarm.svg" height="28" width="28">
                </a>
                <a href="test.php?rid=<?php echo $rid ?>" class="float1">
                   <!--  <i class="icofont-alarm my-float"></i> -->
                   <img src="tasks.svg" class="myfloat" height="28" width="28">
                </a>

                <a href="result.php?rid=<?php echo $rid ?>" class="float2">
                   <!--  <i class="icofont-alarm my-float"></i> -->
                   <img src="trophy.svg" class="myfloat" height="28" width="28">
                </a>

                <a href="submit_task.php?rid=<?php echo $rid ?>" class="float3">
                   <!--  <i class="icofont-alarm my-float"></i> -->
                   <img src="document-folder.svg" class="myfloat" height="28" width="28">
                </a>
                <a href="view_task.php?rid=<?php echo $rid ?>" class="float4">
                   <!--  <i class="icofont-alarm my-float"></i> -->
                   <img src="diskette.svg" class="myfloat" height="28" width="28">
                </a>
                
                <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        
                        <?php
                            require 'connection.php';
                             $con=mysqli_connect($host,$username,$password,$dbname);
                            if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
              ?>
                <h6>No slide available</h6>
              <?php
               }
              else
              {

              //echo "connection  success";

              $sql="select * from slider where status='Active'";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {
                $id=0;
                $cl="Active";

            while($row = $result->fetch_assoc()) 
              {
                
                if($id==0)
                {
                    $cl="Active";
                }
                else
                    {
                        $cl="";
                }

                        ?>   
                
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $id ?>" class="<?php echo $cl ?>"></li>           
                    <?php

                    $id=$id+1;
                }
            }
           else
           {
            ?>
         <?php

         }

       }

       ?>

                    </ol>
                    <div class="carousel-inner">
<?php
                    
                            require 'connection.php';
                             $con=mysqli_connect($host,$username,$password,$dbname);
                            if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
              ?>
                <h6>No slider available</h6>

              <?php
               }
              else
              {

              //echo "connection  success";

              $sql="select * from slider where status='Active'";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {
                
                $id=0;
                $cl="carousel-item active";

            while($row = $result->fetch_assoc()) 
              {
                 $path="controller/slider/".$row["image_path"];
                  if($id==0)
                {
                    $cl="carousel-item active";
                }
                else
                    {
                        $cl="carousel-item";
                }


                        ?>
                        <div class="<?php echo $cl ?>">
                            <img class="d-block w-100" src="<?php echo $path ?>" alt="slide">
                        </div>
                    <?php

                    $id=$id+1;
                }
            }
           else
           {

         }

       }

       ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

               <div class="bg-warning text-center text-white">
    <caption class="mt-3"><b>Demo Video</b></caption>
</div>
                <table class="table" style="width:100%;table-layout:fixed;background:#f2f2f2;">
                    
                    
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

              $sql="select * from demo_video where status='Active' order by demo_video_id desc";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $path="controller/demo_video/".$row["video_path"];

                        ?>
                        <tr align="center"  style="border-bottom:3px;border-color:#f2f2f2;">
                        <td  style="width:50%;height:150px;background:white;border-right:3px solid ;border-bottom:3px solid ;border-color:#f2f2f2;">
                            <div class="px-2 py-1" style="border:0px solid; width:100%;height:100%">
                               <video width="300"  controls>
                                   <source src="<?php echo $path ?>" type="video/mp4">     
                               </video> 
                        </td>
                       </tr>
                    <?php

             }
           }
           else
           {
            ?>

           
             <h3>No Video found</h3>
 
         <?php

         }

       }

       ?>
                </table>
<div class="bg-warning text-center text-white">
    <caption class="mt-3"><b>Our Courses</b></caption>
</div>
    
                <table class="table" style="width:100%;table-layout:fixed;background:white;">
                    <tr class="bg-info text-white">
                        <th width="60">#</th>
                        <th>Course Name</th>
                        <th>Course Fee</th>
                    </tr>
                    
                    
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

              $sql="select * from course where status='Active'";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                

                        ?>
                        <tr>
                        <td class="text-danger">
                            <?php echo $row["course_id"] ?>
                        </td>
                        <td class="text-primary">
                            <?php echo $row["course_name"] ?>
                        </td>
                        <td class="text-primary">
                            <?php echo $row["course_fees"] ?>
                        </td>
                       </tr>
                    <?php

             }
           }
           else
           {
            ?>

           
             <h3>No Course found</h3>
 
         <?php

         }

       }

       ?>
                </table>            


                
            </div>


        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="fixed-bottom" style="background-color: #D35400;">
            <div class="container">
                <table align="center" style="width:100%;font-size:20px;">
                    <tr align=center>
                        <td><a href="index.php?rid=<?php echo $rid ?>"><i class="icofont-home pl-1 active"><span style="font-size:12px;"><p class="f">Home</p></span></i></a></td>
                        <td><a href="meeting.php?rid=<?php echo $rid ?>"><i class="icofont-video pl-1"><span class="pt-0" style="font-size:12px;"><p class="f">Meeting</p></span></i></a></td>
                        <td><a href="media.php?rid=<?php echo $rid ?>"><i class="icofont-youtube-play pl-1"><span style="font-size:12px;"><p class="f">Media</p></span></i></a></td>
                        <td><a href="documents.php?rid=<?php echo $rid ?>"><i class="icofont-folder-open pl-1"><span style="font-size:12px;"><p class="f">Document</p></span></i></a></td>
                        <td><a href="profile.php?rid=<?php echo $rid ?>"><i class="icofont-user pl-1"><span style="font-size:12px;"><p class="f">My Profile</p></span></i></a></td>
                       
                    </tr>
                </table>

            </div>
        </footer><!-- End #footer -->

<style type="text/css">
  .float{
  position:fixed;
  width:40px;
  height:40px;
  top:60px;
  right:10px;
  background-color:#FF5733;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  z-index: 2;
}

.float1{
  position:fixed;
  width:40px;
  height:40px;
  top:110px;
  right:10px;
  background-color:#2ECC71;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  z-index: 2;
}

.float2{
  position:fixed;
  width:40px;
  height:40px;
  top:170px;
  right:10px;
  background-color:orange;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  z-index: 2;
}

.float3{
  position:fixed;
  width:40px;
  height:40px;
  top:230px;
  right:10px;
  background-color:skyblue;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  z-index: 2;
}

.float4{
  position:fixed;
  width:40px;
  height:40px;
  top:290px;
  right:10px;
  background-color:#2ECC71;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  z-index: 2;
}

.myfloat
{
  margin-top: 5px;
}

</style>

        <!-- Vendor JS Files -->
        <script src="appcss/assets/vendor/jquery/jquery.min.js"></script>
        <script src="appcss/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="appcss/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="appcss/assets/vendor/php-email-form/validate.js"></script>
        <script src="appcss/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="appcss/assets/vendor/venobox/venobox.min.js"></script>

        <!-- Template Main JS File -->
        <!-- <script src="appcss/assets/js/main.js"></script>
        

            if (re != null) {
                if (re.equals("1")) {
        
        <script>
                                   document.getElementById("msg").innerHTML = "Order place successfully";
                                   $('#myModal').modal('show');
        </script>
        <%
            }

            if (re.equals("2")) {
        %>
        <script>
            document.getElementById("msg").innerHTML = "Something wrong try again";
            $('#myModal').modal('show');
        </script>
        <%
            }
            if (re.equals("3")) {
        %>
        <script>
            document.getElementById("msg").innerHTML = "Something wrong try again";
            $('#myModal').modal('show');
        </script>
        <%
                }

            }

            re = "";
        %> -->
    </body>

</html>