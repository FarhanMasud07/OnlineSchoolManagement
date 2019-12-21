<?php



session_start();

//if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="Pattern1234"){

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
    <link rel="stylesheet" href="../SchoolManagement/demodesign.css">
    
    
   
    
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
                            <li><a href="MyHome.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="classRegistration.php"><i class="fa fa-edit"></i> Class Registration <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href="SubjectRegistration.php"><i class="fa fa-desktop"></i> Subject Registration <span
                                    class="fa fa-chevron-down"></span></a>

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
                        <h3>Accounts Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
        
        <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                             
                                      

                                <div class="clearfix"></div>
                                
                         
                         
                         <br/>
                         <br/>
                         
                         
                         
             <!-- *******************  FOR INSERT *******************-->                    
                          
     
    <?php
   
    require("LoginFromAnything.php");

    $class = array();

    loadFromMySQLClass("select * from account where class = ".$_REQUEST["classID"]);

echo "<table class='table table-bordered'>";
            
            echo "<tr>";
            
            echo "<th>"; echo "Acount Date"; echo "</th>";
            echo "<th>"; echo "Student ID"; echo "</th>";
            
            echo "<th>"; echo "Section"; echo "</th>";
            echo "<th>"; echo "Fees"; echo "</th>";
            echo "<th>"; echo "Due Fees"; echo "</th>";
            echo "<th>"; echo "Slip Number"; echo "</th>";
           
            
            //echo "</th>";
    
            echo "</tr>";
        

    foreach($class as $c)
    {
        $account = $c["account_date"];
        $student_id = $c["student_id"];
        $sect = $c["section"];
        $fee = $c["fees"];
        $duefee = $c["due_fees"];
        $s_number = $c["slip_number"];
        
        
        
         echo "<tr>";
                    
                    echo "<td>"; echo  $account; echo "</td>";
                    echo "<td>"; echo  $student_id; echo "</td>";
                ?>
                
                
                
                   <!-- <td>
                    <a style="color:red;" href="stInfo.php?classID=<?php// echo $class; ?>">
                    <?php
                     //echo  $class; ?>
                    </a> 
                     </td>-->
                
                <?php
        
                    echo "<td>"; echo  $sect; echo "</td>";
                
                    echo "<td>"; echo  $fee; echo "</td>";
                    
                    echo "<td>"; echo  $duefee; echo "</td>";
                    
                    echo "<td>"; echo  $s_number; echo "</td>";
                
                echo "</tr>";
                 

        
    }
 echo "</table>";
    ?>
       
                
                
                
            
                                
                         
                           
                    <!--*******************  FOR DELETE ******************* --> 
                            
                            
                            
                            
             
                          
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