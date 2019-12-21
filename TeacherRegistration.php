


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Form </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    
    <script>
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
  xmlhttp.open("GET","TeacherAjaxReg.php?q="+str,true);
  xmlhttp.send();
}
        
        function showHint1(str) {
  if (str.length==0) { 
    document.getElementById("txtHint1").innerHTML="";
    document.getElementById("txtHint1").style.border="0px";
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
      document.getElementById("txtHint1").innerHTML=this.responseText;
      document.getElementById("txtHint1").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","TeacherAjaxID.php?p="+str,true);
  xmlhttp.send();
}
        
        function checkfname()
	{
		var err1,err2="";
		var x =document.getElementsByName("firstname")[0].value.trim();
		if(x.length==0)
		{
            
			document.getElementsByName("firstname")[0].style.border="1.1px solid red";
			document.getElementById("corrfname").innerHTML="";
			err1="Invalid First Name";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("firstname")[0].style.border="1px solid red";
				document.getElementById("corrfname").innerHTML="Only Letter allowed";
				document.getElementById("corrfname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrfname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrfname").style.color="green";
				document.getElementsByName("firstname")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
        
        function checklname()
	{
		var x =document.getElementsByName("lastname")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("lastname")[0].style.border="1px solid red";
			document.getElementById("corrlname").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("lastname")[0].style.border="1px solid red";
				document.getElementById("corrlname").innerHTML="Only Letter allowed";
				document.getElementById("corrlname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrlname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrlname").style.color="green";
				document.getElementsByName("lastname")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
        
        function checkUname()
	{
		var x =document.getElementsByName("username")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("username")[0].style.border="1px solid red";
			document.getElementById("corrUname").innerHTML="";
			return false;
		}
		else
		{
			if(!/^[a-zA-Z' ']/.test(x))
			{
				document.getElementsByName("username")[0].style.border="1px solid red";
				document.getElementById("corrUname").innerHTML="Only Letter allowed";
				document.getElementById("corrUname").style.color="red";
				return false;
			}
			else
			{
				document.getElementById("corrUname").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrUname").style.color="green";
				document.getElementsByName("username")[0].style.border="1px solid green";
				return true;
			}
		}
		
	}
        
        function checkPassword()
	{
		var x =document.getElementsByName("password")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("password")[0].style.border="1px solid red";
			document.getElementById("corrPass").innerHTML="";
			return false;
		}
		else
		{
			if(x.length>=8)
			{
				document.getElementById("corrPass").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrPass").style.color="green";
				document.getElementsByName("password")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("password")[0].style.border="1px solid red";
				document.getElementById("corrPass").innerHTML="Password Length require minimum 8 Characters";
				document.getElementById("corrPass").style.color="red";
				return false;
			}
		}
		
	}
        function checkFOMContact()
	{
		var x =document.getElementsByName("contact")[0].value.trim();
		if(x.length==0)
		{
			document.getElementsByName("contact")[0].style.border="1px solid red";
			document.getElementById("corrphone").innerHTML="";
			return false;
		}
		else
		{
			if(!isNaN(x) && x.length==11)
			{
				document.getElementById("corrphone").innerHTML="<i class='fas fa-check'></i>";
				document.getElementById("corrphone").style.color="green";
				document.getElementsByName("contact")[0].style.border="1px solid green";
				return true;
			}
			else
			{
				document.getElementsByName("contact")[0].style.border="1px solid red";
				document.getElementById("corrphone").innerHTML="Invalid Number";
				document.getElementById("corrphone").style.color="red";
				return false;
			}
		}
		
	}
        function checkreg()
	{
        
       checkfname();
        checklname();
        checkPassword();
        checkFOMContact();
        checkUname();
        
		
		
		if(checkfname()==true && checklname()==true && checkPassword()==true && checkFOMContact()==true && checkUname()==true )
		{
			return true;
		}
		else
		{
            alert("Empty or Invalid Data are Not Allowed");
			return false;
		}
	}
        
        ///^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)
  
    </script>
</head>

<br>

<div class="col-lg-12 text-center ">
    <a href="index.php"><h1 style="font-family:Lucida Console">PRD SCHOOL</h1></a>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <a href="index.php"><h2>Teacher Registration Form</h2><br></a>

                    <div>
                        <input type="text" class="form-control"  placeholder="FirstName" name="firstname" onkeyup="checkfname()" required=""/>
                        <span id="corrfname"></span>
                        
                        
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" onkeyup="checklname()" required=""/>
                        
                         <span id="corrlname"></span>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" onkeyup="checkUname()" name="username" required=""/>
                        
                        <span id="corrUname"></span>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" onkeyup="checkPassword()" required=""/>
                         <span  id="corrPass"></span>
                    </div>
                    <div>
                        <input type="text" class="form-control" onkeyup="showHint(this.value)" placeholder="Email" name="email" required=""/>
                        
                         <span  id="txtHint"></span>
                        
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Contact" name="contact" onkeyup="checkFOMContact()" required=""/>
                        
                        <span id="corrphone"></span>
                    </div>
                    
                    <div>
                        <input type="text" class="form-control" onkeyup="showHint1(this.value)" placeholder="ID" name="ID" required=""/><span  id="txtHint1"></span>
                         
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" onclick="return checkreg()" value="Register">
                    </div>

                </form>
            </section>
            
            <?php
        
   $TeacherReg = array();
  require("LoginFromAnything.php");
    

    if(isset($_POST["submit1"]) )
    {
        TeacherRegistration("insert into teacher(firstname,lastname,username,password,email,contact,teacher_id) values ('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[ID]')");
    }


?>




    </div>

    


</body>
</html>



