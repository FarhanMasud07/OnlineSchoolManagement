
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
<html lang="en" class ="mdl-js">
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
    
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    
    
   
          
       <style>
        
    *{
        box-sizing: border-box;
    }
    /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding-top: 50px;
            padding-left: 20px;
            padding-bottom: 10px;
            height: 70px; /* Should be removed. Only for demonstration */
            
            background-color: #d5f4e6;
        }
        
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
            
        }
        
        
        /* input 
        input[type=text] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
          border: none;
          border-bottom: 2px solid red;
        }
          */   
          input[type=submit] {
              float:right;
              width: 32%;
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 33px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
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
    
    
    <script type="text/javascript">
    
   
        /*
        function Authentication()
        {
            e = document.fm.stid.value;
            e = document.fm.fname.value;
            e = document.fm.lname.value;
            e = document.fm.dob.value;
            e = document.fm.mname.value;
            e = document.fm.fathername.value;
            e = document.fm.fomcontact.value;
          
            e = document.fm.class.value;
            e = document.fm.fees.value;

            
            
            if(e.length!=0)
                {
                    alert("Valid Data");
		            return true;
                }
            else{
                
                document.getElementById("msg").style.background="red";
                document.getElementById("msg").style.color="#fff";
                document.getElementById("msg").style.padding="8px";
                document.getElementById("msg").style.borderRadius="3%";
                document.getElementById("msg").style.width="50%";
                document.getElementById("msg").style.textAlign="center";
                 document.getElementById("msg").style.fontSize="14px";
                
                document.getElementById("msg").innerHTML="You Must Have To Entry The Data";
                
                return false;
            }
        }
      */
        
        
        //// authentication using javascript/////
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
  xmlhttp.open("GET","regSearch.php?q="+str,true);
  xmlhttp.send();
}
  
    
        
         function checkID()
        {
            var x =document.getElementsByName("stid")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("stid")[0].style.border="1px solid red";
			document.getElementById("corrID").innerHTML="";
			return false;
		}
		else
		{
		    ///^([1-9])+\-([0-9])+\-([1-9])+[a-zA-Z' ']/.test(x) || /^([1-9])+\-([0-9])+\-([1-9])+$/.test(x)
		    
			if( /^([0-9])+\-([0-9])+\-([a-zA-Z' '])/.test(x) || /^([0-9])+\-([0-9])+\-([0-9])+$/.test(x) || /^([0-9])+\-([0-9])+\-([0-9])+[a-zA-Z' ']/.test(x))
			{
				document.getElementById("corrID").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrID").style.color="green";
				document.getElementsByName("stid")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("stid")[0].style.border="1px solid red";
				document.getElementById("corrID").innerHTML="Invalid ID (ex : (19-0001-NA Or 19-0002-6 Or 19-0002-6=6B) Here 19 = admission year '-' 0001 = student id '-' NA = Nursery Sec A Or 6 = class 6 Or 6B=Class 6 sec B)";
				document.getElementById("corrID").style.color="red";
				return false;
			}
		}
            
        }
        
        
        function checkfname()
	{
		var err1,err2="";
		var x =document.getElementsByName("fname")[0].value.trim();
		if(x.length==0)
		{
            
			document.getElementsByName("fname")[0].style.border="1.1px solid red";
			document.getElementById("corrfname").innerHTML="";
			err1="Invalid First Name";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("fname")[0].style.border="1px solid red";
				document.getElementById("corrfname").innerHTML="Only Letter allowed";
				document.getElementById("corrfname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrfname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrfname").style.color="green";
				document.getElementsByName("fname")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
	function checklname()
	{
		var x =document.getElementsByName("lname")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("lname")[0].style.border="1px solid red";
			document.getElementById("corrlname").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("lname")[0].style.border="1px solid red";
				document.getElementById("corrlname").innerHTML="Only Letter allowed";
				document.getElementById("corrlname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrlname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrlname").style.color="green";
				document.getElementsByName("lname")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
	function checkManame()
	{
		var x =document.getElementsByName("mname")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("mname")[0].style.border="1px solid red";
			document.getElementById("corrmaname").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("mname")[0].style.border="1px solid red";
				document.getElementById("corrmaname").innerHTML="Only Letter allowed";
				document.getElementById("corrmaname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrmaname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrmaname").style.color="green";
				document.getElementsByName("mname")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
        
        function checkFaname()
	{
		var x =document.getElementsByName("fathername")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("fathername")[0].style.border="1px solid red";
			document.getElementById("corrmaname").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("fathername")[0].style.border="1px solid red";
				document.getElementById("corrfaname").innerHTML="Only Letter allowed";
				document.getElementById("corrfaname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrfaname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrfaname").style.color="green";
				document.getElementsByName("fathername")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
        
	
	function checkFOMContact()
	{
		var x =document.getElementsByName("fomcontact")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("fomcontact")[0].style.border="1px solid red";
			document.getElementById("corrphone").innerHTML="";
			return false;
		}
		else
		{
			if(!isNaN(x) && x.length==11)
			{
				document.getElementById("corrphone").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrphone").style.color="green";
				document.getElementsByName("fomcontact")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("fomcontact")[0].style.border="1px solid red";
				document.getElementById("corrphone").innerHTML="Invalid Number";
				document.getElementById("corrphone").style.color="red";
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
		var x =document.getElementsByName("section")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("section")[0].style.border="1px solid red";
			document.getElementById("corrsection").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("section")[0].style.border="1px solid red";
				document.getElementById("corrsection").innerHTML="Only Letter allowed";
				document.getElementById("corrsection").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrsection").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrsection").style.color="green";
				document.getElementsByName("section")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
       function checkFees()
	{
		var x =document.getElementsByName("fees")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("fees")[0].style.border="1px solid red";
			document.getElementById("corrfees").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[0-9]+$/.test(x))
			{
				document.getElementsByName("fees")[0].style.border="1px solid red";
				document.getElementById("corrfees").innerHTML="Only Number allowed";
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
				document.getElementById("corrFix").innerHTML="Can't Entry more than 2000";
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
			if(!/^[fpFP]/.test(x) && !/^[ppPP]/.test(x))
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
	/*
	function checkAccount()
	{
	     
		var x =document.getElementsByName("acdate")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("acdate")[0].style.border="1px solid red";
			document.getElementById("corrAccount").innerHTML="";
			return false;
		}
		else{
		
				document.getElementById("corrAccount").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrAccount").style.color="green";
				document.getElementsByName("acdate")[0].style.border="1px solid green";
				return true;

		}
		
	}*/
	
	function checkreg()
	{
        checkID();
		checkfname();
        checklname();
	    checkManame();
        checkFaname();
        checkFOMContact();
        checkClass();
        checkFees();
        checkSection();
        checkFixno();
        checkPcat();
        //checkAccount();
       
		
		
		if(checkID()==true && checkfname()==true && checklname()==true && checkManame()==true && checkFaname()==true && checkFOMContact()==true && checkClass()==true && checkFees()== true && checkSection()== true && checkFixno() == true && checkPcat()==true )
		{
			return true;
		}
		else
		{
            alert("Empty or Invalid Data are Not Allowed");
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
                    
                </div>


                <div class="row" style="width:100%;">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Admission Fees</h2>
                                     
           
                       
                                <div class="clearfix">
                                    
                                    
                                       <!-- javascript -->
                                         <div style="width:15%;border-radius:10%; float:right;"class="input-group">
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
                                
                           
                    
                                    
                                </div>
                                </div>
                                
                                <!--  onkeyup="showHint(this.value)" -->
                       
                              
                         <form method="post" name="fm" action="">
                                 
                                
                        <div class="row">
                                
                            
                            
                                <div class="column">
                                    <label>Account Date :</label>
                                    <input type="date" id="ac" name="acdate"  placeholder="---Date---" onkeyup="checkAccount()" style="margin-left:89px";>
                                    <span id="corrAccount"></span>
                                </div>
                                
                        
                                
                           
                       
                            
                             <div class="column">
                               <label>Student ID :</label>
                               
                                
                                <input type="text" name="stid" class=""
                               
                                onkeyup="checkID()"
                                 placeholder="---Student_ID---" style="margin-left:108.5px;">
                                 
                                 <!--<div style="margin-left:200px;padding:20px;" id="txtHint"></div>
                                -->
                                
                            <!--
                                <span style="background-color:red;color:#fff;margin-left:100px;padding:2px;border-radius:3%;" id="txtHint"></span>
                               --> 
                              <span id="corrID"></span>
                                
                            
                            </div>
                            
                            <div class="column">
                             
                             <label>First Name :</label>
                                <input type="text" id="ac" class="" name="fname" onkeyup="checkfname()" placeholder="---Firstname---"style="margin-left:107px";> 
                              <span id="corrfname"></span>
                         
                                
                            </div>
                            
                       
                            
                            <div class="column">
                               <label>Last Name :</label>
                                <input type="text" id="sc" class="" name="lname" onkeyup="checklname()" placeholder="---Last Name---" style="margin-left:107px;">
                                <span id="corrlname"></span>
                              
                            </div>
                            
                             <div class="column">
                               <label>Date of Birth :</label>
                               
                                
                                <input type="date" id="sec" class="" name="dob" onkeyup="checkdob()" placeholder="---Date of Birth---" style="margin-left:96px;">
                                
                                <span id="corrdob"></span>
                            
                            </div>
                            
                            
                            
                            <div class="column">
                               <label>Mother name :</label>
                                <input type="text" id="cl" class="" name="mname" onkeyup="checkManame()" placeholder="---Mother name ---" style="margin-left:91.3px;">
                                <span id="corrmaname"></span>
                            </div>
                            
                            <div class="column">
                               <label>Father Name :</label>
                               
                                
                                <input type="text" id="sec" class="" name="fathername" onkeyup="checkFaname()" placeholder="---Father Name---" style="margin-left:94.5px;">
                                <span id="corrfaname"></span>
                                
                            
                            </div>
                            
                             <div class="column">
                               <label>Father or Mother Contact :</label>
                               
                                
                                <input type="text" id="sec" class="" name="fomcontact" onkeyup="checkFOMContact()" placeholder="---Contact---" style="margin-left:16.5px;">
                                <span id="corrphone"></span>
                                
                            
                            </div>
                            
                            
                    
                               <div class="column">
                               <label>Class :</label>
                               
                                
                                <input type="text" id="sec" class="" name="class" onkeyup="checkClass()" placeholder="---Class---" style="margin-left:139.5px;">
                                
                                 <span id="corrclass"></span>
                                
                                </div>
                      
                                
                               <div class="column">
                               <label>Section :</label>
                               
                                
                                <input type="text" id="sec" class="" name="section" onkeyup="checkSection()" placeholder="---Section---" style="margin-left:127.5px;">
                                
                                   <span id="corrsection"></span>
                                
                                </div>
                           
                            
                    
                            
                            <div class="column">
                               <label>Admission Fees :</label>
                                <input type="text" id="fee" class="" name="fees" onkeyup="checkFees()" placeholder="---Fees---"style="margin-left:76px;">
                                
                                   <span id="corrfees"></span>
                            </div>
                            
                             <div class="column">
                               <label>Fixed Rate :</label>
                                <input type="text" id="frate" class="" name="fixedrate" onkeyup="checkFixno()" placeholder="---Number---"style="margin-left:109.5px;">
                                
                                <span id="corrFix"></span>
                                
                                
                            </div>
                            
                             <div class="column">
                               <label>Payment Catagory :</label>
                                <input type="text" id="pcat" name="pcatagory" class="" onkeyup="checkPcat()" placeholder="---Number---"style="margin-left:61.5px;">
                                
                                <span id="corrPcat"></span>
                                
                                
                            </div>
                            
                            <div class="column" >
                               
                                <input type="submit"  onclick ="return checkreg()"  name="Submit" value="Submit">
                           </div>
                                  
                             </br> </br>
                            
                            
                           
                                                                          
                         </div>  </br>  </br>
                         
                          
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
                <label>Fees</label>
                <input type="text" id="fees" class="form-control">
              </div>
              <div class="form-group">
                <label>Father or Mother Contact :</label>
                <input type="text" id="fomcontact" class="form-control">
              </div>

               <div class="form-group">
                <label>Fixed Rate :</label>
                <input type="text" id="fixedrate" class="form-control">
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
                        
                        
                         <!-- ////  --->
                          
     
                            <br/>
                            <p id="msg"></p> 
                           
                         <br/>
                         <br/>
                         
                         
                         
             <!-- *******************  FOR INSERT *******************-->                    
                          
     <?php
    
 
    $reg = array();
    require("LoginFromAnything.php");
   
    
    if(isset($_REQUEST["Submit"]) )
    {
        
        
        
            
             Registration("select *from stu_reg where student_id = '$_REQUEST[stid]'","select *from stu_reg where father_or_mother_contact = '$_REQUEST[fomcontact]'" ,"select *from stu_reg where dateofbirth = '$_REQUEST[dob]'","insert into stu_reg (student_id,firstname,lastname,dateofbirth,mother_name,father_name,father_or_mother_contact,class,Section,admission_fees,reg_fixedrate,payment_catagory,account_date) values ('$_POST[stid]','$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[mname]','$_POST[fathername]','$_POST[fomcontact]','$_POST[class]','$_POST[section]','$_POST[fees]','$_POST[fixedrate]','$_POST[pcatagory]','$_POST[acdate]')");
       /*
     $con = mysqli_connect("localhost","root","","reg");
    
    mysqli_query($con,"insert into stu_reg (student_id,firstname,lastname,dateofbirth,mother_name,father_name,father_or_mother_contact,class,admission_fees) values ('$_POST[stid]','$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[mname]','$_POST[fathername]','$_POST[fomcontact]','$_POST[class]','$_POST[fees]')")or die(mysqli_error($con));
      
         ?>
           <div class="alert alert-success col-lg2 col-lg-push-3">
                       Insert Success.
           </div> 
                  
        <?php
        
        */
        
    
    }
    
      ShowRegistration("select * from stu_reg ORDER by id DESC");
      ?>
   
				 <div class="col-xs-15 col-sm-15 ">
            
        <?php
        
            //echo "<div class='card-body'>";
            
		//	echo "<div class='table-scrollable'>";
			
            echo "<table class='table table-striped table-bordered table-hover table-checkable order-column valign-middle'>";
            
            echo "<tr>";
            
            
            echo "<th>"; echo "Student ID"; echo "</th>";
            echo "<th>"; echo "Account Date"; echo "</th>";
            echo "<th>"; echo "First Name"; echo "</th>";
            echo "<th>"; echo "Last Name"; echo "</th>";
            echo "<th>"; echo "Date of Birth "; echo "</th>";
            echo "<th>"; echo "Mother Name"; echo "</th>";
            echo "<th>"; echo "Father Name"; echo "</th>";
            echo "<th>"; echo "Father Or Mother Contact"; echo "</th>";
            echo "<th>"; echo "Class"; echo "</th>";
            echo "<th>"; echo "Section"; echo "</th>";
            echo "<th>"; echo "Payment Catagory"; echo "</th>";
            echo "<th>"; echo "Fixed Rate"; echo "</th>";
            echo "<th>"; echo "Fees"; echo "</th>";
            echo "<th>"; echo "Due Fees"; echo "</th>";
            echo "<th>"; echo "Total Amount"; echo "</th>";
            echo "<th>"; echo "Delete"; echo "</th>";
           echo "<th>"; echo "<center>Update</center>"; echo "</th>";
            
            
           
            
            //echo "</th>";
    
            echo "</tr>";
        
            foreach($reg as $a)
            {
                $id = $a["id"];
                $stu_id = $a["student_id"];
                $fname = $a["firstname"];
                $lname = $a["lastname"];
                $dob = $a["dateofbirth"];
                $mname = $a["mother_name"];
                $faname = $a["father_name"];
                $faomaname = $a["father_or_mother_contact"];
                $class = $a["class"];
                $sect = $a["Section"];
                $fee = $a["admission_fees"];
                $duefee = $a["due_fees"];
                $total = $a["total"];
                $pc = $a["payment_catagory"];
                $fr = $a["reg_fixedrate"];
                $acdate = $a["account_date"];
               
                    ?>
               
                 <tr id ="<?php echo $id ;?>">
                
        
                <td><?php echo  $stu_id; ?></td>
                <td><?php echo  $acdate; ?></td>
                <td><?php echo  $fname; ?></td>
                <td><?php echo  $lname; ?></td>
                <td><?php echo  $dob; ?></td>
                <td><?php echo  $mname; ?></td>
                <td><?php echo  $faname; ?></td>
                <td data-target="fomcontact"><?php echo  $faomaname; ?></td>
                <td><?php echo  $class; ?></td>
                
                <td><?php echo  $sect; ?></td>
                <td><?php echo  $pc; ?></td>
                <td data-target="fixedrate"><?php echo  $fr; ?></td>
                <td data-target="fees"><?php echo  $fee; ?></td>
                 <td> <?php echo  $duefee; ?></td>
                 <td> <?php echo  $total; ?> </td>
                
                 <td>
                
                <a href="deleteReg.php?ID=<?php echo $id ?>">Delete</a>
                
                
                 </td>
                
                
                    <td>
                        
                        <a href="#" data-role="update" data-id="<?php echo $id ;?>">Update</a>
                        
                    </td>
                
                </tr>
                
                
                 
               
               <?php
             
               

           
            }
    
            
    
            echo "<table class='table table-bordered'>";
            echo "<tr>";
                  echo "<th>"; echo "<center>Total Admission Income</center>"; echo "</th>";
             echo "</tr>";
            
            echo "<tr>";
             echo "<td>"; echo  "<center>"; echo $total; echo  "</center>"; echo "</td>";
    
           echo "</tr>";
             echo "<table>";
        
            echo "</table>";
            
           // echo "</div>";
            
           // echo "</div>";
            
            
            ?>
    </div>
    
     
    
       
                
                
                
            
                                
                         
                           
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
           
           
            var fees  = $('#'+id).children('td[data-target=fees]').text();
            var fomcontact  = $('#'+id).children('td[data-target=fomcontact]').text();
            var fixedrate  = $('#'+id).children('td[data-target=fixedrate]').text();

           
            $('#fees').val(fees);
            $('#fomcontact').val(fomcontact);
            $('#fixedrate').val(fixedrate);
            
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#userId').val(); 
     
         
          var fees =   $('#fees').val();
          var fomcontact =   $('#fomcontact').val();
          var fixedrate =   $('#fixedrate').val();

          $.ajax({
              url      : 'updateReg.php',
              method   : 'post', 
              data     : {fees : fees , fomcontact: fomcontact , fixedrate: fixedrate , id: id},
              success  : function(response){
                            // now update user record in table 
                             
                             $('#'+id).children('td[data-target=fees]').text(fees);
                             $('#'+id).children('td[data-target=fomcontact]').text(fomcontact);
                             $('#'+id).children('td[data-target=fixedrate]').text(fixedrate);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>


</html>


<?php    
    
      }
      
      
}

else{
	echo "Invalid user";
	header("Location:Main.php?error=invalid user");
}
?>