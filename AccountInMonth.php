
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
    <link rel="stylesheet" href="demodesign.css">
    
   
    
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   
    
  
    
    
    
   <script type="text/javascript">
       
       
/*function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
     */  
       
function showHint(str) {
  if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    document.getElementById("txtHint").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
      document.getElementById("txtHint").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","gethint.php?q="+str,true);
  xmlhttp.send();
}
  
     
  
       
       
     /*  function showHint(value)
       {
           $.post("gethint.php",{partialState:value},function(data){
               
               $("#txtHint").html(data);
               
           });
       }*/
       
    
        function checkID()
        {
            var x =document.getElementsByName("stdid")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("stdid")[0].style.border="1px solid red";
			document.getElementById("corrID").innerHTML="";
			return false;
		}
		else
		{
			if( /^([0-9])+\-([0-9])+\-([a-zA-Z' '])/.test(x) || /^([0-9])+\-([0-9])+\-([0-9])+$/.test(x) || /^([0-9])+\-([0-9])+\-([0-9])+[a-zA-Z' ']/.test(x))
			{
				document.getElementById("corrID").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrID").style.color="green";
				document.getElementsByName("stdid")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("stdid")[0].style.border="1px solid red";
				document.getElementById("corrID").innerHTML="Invalid ID (ex : (19-0001-NA Or 19-0002-6 Or 19-0002-6=6B) Here 19 = admission year '-' 0001 = student id '-' NA = Nursery Sec A Or 6 = class 6 Or 6B=Class 6 sec B)";
				document.getElementById("corrID").style.color="red";
				return false;
			}
		}
            
    }
       
    function checkClass()
        {
            var a = document.fm.class.value; 
            var x =document.getElementsByName("class")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("class")[0].style.border="1px solid red";
			document.getElementById("corrclass").innerHTML="";
			return false;
		}
		else if(a>12)
                {
                    document.getElementsByName("class")[0].style.border="1px solid red";
				document.getElementById("corrclass").innerHTML="Invalid Class";
				document.getElementById("corrclass").style.color="red";
				return false;
                }
        else
		{
			if(/^([0-9])+$/.test(x) || /^[a-zA-Z' ']/.test(x))
			{
				document.getElementById("corrclass").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrclass").style.color="green";
				document.getElementsByName("class")[0].style.border="1px solid green";
				return true;
			}
            
			else
			{
               
                    	document.getElementsByName("class")[0].style.border="1px solid red";
				document.getElementById("corrclass").innerHTML="Invalid Class";
				document.getElementById("corrclass").style.color="red";
				return false;

			
			}
		}
    }
        
       function checkSection()
	{
		var x =document.getElementsByName("se")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("se")[0].style.border="1px solid red";
			document.getElementById("corrsection").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("se")[0].style.border="1px solid red";
				document.getElementById("corrsection").innerHTML="Only Letter allowed";
				document.getElementById("corrsection").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrsection").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrsection").style.color="green";
				document.getElementsByName("se")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
	
	 function checkPcat()
	{
	     
		var x =document.getElementsByName("pcatagory")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("pcatagory")[0].style.border="1px solid red";
			document.getElementById("corrPcat").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x) )
			{
				document.getElementsByName("pcatagory")[0].style.border="1px solid red";
				document.getElementById("corrPcat").innerHTML="Only Letter allowed";
				document.getElementById("corrPcat").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrPcat").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrPcat").style.color="green";
				document.getElementsByName("pcatagory")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
	

       
       function checkFees()
	{
	    var i = document.fm.fees.value;
		var x =document.getElementsByName("fees")[0].value.trim();
		if(x.length==0 )
		{
			document.getElementsByName("fees")[0].style.border="1px solid red";
			document.getElementById("corrfees").innerHTML="";
			return false;
		}
		/*else if(i>300)
                {
                    document.getElementsByName("fees")[0].style.border="1px solid red";
				document.getElementById("corrfees").innerHTML="Cannot Entry more than 300";
				document.getElementById("corrfees").style.color="red";
				return false;
        }*/ 
		else
		{
			if(!/^[0-9]+$/.test(x))
			{
				document.getElementsByName("fees")[0].style.border="1px solid red";
				document.getElementById("corrfees").innerHTML="Only Number allowed";
				document.getElementById("corrfees").style.color="red";
				return false;
			}
			else if(x>1000)
			{
			    document.getElementsByName("fees")[0].style.border="1px solid red";
				document.getElementById("corrfees").innerHTML="Can't Entry more than 300";
				document.getElementById("corrfees").style.color="red";
				return false;
			    
			}
			else
			{
				document.getElementById("corrfees").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrfees").style.color="green";
				document.getElementsByName("fees")[0].style.border="1px solid green";
				return true;
			}
		}
		
	} 
	
	 function checkFixno()
	{
	    var i = document.fm.fixedrate.value;
		var x =document.getElementsByName("fixedrate")[0].value.trim();
		if(x.length==0 )
		{
			document.getElementsByName("fixedrate")[0].style.border="1px solid red";
			document.getElementById("corrFix").innerHTML="";
			return false;
		}
		/*else if(i>300)
                {
                    document.getElementsByName("fees")[0].style.border="1px solid red";
				document.getElementById("corrfees").innerHTML="Cannot Entry more than 300";
				document.getElementById("corrfees").style.color="red";
				return false;
        }*/ 
		else
		{
			if(!/^[0-9]+$/.test(x))
			{
				document.getElementsByName("fixedrate")[0].style.border="1px solid red";
				document.getElementById("corrFix").innerHTML="Only Number allowed";
				document.getElementById("corrFix").style.color="red";
				return false;
			}
			else if(x>2000)
			{
			    document.getElementsByName("fixedrate")[0].style.border="1px solid red";
				document.getElementById("corrFix").innerHTML="Can't Entry more than 300";
				document.getElementById("corrFix").style.color="red";
				return false;
			    
			}
			else
			{
				document.getElementById("corrFix").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrFix").style.color="green";
				document.getElementsByName("fixedrate")[0].style.border="1px solid green";
				return true;
			}
		}
		
	} 
       
       function checkSlipNo()
	{
		var x =document.getElementsByName("slipnumber")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("slipnumber")[0].style.border="1px solid red";
			document.getElementById("corrSlip").innerHTML="";
			return false;
		}
		else
		{
			if(!isNaN(x))
			{
				document.getElementById("corrSlip").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrSlip").style.color="green";
				document.getElementsByName("slipnumber")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("slipnumber")[0].style.border="1px solid red";
				document.getElementById("corrSlip").innerHTML="Invalid Number";
				document.getElementById("corrSlip").style.color="red";
				return false;
			}
		}
		
	}
       function check()
       {
           checkClass();
           checkFees();
           checkID();
           checkSection();
           checkSlipNo();
           checkFixno();
           checkPcat();
           
           if(checkClass()==true && checkFees()==true && checkID()==true && checkSection()==true && checkSlipNo()==true && checkFixno() == true && checkPcat()==true)
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
                               
                               <!-- javascript -->
                               
                               
                                
                                <!-- -->
                            
                    
                           
                           
                           
                            </div>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Accounts</h2>
                                     <label class="text-danger">  

                                    </label>  

                                <div class="clearfix"></div>
                            </div>
                                
                                
                         <form method="post" name="fm">
                                     
                             <div  >
                               
                               
                               <!-- javascript -->
                                 <div style="width:30%;border-radius:4%; float:right;"class="input-group">
                                      <input type="text"class="form-control" onkeyup="showHint(this.value)" placeholder="Search by ID">
                                      
                                      <br><br>
                                    
                                    <div style="position:sticky; height:0.00001px;margin-top:-4.5px;" id="txtHint"></div>
                                    <!--
                                    <span class="input-group-btn">
                                      <button class="btn btn-default"  name ="ds"  type="button">Go!</button>
                                    </span>
                                    -->
                                    </div>
                                
                                <!-- -->
                        
                    
                           
                           
                           
                            </div><br>
                                 
                            <div>
                             
                             <label>Account Date :</label>
                                <input type="date" id="ac" name="acdate" placeholder="---Date---"style="margin-left:59px";>
                              
                                
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
                               <label>Student Id :</label>
                                <input type="text" id="sc" name="stdid" onkeyup="checkID()" placeholder="---ID---" style="margin-left:79px;">
                                
                                 <span id="corrID"></span>
                                
                                
                            </div>
                            
                            <div>
                               <label>Class :</label>
                                <input type="text" id="cl" name="class" onkeyup="checkClass()" placeholder="---Class---" style="margin-left:108.3px;">
                                
                                <span id="corrclass"></span>
                                
                            </div>
                            
                            <div>
                               <label>Section :</label>
                               
                                
                                <input type="text" id="sec" name="se" onkeyup="checkSection()" placeholder="---Section---" style="margin-left:96.5px;">
                                
                                <span id="corrsection"></span>
                            
                            </div>
                            
                    
                            
                            <div>
                               <label>Fees :</label>
                                <input type="text" id="fee" name="fees" onkeyup="checkFees()" placeholder="---Fees---"style="margin-left:113.1px;">
                                
                                <span id="corrfees"></span>
                            </div>
                            
                            <!--
                            <div>
                               <label>Due Fees :</label>
                                <input type="text" id="duefee" name="duefees" placeholder="---Due Fees---"style="margin-left:35.1px;">
                            </div>
                            -->
                            
                            <div>
                               <label>Slip Number :</label>
                                <input type="text" id="slip" name="slipnumber" onkeyup="checkSlipNo()" placeholder="---Number---"style="margin-left:66.5px;">
                                
                                <span id="corrSlip"></span>
                                
                                
                            </div>
                            
                            <div>
                               <label>Fixed Rate :</label>
                                <input type="text" id="frate" name="fixedrate" onkeyup="checkFixno()" placeholder="---Number---"style="margin-left:77.5px;">
                                
                                <span id="corrFix"></span>
                                
                                
                            </div>
                            
                            <div>
                               <label>Payment Catagory :</label>
                                <input type="text" id="pcat" name="pcatagory" onkeyup="checkPcat()" placeholder="---Number---"style="margin-left:27.5px;">
                                
                                <span id="corrPcat"></span>
                                
                                
                            </div>
                            
                                 
                            
                            <br/>
                            
                            <div>
                               
                                <input type="submit" id="log" name="Submit" onclick="return check()" value="Submit">
                            </div>
                            
                            
                            <!--
                            <div>
                                <input style="margin-left:750px;width:20%" type="text" name="search"><br>
                                
                                
                                <input style="margin-left:800px;margin-top:10px" type="submit" name="submit" value="Search Date">
                            </div>
                            -->
        <!--                                                       
                                
          -->                                          
     <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Student ID</label>
                <input type="text" id="stid" class="form-control">
              </div>
              <div class="form-group">
                <label>Section</label>
                <input type="text" id="sect" class="form-control">
              </div>

               <div class="form-group">
                <label>Fees</label>
                <input type="text" id="fees" class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>             
                                                                 
               
                                                                                                     
                                             
                                                                  
                        </form>
                       
                        
                         
                         
                         <br/>
                         <br/>
                         
                         
                         
             <!-- *******************  FOR INSERT *******************-->                    
                          
     <?php
    
  
    
    $account = array();
    require("LoginFromAnything.php");
    
    
        
    
    
    //$result_per_page =10;
    
    if(isset($_REQUEST["Submit"]) )
    {
        
       
            
            
             Account("select *from account where student_id='$_POST[stdid]'","select *from account where slip_number='$_POST[slipnumber]'","insert into account (account_date,student_id,class,section,fees,slip_number,fixedrate,paymentcatagory) values ('$_POST[acdate]','$_POST[stdid]','$_POST[class]','$_POST[se]','$_POST[fees]','$_POST[slipnumber]','$_POST[fixedrate]','$_POST[pcatagory]')");
       
    
            //"insert into stu_reg (student_id,firstname,lastname,dateofbirth,mother_name,father_name,father_or_mother_contact,class,Section,admission_fees,reg_fixedrate,payment_catagory) values ('$_POST[stid]','$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[mname]','$_POST[fathername]','$_POST[fomcontact]','$_POST[class]','$_POST[section]','$_POST[fees]','$_POST[fixedrate]','$_POST[pcatagory]')"
        
          
       
   
        
           /*$count = 0;
            
                    $account = $_POST["acdate"];
                    $sid = $_POST["stdid"];
                    $class = $_POST["class"];
                    $fee = $_POST["fees"];
                    $snumber = $_POST["slipnumber"];
        
         $count = mysqli_num_rows($result);
            
            if($count>0)
            {
                ?>
                
                     <div class="alert alert-success col-lg2 col-lg-push-1">
                     Already Exist.
                      </div>
                <?php
                
                
            }
            else
            {
                    mysqli_query($con,"insert into account (account_date,student_id,class,fees,slip_number) values('$account','$sid','$class','$fee','$snumber')");
                
                // echo "<center>Inserted</center>";
                
                 ?>
                 <div class="alert alert-success col-lg2 col-lg-push-3">
                      Insert Successfully.
                  </div> 
                  
                   
                <?php 
                
                
               
             
                    
            }*/
        
    
    }
    
   
    
      show("select * from account ORDER by id DESC");
            
            
            echo "<table class='table table-bordered'>";
            
            echo "<tr>";
            
            echo "<th>"; echo "Acount Date"; echo "</th>";
            echo "<th>"; echo "Student ID"; echo "</th>";
            echo "<th>"; echo "Class"; echo "</th>";
            echo "<th>"; echo "Section"; echo "</th>";
            echo "<th>"; echo "Payment Catagory"; echo "</th>";
            echo "<th>"; echo "Fixed Rate"; echo "</th>";
            echo "<th>"; echo "Fees"; echo "</th>";
            echo "<th>"; echo "Due Fees"; echo "</th>";
            echo "<th>"; echo "Slip Number"; echo "</th>";
            echo "<th>"; echo "Total Amount"; echo "</th>";
            echo "<th>"; echo "Delete"; echo "</th>";
            echo "<th>"; echo "<center>Update</center>"; echo "</th>";
         
            
           
            
            //echo "</th>";
    
            echo "</tr>";
        
            foreach($account as $a)
            {
                $id = $a["id"];
                $a_date = $a["account_date"];
                $s_id = $a["student_id"];
                $class = $a["class"];
                $sect = $a["section"];
                $fee = $a["fees"];
                $duefee = $a["due_fees"];
                $s_number = $a["slip_number"];
                $total = $a["total"];
                $frate = $a["fixedrate"];
                $pcat = $a["paymentcatagory"];

               ?>
               
                <tr id ="<?php echo $id ;?>">
                
               
                   <td>
                   
                   <a style="color:red;" href="month.php?AccountDate=<?php echo $a_date;?>">
                   <?php
                    
                  echo  $a_date; 
                
                   ?>
                   </a>
                    </td>
                
               
                    <td data-target="stid"><?php echo  $s_id; ?></td>
                
                
                
                
                    <td>
                    <a style="color:red;" href="stInfo.php?classID=<?php echo $class; ?>">
                    <?php
                     echo  $class; 
                     ?>
                    </a> 
                     </td>
                
               
                
                <td data-target="sect"> <?php echo  $sect;?> </td>
                
                <td> <?php echo  $pcat; ?></td>
                <td> <?php echo  $frate; ?></td>
                
               <td data-target="fees"> <?php echo  $fee; ?></td>
                <td> <?php echo  $duefee; ?></td>
                <td><?php echo  $s_number; ?></td>
                
                <td> <?php echo  $total; ?> </td>
                
                <td>
                
                <a href="delete.php?ID=<?php echo $id ?>">Delete</a>
                
                
                 </td>
                
                  <td>
                
              <!--
                <a href="AccountInMonth.php?id=<?php // echo $id; ?>&fees=<?php //echo $fee; ?>">Update</a>
               -->
             
            
               <a href="#" data-role="update" data-id="<?php echo $id ;?>">Update</a>
          
               
               </td>
                
                 <!--
                <input style="border-radius:10%;" type="text"/>
                <input style="margin-left: 10px; background-color:blue;padding:7px;border-radius:12%;color:#fff;" type="Submit" value="Update"/>
                  -->
       
                
            </tr>
                
                <?php
            
             
            }
    
        
            echo "</table>";
            
          //  echo $number_of_page = ;

        
   

    
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

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var stid  = $('#'+id).children('td[data-target=stid]').text();
            var sect  = $('#'+id).children('td[data-target=sect]').text();
            var fees  = $('#'+id).children('td[data-target=fees]').text();

            $('#stid').val(stid);
            $('#sect').val(sect);
            $('#fees').val(fees);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#userId').val(); 
         var stid1 =  $('#stid').val();
          var sect2 =  $('#sect').val();
          var fees3 =   $('#fees').val();

          $.ajax({
              url      : 'update.php',
              method   : 'post', 
              data     : {stid1 : stid1 , sect2: sect2 , fees3 : fees3 , id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=stid]').text(stid1);
                             $('#'+id).children('td[data-target=sect]').text(sect2);
                             $('#'+id).children('td[data-target=fees]').text(fees3);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>

</html>


<?php  
          
     /*    
       if(isset($_REQUEST["submit"]))
               {
                   $stuid = ($_REQUEST['stuid']);
                   
                   $fees = ($_REQUEST['fees']);
                   
                    $id = ($_REQUEST['id']);
                   
                   
                   mysqli_query($con,"UPDATE account SET  student_id='$stuid',fees = '$fees' where id ='$id'");
                   
                   ?>
                   
                       <script type="text/javascript">

                                window.location="AccountInMonth.php";
                        </script>
                   
                   <?php
                   
                   
               }
          */
    
      }

      
}

else{
	echo "Invalid user";
	header("Location:Main.php?error=invalid user");
}
?>