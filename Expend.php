
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
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <script type="text/javascript">
        
        function checkSalary()
        {
           var x =document.getElementsByName("tsalary")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("tsalary")[0].style.border="1px solid red";
			document.getElementById("corrSalary").innerHTML="";
			return false;
		}
		else
		{
			if(!isNaN(x))
			{
				document.getElementById("corrSalary").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrSalary").style.color="green";
				document.getElementsByName("tsalary")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("tsalary")[0].style.border="1px solid red";
				document.getElementById("corrSalary").innerHTML="Must Provide Number";
				document.getElementById("corrSalary").style.color="red";
				return false;
			}
		} 
        }
        
        function checkBookPurchase()
        {
           var x =document.getElementsByName("bpurchase")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("bpurchase")[0].style.border="1px solid red";
			document.getElementById("corrBookPurchase").innerHTML="";
			return false;
		}
		else
		{
			if(!isNaN(x))
			{
				document.getElementById("corrBookPurchase").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrBookPurchase").style.color="green";
				document.getElementsByName("bpurchase")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("bpurchase")[0].style.border="1px solid red";
				document.getElementById("corrBookPurchase").innerHTML="Must Provide Number";
				document.getElementById("corrBookPurchase").style.color="red";
				return false;
			}
		} 
    }
        
          function checkOthers()
        {
           var x =document.getElementsByName("others")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("others")[0].style.border="1px solid red";
			document.getElementById("corrOthers").innerHTML="";
			return false;
		}
		else
		{
			if(!isNaN(x))
			{
				document.getElementById("corrOthers").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrOthers").style.color="green";
				document.getElementsByName("others")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("others")[0].style.border="1px solid red";
				document.getElementById("corrOthers").innerHTML="Must Provide Number";
				document.getElementById("corrOthers").style.color="red";
				return false;
			}
		} 
    }
        
        
        function check()
        {
            checkBookPurchase();
            checkOthers();
            checkSalary();
            
            if(checkBookPurchase()==true && checkOthers()==true && checkSalary()==true)
               {
                    return true;
               }
            else{
                
                alert("Empty Data or Invalid Data are Not Allowed");
                return false;
            }
        }
    </script>
   
    
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
                            <li><a href="MyHome.php"><i class="fa fa-home"></i> Notice <span class="fa fa-chevron-down"></span></a>

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
                <div class="row" style="min-height:200px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Accounts</h2>
                                     <label class="text-danger">  

                                    </label>  

                                <div class="clearfix"></div>
                                
                         <form method="post">
                                    </div>
                            <div>
                             
                             <label>Expend Date :</label>
                                <input type="date" id="ac" name="edate" placeholder="---Date---"style="margin-left:35px";>
                              
                                
                            <!--
                                 <label for="">Month :</label>
                                 <select name="acdate" style="margin-left:54px;">
                                  <option value="January"  >January</option>
                                  <option value="February">February</option>
                                  <option value="March">March</option>
                                  <option value="April">April</option>
                                      <option value="May">May</option>
                                          <option value="June">June</option>
                                              <option value="July">July</option>
                                                  <option value="August">August</option>
                                                      <option value="September">September</option>
                                                          <option value="October">October</option>
                                                              <option value="November">November</option>
                                                                  <option value="December">December</option>
                               </select>
                               -->
                                
                            </div>
                            
                            <div>
                             <!--
                               <select>
                                  <option value="volvo">Volvo</option>
                                  <option value="saab">Saab</option>
                                  <option value="opel">Opel</option>
                                  <option value="audi">Audi</option>
                               </select>
                               -->
                              
                            </div>
                            
                            <div >
                               <label>Teacher's Salary :</label>
                                <input type="text" id="sc" name="tsalary" onkeyup="checkSalary()" placeholder="---Teacher's Salary---" style="margin-left:11px;">
                                
                                <span id="corrSalary"></span>
                            </div>
                            
                            <div>
                               <label>Books Purchase :</label>
                                <input type="text" id="cl" name="bpurchase" onkeyup="checkBookPurchase()" placeholder="---Books Purchase---" style="margin-left:11.3px;">
                                
                                <span id="corrBookPurchase"></span>
                            </div>
                            
                            <div>
                               <label>Others :</label>
                                <input type="text" id="sec" name="others" onkeyup="checkOthers()" placeholder="---Others---" style="margin-left:71.5px;">
                                
                                <span id="corrOthers"></span>
                            </div>
                            
                            
                            
                            
                            <br/>
                            
                            <div>
                               
                                <input type="submit" id="log" name="Submit" onclick ="return check()" value="Submit">
                            </div>
                                                                           
                        </form>
                         
                         <br/>
                         <br/>
                         
                         
                         
             <!-- *******************  FOR INSERT *******************-->  
             <?php
    
  
    
            $expend = array();
            $expend1 = array();
            $expend2 = array();
        
          //  $TotExpend[] = $expend[]-$expend1[];
    
            require("LoginFromAnything.php");
    
             if(isset($_REQUEST["Submit"]) )
            {
                 
            
               Expend("insert into expend (expend_date,teachers_salary,books_purchase,others) values('$_POST[edate]','$_POST[tsalary]','$_POST[bpurchase]','$_POST[others]')");
        
                 
            }
    
     ExpendShow("select * from account","select * from expend ORDER by id DESC","select *from stu_reg");
            
            echo "<table class='table table-bordered'>";
            
            echo "<tr>";
            
            //echo "<th>"; echo "Expend Date"; echo "</th>";
            //echo "<th>"; echo "Student ID"; echo "</th>";
            //echo "<th>"; echo "Class"; echo "</th>";
            echo "<th>"; echo "Expend Date"; echo "</th>";
            echo "<th>"; echo "Teacher Salary"; echo "</th>";
            echo "<th>"; echo "Book Purchase"; echo "</th>";
            echo "<th>"; echo "Others"; echo "</th>";
            echo "<th>"; echo "Total Amount"; echo "</th>";
            
           
            
            //echo "</th>";
    
            echo "</tr>";
        
            foreach($expend as $e)
            {
                //$a_date = $a["account_date"];
                //$s_id = $a["student_id"];
                //$class = $a["class"];
                //$sect = $a["section"];
                //$fee = $a["fees"];
                //$duefee = $a["due_fees"];
                //$s_number = $a["slip_number"];
                
                $ed = $e["expend_date"];
                $ts=$e["teachers_salary"];
                $bp = $e["books_purchase"];
                $ot=$e["others"];
                $total1 = $e["total"];

               
                 echo "<tr>";
                
                
                echo "<td>"; echo  $ed; echo "</td>";
                echo "<td>"; echo  $ts; echo "</td>";
                echo "<td>"; echo  $bp; echo "</td>";
                echo "<td>"; echo  $ot; echo "</td>";
                echo "<td>"; echo  $total1; echo "</td>";
                
                    
                
                echo "</tr>";
                 
               
               
             
               

           
            }
    
             foreach($expend1 as $e1)
            {
                
                $total2 = $e1["total"];

           
            }
            
    
    
                
    foreach($expend2 as $ad1)
            {
                
                $total3 = $ad1["total"];

           
            }
            echo "<table class='table table-bordered'>";
    
             echo "<tr>";
                  echo "<th>"; echo "<center>Total Income</center>"; echo "</th>";
             echo "</tr>";
            
            echo "<tr>";
             echo "<td>"; echo  "<center>"; echo $total3+$total2-$total1; echo  "</center>"; echo "</td>";
    
           echo "</tr>";
            echo "<table>";
                
            
    
           
        
           
                
            
    
           
        
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