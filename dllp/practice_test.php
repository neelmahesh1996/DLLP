
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
                        $testid=$_REQUEST['testid'];
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
            <div class="modal-dialog pr-3 ">
                <div class="modal-content bg-success text-white">
                    <div class="modal-header">
                        <h6 class="modal-title" id="msg"></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>  
                </div>
            </div>
        </div>
        <div id="myModal1" class="modal fade">
            <div class="modal-dialog pr-3">
                <div class="modal-content bg-danger text-white">
                    <div class="modal-header">
                        <h6 class="modal-title" id="msg1"></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>  
                </div>
            </div>
        </div>
        <div id="myModal2" class="modal fade">
            <div class="modal-dialog pr-3">
                <div class="modal-content bg-info text-white">
                    <div class="modal-header">
                        <h6 class="modal-title" id="msg2"></h6>

                        
                        <button class="btn btn-sm btn-success" onclick="modelyes()">YES</button>
                        <button class="btn btn-sm btn-warning text-white" data-dismiss="modal" aria-hidden="true">NO</button>
                        
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
                <form method="post" id="formtest">
                <div>


                    <?php
                    
                            require 'connection.php';
                             $con=mysqli_connect($host,$username,$password,$dbname);
                            if($con === false)
              {
              die("ERROR: Could not connect. " . mysqli_connect_error());
              ?>
                <h6>No test available</h6>

              <?php
               }
              else
              {

              //echo "connection  success";

              $sql="select * from test where test_id=$testid";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $link="start_exam.php?rid=".$rid."&testid=".$row["test_id"];
                $time=(float)$row["exam_timing"];
                $minut=$time*60.0*60;
                        ?>
                        <input type="hidden" name="timem" id="timem" value="<?php echo $minut ?>">
                       <div class="mt-2 pt-2" style="background-color: white;">
        <h6 class="" align="center"><b><?php echo $row["exam_title"]?></b> </h6>
        <p class="pl-2 pb-4">
            <b> 
            Subject :<?php echo $row["subject_name"]?>&nbsp;&nbsp;
            Total Question : <?php echo $row["no_of_question"]?><br>
            Total Marks : <?php echo $row["total_marks"]?><br>
            Exam Time : <?php echo $row["exam_timing"]?> Hour<br>
        </b>
        </p>  

    </div>
                    <?php

$cntr=0;
         $sql="select * from question where test_id=".$testid."";
              $result = $con->query($sql);
             if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
              {
                $cntr=$cntr+1;

                $oa="oa".$cntr;
                $ob="ob".$cntr;
                $oc="oc".$cntr;
                $od="od".$cntr;
                $doa="doa".$cntr;
                $dob="dob".$cntr;
                $doc="doc".$cntr;
                $dod="dod".$cntr;
                $qns="qns".$cntr;
                $cns="cns".$cntr;


                        ?>
                        

                       <div class="pl-2 pt-0 mt-0" style="background-color: white;color: black">
        <p>
            <b>
            <div class="form-group mt-0 pt-0">
                Question <?php echo $cntr ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mark : <?php echo $row["mark"]?><br><?php echo $row["question"]?> 
            </div>
            <div class="form-group" id="<?php echo $doa ?>">
                <input type="radio" name="" id="<?php echo $oa ?>" onclick="changeoption(1,<?php echo $cntr ?>)">&nbsp;A. <?php echo $row["option_a"]?>
            </div>
            <div class="form-group" id="<?php echo $dob ?>">
                <input type="radio" name="" id="<?php echo $ob ?>" onclick="changeoption(2,<?php echo $cntr ?>)">&nbsp;B. <?php echo $row["option_b"]?>
            </div>
            <div class="form-group" id="<?php echo $doc ?>">
                <input type="radio" name="" id="<?php echo $oc ?>" onclick="changeoption(3,<?php echo $cntr ?>)">&nbsp;C. <?php echo $row["option_c"]?>
            </div>
            <div class="form-group" id="<?php echo $dod ?>">
                <input type="radio" name="" id="<?php echo $od ?>" onclick="changeoption(4,<?php echo $cntr ?>)">&nbsp;D. <?php echo $row["option_d"]?>
            </div>
            <div class="form-group text-right pb-2 pr-2">
                <input type="button" class="btn btn-sm btn-info" value="clear option" onclick="clearoption(<?php echo $cntr ?>)"><input type="button" class="ml-2 btn btn-sm btn-success" value="save answer" onclick="saveoption(<?php echo $cntr ?>)">
            </div>
            <input type="hidden" id="<?php echo $qns ?>" name="<?php echo $qns ?>" value="">
            <input type="hidden" id="<?php echo $cns ?>" name="<?php echo $cns ?>" value="<?php echo $row["answer"] ?>">
        </b>
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


             <h3>No test available</h3>
 
         <?php
         


         }

       }





       ?>
    
   
         <input type="hidden" name="counter" value="<?php echo $cntr ?>">
         <input type="hidden" name="rid" id="rid" value="<?php echo $rid ?>">
         <input type="hidden" name="testid" value="<?php echo $testid ?>">
                
             </form>  


            </div>    

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="fixed-bottom" style="background-color: #D35400;">
            <div class="container">
                <table align="center" style="width:100%;font-size:20px;">
                    <tr align=center>
                        <td style="color:black;font-weight: bold;">Time :</td>
                        <td id="display" style="color: red"></td>
                        <td><input type="button" class="btn btn-sm btn-danger" name="" value="Submit Test" onclick="submit_test()"></td>
                        
                       
                    </tr>
                </table>

            </div>
        </footer><!-- End #footer -->
