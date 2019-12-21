
<?php
//echo "<pre>";print_r($GLOBALS);echo "</pre>";
session_start();

//if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="Pattern1234"){
	
    //echo "Your private message : '017110000'";
    
  if(isset($_SESSION["flag"]))
  {
      
      $duration = $_SESSION["flag"]["duration"];
      $start = $_SESSION["flag"]["start"];
      
      if((time() - $start) > $duration)
      {
          unset($_SESSION["flag"]["duration"]);
          unset($_SESSION["flag"]["start"]);
          unset($_SESSION["flag"]);
          
      }
      else{
          
      $_SESSION["flag"]["start"] = time();
  ?>  
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page | PRD </title>
    <title>Home Page | PRD </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="demodesign.css">
    <style>
    * {
        box-sizing: border-box;
    }
    /* Create three equal columns that floats next to each other */
        .column {
            float: right;
            width: 80%;
            padding: 20px;
            height: 200px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
        @media screen and (min-width: 601px) {
      .column {
        width:50%;
        
         }
        }
        @media screen and (max-width: 1200px) {
            .column {
                width: 100%;
                
            }
        }
   
    </style>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>PRD</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="image/pexels-photo-54278.jpeg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>

                        <h2>Farhan Masud</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="#"><i class="fa fa-home"></i> Notice <span class="fa fa-chevron-down"></span></a>

                            </li>
                            
                            
                            
                            <li><a href="Account.php"><i class="fa fa-bar-chart-o"></i> Account <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>

                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="image/pexels-photo-54278.jpeg" alt="">Farhan
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href='logout.php'><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        
        
        
        

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Notice</h3>
                    </div>

                   
                </div>

                
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2></h2>
                                     <label class="text-danger">  

                                    </label>  

                              
                                </div>
                    
                         
                         <br/>
                         <br/>
                         
            

                         
                         
                         
             <!-- *******************  FOR INSERT *******************-->                        
                          
       <?php                    
            $notice = array();
            require("LoginFromAnything.php");
            
            
    
            if(isset($_REQUEST["submit1"]) )
            {
                Notice("insert into notice (message,noticedate) values ('$_POST[message]','$_POST[NoticeDate]')");
               
            }
         
        else{

            global $are;
                    
                  
            $servername = "localhost";
                    $username = "peacffkx_Farhan";
                    $password = "Sherlock1234";
                    $db = "peacffkx_reg";
                
                            $conn = mysqli_connect("$servername","$username","$password","$db");
                            
            
            
            
            if(!$conn)
                            {
                                 die("Connection failed: " . mysqli_connect_error());
                            }
                            else{
                               
                                $contact = "select * from stu_reg";
                
                                    $result1=mysqli_query($conn,$contact)or die(mysqli_error($conn));
                                    
                                    
                                //step 2, sendfunction//
            
            
             while($row = mysqli_fetch_array($result1))
                        {
                            
                            
                          
                      
                       $phone  = $row["father_or_mother_contact"];
                        $_GET["to"] = $phone;
                        
              $to = $_GET["to"];      
            //$token = "a3d58a6fb200c419636c6938aacf93fb";
            //$message = "Test SMS From Using API";
            
             $url = "http://api.greenweb.com.bd/api.php";
            
            
            $data= array(
               'to'=>  "$to",
            // //'message'=>"$message",
            'token'=>"$token",
             ); 
             
            $ar = $data['to'];
               $are[] =  $ar;
            
            if(isset($_REQUEST["submit"]) )
            {
                    //Notice("insert into notice (message,noticedate) values ('$_POST[message]','$_POST[NoticeDate]')");
            // echo $data['to'];// Add parameters in key value
              $ch = curl_init(); // Initialize cURL
               curl_setopt($ch, CURLOPT_URL,$url);
              curl_setopt($ch, CURLOPT_ENCODING, '');
               curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
               curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
               $smsresult = curl_exec($ch);
                        
                    }   
                }
            
            }
        }
        ?>
           <div  class="about-bottom" >
             <div class="col-md-6 w3l_about_bottom_left">     
             <div class="row">
              
            <div class="column">                        
            <form action="http://api.greenweb.com.bd/api.php" method="post">
            
            
            
                <input type="text" name="token" placeholder="token" />
                <input type="text" name="to" hidden value ="<?php foreach($are as $x => $x_value) {
                echo   $x_value.',';} ?>" /><br/><br>
                 <textarea class="span11" name="message" id="message" style="" placeholder="Message"  ></textarea><br/><br/>
                <button type="submit" name="submit" class="btn btn-success btn-large">Send SMS Notice</button>
            </form>    
            </div>
            
            
            
            
            
            <div class="column" style="">  
            <form action="" method="post" style= "">
                <div>
                             
              
                <input type="date" id="ac" name="NoticeDate" placeholder="---Date---"style="";>
                
                </div><br/>
                 
                 <textarea class="span11" name="message" id="message" style="" placeholder="Message"  ></textarea><br/><br/>
             <button type="submit1" name="submit1" class="btn btn-success btn-large">Send Web Notice</button>
             </form> 
             
            </div> 
             </div>
             </div>
             </div>          
                           
                   <!-- *******************  FOR DELETE ******************* --> 
                            
                            
                            
                            
             
                          
                        
                    </div>
                </div>
            </div>
         </div>
        </div>
        <!-- /page content -->
        
        
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                School Management System
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>
    
    
<?php    
    }
   
   
	
}
else{
	echo "Invalid user";
	header("Location:Main.php?error=invalid user");
}
?>