
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
                        $resultid=$_REQUEST['resultid'];

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
                <caption class="mt-3">Available Result</caption>
                <div>


                    <?php
                    
                            require 'connection.php';
                             $con=mysqli_connect($host,$username,$password,$dbname);
                            if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
              ?>
                <h6>No answer sheet available</h6>

              <?php
               }
              else
              {

              //echo "connection  success";
$cntr=0;

$sanswer="";
$canswer="";
$aselect="";
$bselect="";
$cselect="";
$dselect="";

$daselect="";
$dbselect="";
$dcselect="";
$ddselect="";

$colorb="";
              $sql="select * from result where result_id=".$resultid."";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                
                $sql1="select * from exam where exam_id=".$row["exam_id"]."";
              $result1 = $con->query($sql1);
              $row1 = $result1->fetch_assoc();

              $sql3="select * from saved_answer where exam_id=".$row["exam_id"]." order by save_id";
              $result3 = $con->query($sql3);

              $sql2="select * from question where test_id=".$row1["test_id"]." order by question_id";
              $result2 = $con->query($sql2);
             while($row2 = $result2->fetch_assoc()) 
              {
                if($row3 = $result3->fetch_assoc())
                {
                    $sanswer=$row3["saved_option"];
                    $canswer=$row3["correct_answer"];

                    if($sanswer==$canswer)
                    {
                        $colorb="#2ECC71";

                    }
                    else
                    {
                        $colorb="#EC7063";
                    }

                    if($sanswer=="A")
                    {
                        $aselect="checked";
                        $daselect="background-color:".$colorb;
                    }
                    else if($sanswer=="B")
                    {
                        $bselect="checked";
                        $dbselect="background-color:".$colorb;
                    }
                    else if($sanswer=="C")
                    {
                        $cselect="checked";
                        $dcselect="background-color:".$colorb;
                    }
                    else if($sanswer=="D")
                    {
                        $dselect="checked";
                        $ddselect="background-color:".$colorb;
                    }
                    else
                    {

                    }


                }
                else
                {
                    $sanswer="NA";
                    $canswer="NA";
                }




                $cntr=$cntr+1;
                $oa="oa".$cntr;
                $ob="ob".$cntr;
                $oc="oc".$cntr;
                $od="od".$cntr;
                $qns="qns".$cntr;
                        ?>
                        
                       <div class="pl-2 pt-0 mt-0" style="background-color: white;color: black">
        <p>
            <b>
            <div class="form-group mt-0 pt-0">
                Question <?php echo $cntr ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mark : <?php echo $row2["mark"]?><br><?php echo $row2["question"]?> 
            </div>
            <div class="form-group" style="<?php echo $daselect ?>">
                <input type="radio" name="" id="<?php echo $oa ?>" <?php echo $aselect ?>>A.&nbsp;&nbsp;<?php echo $row2["option_a"]?>
            </div>
            <div class="form-group" style="<?php echo $dbselect ?>">
                <input type="radio" name="" id="<?php echo $ob ?>" <?php echo $bselect ?> >B.&nbsp;&nbsp; <?php echo $row2["option_b"]?>
            </div>
            <div class="form-group" style="<?php echo $dcselect ?>">
                <input type="radio" name="" id="<?php echo $oc ?>" <?php echo $cselect ?> >C.&nbsp;&nbsp; <?php echo $row2["option_c"]?>
            </div>
            <div class="form-group" style="<?php echo $ddselect ?>">
                <input type="radio" name="" id="<?php echo $od ?>" <?php echo $dselect ?> >D.&nbsp;&nbsp; <?php echo $row2["option_d"]?>
            </div>
            <div class="form-group text-center pb-2 pr-2">
                Answer : <?php echo $canswer ?>
            </div>
            <input type="hidden" id="<?php echo $qns ?>" name="<?php echo $qns ?>" value="">
        </b>
        </p>  

    </div>
    <script>
    </script>

                    <?php
                    $sanswer="";
$canswer="";
$aselect="";
$bselect="";
$cselect="";
$dselect="";

$daselect="";
$dbselect="";
$dcselect="";
$ddselect="";

$colorb="";
                }
                }
            }
           else
           {
            ?>


             <h3>No result available</h3>
 
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
                        <td><a href="index.php?rid=<?php echo $rid ?>"><i class="icofont-home pl-1"><span style="font-size:12px;"><p class="f">Home</p></span></i></a></td>
                        <td><a href="meeting.php?rid=<?php echo $rid ?>"><i class="icofont-video pl-1"><span class="pt-0" style="font-size:12px;"><p class="f">Meeting</p></span></i></a></td>
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