<script>
function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                       SubmitFunction();
                       $('#display').empty();
                       clearInterval(interVal)
                    }
                    },1000);
            }
        }
        
        function SubmitFunction(){
       var frm=document.getElementById("formtest");
        var rid=document.getElementById("rid").value;
        //alert(rid);
        var url="index.php?rid="+rid;
        //alert(url);
        frm.action=url;
        frm.submit();


        
        }
    var t=document.getElementById("timem").value;
         CountDown(t,$('#display'));
</script>
<script type="text/javascript">
    function clearoption(qid)
    {
        var oa="#oa"+qid;
        var ob="#ob"+qid;
        var oc="#oc"+qid;
        var od="#od"+qid;
        var qns="qns"+qid;

        var doa="doa"+qid;
                var dob="dob"+qid;
                var doc="doc"+qid;
                var dod="dod"+qid;

        $(oa).prop("checked",false);
        $(ob).prop("checked",false);
        $(oc).prop("checked",false);
        $(od).prop("checked",false);

        $("#"+doa).css("background-color", "white");
        $("#"+dob).css("background-color", "white");
        $("#"+doc).css("background-color", "white");
        $("#"+dod).css("background-color", "white");

        document.getElementById(qns).value="";
            // document.getElementById("msg").innerHTML = "Option clear successfully";
            // $('#myModal').modal('show');


        
    }

    function changeoption(cid,qid)
    {
        //alert(cid);
        //alert(qid);
        var oa="#oa"+qid;
        var ob="#ob"+qid;
        var oc="#oc"+qid;
        var od="#od"+qid;
        var qns="qns"+qid;

        var doa="doa"+qid;
                var dob="dob"+qid;
                var doc="doc"+qid;
                var dod="dod"+qid;

                $("#"+doa).css("background-color", "white");
                $("#"+dob).css("background-color", "white");
                $("#"+doc).css("background-color", "white");
                $("#"+dod).css("background-color", "white");

        if(cid==1)
        {
            $(oa).prop("checked",true);
        $(ob).prop("checked",false);
        $(oc).prop("checked",false);
        $(od).prop("checked",false);
        }
        if(cid==2)
        {
            $(oa).prop("checked",false);
        $(ob).prop("checked",true);
        $(oc).prop("checked",false);
        $(od).prop("checked",false);
        }
        if(cid==3)
        {

            $(oa).prop("checked",false);
        $(ob).prop("checked",false);
        $(oc).prop("checked",true);
        $(od).prop("checked",false);
        }
        if(cid==4)
        {

            $(oa).prop("checked",false);
        $(ob).prop("checked",false);
        $(oc).prop("checked",false);
        $(od).prop("checked",true);
        }


    }

    function saveoption(qid)
    {
        //alert(qid);
        var oa="oa"+qid;
        var ob="ob"+qid;
        var oc="oc"+qid;
        var od="od"+qid;
        var qns="qns"+qid;
        var ans="cns"+qid;
        var doa="doa"+qid;
                var dob="dob"+qid;
                var doc="doc"+qid;
                var dod="dod"+qid;

        if(document.getElementById(oa).checked==true)
        {
            //lert("ok");
            var a=document.getElementById(ans).value;
            if(document.getElementById(ans).value=="A")
            {
                // document.getElementById("msg").innerHTML = "Answer is correct";
                // $('#myModal').modal('show');

                $("#"+doa).css("background-color", "#2ECC71");
            }
            else
            {
            //     document.getElementById("msg1").innerHTML = "Answer is inccorect . Correct answer is Option "+a;
            // $('#myModal1').modal('show');
            $("#"+doa).css("background-color", "#EC7063");
            }

        }
        else if(document.getElementById(ob).checked==true)
        {
            var a=document.getElementById(ans).value;

            if(document.getElementById(ans).value=="B")
            {
                // document.getElementById("msg").innerHTML = "Answer is correct";
                // $('#myModal').modal('show');
                $("#"+dob).css("background-color", "#2ECC71");
            }
            else
            {
            //     document.getElementById("msg1").innerHTML = "Answer is inccorect . Correct answer is Option "+a;
            // $('#myModal1').modal('show');
            $("#"+dob).css("background-color", "#EC7063");
            }
        }
        else if(document.getElementById(oc).checked==true)
        {
            var a=document.getElementById(ans).value;

            if(document.getElementById(ans).value=="C")
            {
                // document.getElementById("msg").innerHTML = "Answer is correct";
                // $('#myModal').modal('show');
                $("#"+doc).css("background-color", "#2ECC71");
            }
            else
            {
            //     document.getElementById("msg1").innerHTML = "Answer is inccorect . Correct answer is Option "+a;
            // $('#myModal1').modal('show');
            $("#"+doc).css("background-color", "#EC7063");
            }
        }
        else if(document.getElementById(od).checked==true)
        {
            var a=document.getElementById(ans).value;

            if(document.getElementById(ans).value=="D")
            {
                // document.getElementById("msg").innerHTML = "Answer is correct";
                // $('#myModal').modal('show');
                $("#"+dod).css("background-color", "#2ECC71");
            }
            else
            {
            //     document.getElementById("msg1").innerHTML = "Answer is inccorect . Correct answer is Option "+a;
            // $('#myModal1').modal('show');
            $("#"+dod).css("background-color", "#EC7063");
            }
        }
        else
        {
            document.getElementById("msg1").innerHTML = "please select option";
            $('#myModal1').modal('show');
        } 

    }

    function submit_test()
    {
        document.getElementById("msg2").innerHTML = "Do you want to submit test ?";
            $('#myModal2').modal('show');
    }

    function modelyes()
    {
        var frm=document.getElementById("formtest");
        var rid=document.getElementById("rid").value;
        //alert(rid);
        var url="index.php?rid="+rid;
        //alert(url);
        frm.action=url;
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