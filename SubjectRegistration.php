
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
        
        function checkSubjectCode()
        {
            //Scode, corrSCode
            
            var err1,err2="";
		var x =document.getElementsByName("Scode")[0].value.trim();
		if(x.length==0)
		{
            
			document.getElementsByName("Scode")[0].style.border="1.1px solid red";
			document.getElementById("corrSCode").innerHTML="";
			err1="Invalid First Name";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z0-9' ']/.test(x) )
			{
				document.getElementsByName("Scode")[0].style.border="1px solid red";
				document.getElementById("corrSCode").innerHTML="Only Letter and Number allowed";
				document.getElementById("corrSCode").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrSCode").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrSCode").style.color="green";
				document.getElementsByName("Scode")[0].style.border="1px solid green";
				return true;
			}
		}
		
            
}
        
        
        function checkClassName()
        {
            var b = document.fm.cname.value; 
        var x =document.getElementsByName("cname")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("cname")[0].style.border="1px solid red";
			document.getElementById("corrCName").innerHTML="";
			return false;
		}
        else if(b>12)
                {
                    document.getElementsByName("cname")[0].style.border="1px solid red";
				document.getElementById("corrCName").innerHTML="Invalid Count";
				document.getElementById("corrCName").style.color="red";
				return false;
                }
		else
		{
			if(!isNaN(x) && (x.length==1 || x.length==2))
			{
				document.getElementById("corrCName").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrCName").style.color="green";
				document.getElementsByName("cname")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("cname")[0].style.border="1px solid red";
				document.getElementById("corrCName").innerHTML="Invalid Number";
				document.getElementById("corrCName").style.color="red";
				return false;
			}
		}
		
            
    }
        
        
        function checkSubjectName()
        {
            
            var err1,err2="";
		var x =document.getElementsByName("sname")[0].value.trim();
		if(x.length==0)
		{
            
			document.getElementsByName("sname")[0].style.border="1.1px solid red";
			document.getElementById("corrSName").innerHTML="";
			err1="Invalid First Name";
			return false;
		}
		else
		{
			if(/^[0-9]/.test(x) )
			{
				document.getElementsByName("sname")[0].style.border="1px solid red";
				document.getElementById("corrSName").innerHTML="Only Letter allowed";
				document.getElementById("corrSName").style.color="red";
				return false;
			}
           
        
			else
			{
				document.getElementById("corrSName").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrSName").style.color="green";
				document.getElementsByName("sname")[0].style.border="1px solid green";
				return true;
			}
		}
		
            

}
        
        
        function checkSubjectMark()
        {
            var b = document.fm.smark.value; 
        var x =document.getElementsByName("smark")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("smark")[0].style.border="1px solid red";
			document.getElementById("corrSMark").innerHTML="";
			return false;
		}
        else if(b>100)
                {
                    document.getElementsByName("smark")[0].style.border="1px solid red";
				document.getElementById("corrSMark").innerHTML="Invalid Number";
				document.getElementById("corrSMark").style.color="red";
				return false;
                }
		else
		{
			if(!isNaN(x))
			{
				document.getElementById("corrSMark").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrSMark").style.color="green";
				document.getElementsByName("smark")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("smark")[0].style.border="1px solid red";
				document.getElementById("corrSMark").innerHTML="Invalid Number";
				document.getElementById("corrSMark").style.color="red";
				return false;
			}
		}
		
		
    }
        
         function check()
	{
        checkClassName();
        checkSubjectMark();
        checkSubjectName();
        checkSubjectCode();
		
        
        if(checkClassName()==true && checkSubjectMark()==true && checkSubjectName()==true && checkSubjectCode()==true)
            {
                return true;
            }
        else{
            
            alert("You Can't Entry Empty or Invalid Data");
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
                        <h3>Subject Registration Page</h3>
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
                                <h2>Add Subject Information</h2>
                                     <label class="text-danger">  

                                    </label>  

                                <div class="clearfix"></div>
                                
                         <form method="post" name="fm">
                                    </div>
                            <div>
                             
                               <label>Subject Code :</label>
                                <input type="text" id="cl" name="Scode" onkeyup="checkSubjectCode()" placeholder="---Code---"style="margin-left:11.5px";>
                                
                                <span id="corrSCode"></span>
                            </div>
                            
                            <div >
                               <label>Class Name :</label>
                                <input type="text" id="sc" name="cname" onkeyup="checkClassName()"  placeholder="---C_Name---" style="margin-left:21px;">
                                
                                <span id="corrCName"></span>
                            </div>
                            
                            <div>
                               <label>Subject Name :</label>
                                <input type="text" id="sec" name="sname" onkeyup="checkSubjectName()" placeholder="---S_Name---" style="margin-left:8px;">
                                
                                <span id="corrSName"></span>
                            </div>
                            
                            <div>
                               <label>Subject Mark :</label>
                                <input type="text" id="sec" name="smark" onkeyup="checkSubjectMark()" placeholder="---S_Mark---"style="margin-left:12.5px;">
                                
                                <span id="corrSMark"></span>
                                
                            </div>
                            
                            
                            <br/>
                            
                            <div>
                               
                                <input type="submit" id="log" name="Submit" onclick="return check()" value="Submit">
                            </div>
                                                                           
                        </form>
                        
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
                <label>Subject Code</label>
                <input type="text" id="scode" class="form-control">
              </div>
              <div class="form-group">
                <label>Class Name</label>
                <input type="text" id="cname" class="form-control">
              </div>

               <div class="form-group">
                <label>Subject Name</label>
                <input type="text" id="sname" class="form-control">
              </div>
               
               <div class="form-group">
                <label>Subject Mark</label>
                <input type="text" id="smark" class="form-control">
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
              
                         
                         <br/>
                         <br/>
                         
                         
                         
             <!-- *******************  FOR INSERT ******************* -->                       
                          
                           <?php
                                
                        $sreg = array();
         require("LoginFromAnything.php");
                   
          
          
    if(isset($_REQUEST["Submit"]) )
    {
        
       
          SubjectRegistration("select *from subjectregistration where subject_name = '$_POST[sname]'","insert into SubjectRegistration (subject_code,class_name,subject_name,subject_mark) values ('$_POST[Scode]','$_POST[cname]','$_POST[sname]','$_POST[smark]')");
          
          
    }
    
    showSubject("select * from subjectregistration");
          
             echo "<table class='table table-bordered'>";
            
            echo "<tr>";
            
           
          echo "<th>"; echo "Subject Code"; echo "</th>";
          echo "<th>"; echo "Class Name"; echo "</th>";
          echo "<th>"; echo "Subject Name"; echo "</th>";
          echo "<th>"; echo "Subject Mark"; echo "</th>";
          

            echo "<th>"; echo "Delete"; echo "</th>";
            echo "<th>"; echo "<center>Update</center>"; echo "</th>";
         
            
           
            
            //echo "</th>";
    
            echo "</tr>";
             foreach($sreg as $sr)
            {
                 $id = $sr["id"];
                  $sc = $sr["subject_code"];
                  $cn = $sr["class_name"];
                  $sn = $sr["subject_name"];
                 $sm = $sr["subject_mark"];
                 
                 
                 ?>
                 
                     <tr id ="<?php echo $id ;?>">
                        <td data-target="scode"><?php echo $sc;?></td>
                         
                         <td data-target="cname" ><?php echo $cn;?></td >
                         
                         <td data-target="sname"><?php echo $sn;?></td>
                         <td data-target="smark"><?php echo $sm;?></td>
                         
                         <td>
                
                        <a href="DeleteSubject.php?ID=<?php echo $id ?>">Delete</a>


                         </td>
                         
                         <td>
                         
                         
                          <a href="#" data-role="update" data-id="<?php echo $id ;?>">Update</a>
          
               
                        </td>
                
                     
                     
                     </tr>
                 
                 <?php
                 
                 
            }
          
           echo "</table>";
                       
?>
       
                
                
                
            
                                
                         
                           
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

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var scode  = $('#'+id).children('td[data-target=scode]').text();
            var cname  = $('#'+id).children('td[data-target=cname]').text();
            var sname  = $('#'+id).children('td[data-target=sname]').text();
            var smark  = $('#'+id).children('td[data-target=smark]').text();

            $('#scode').val(scode);
            $('#cname').val(cname);
            $('#sname').val(sname);
            $('#smark').val(smark);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#userId').val(); 
         var scode1 =  $('#scode').val();
          var cname1 =  $('#cname').val();
          var sname1 =   $('#sname').val();
           var smark1 =   $('#smark').val();

          $.ajax({
              url      : 'updateSubject.php',
              method   : 'post', 
              data     : {scode1 : scode1 , cname1: cname1 , sname1 : sname1 , smark1 : smark1 , id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=stid]').text(scode1);
                             $('#'+id).children('td[data-target=sect]').text(cname1);
                             $('#'+id).children('td[data-target=fees]').text(sname1);
                             $('#'+id).children('td[data-target=fees]').text(smark1);
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