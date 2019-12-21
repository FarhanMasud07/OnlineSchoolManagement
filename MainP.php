

<?php

$login = array();

$loginTeacher = array();

$data = array();




require("LoginFromAnything.php");




FromMySql("select * from userauth","select * from teacher");




session_start();

$duration = 600;



if(isset($_POST["submit"])){
    
    
   if(strlen($_POST["uname"])==0  or  strlen($_POST["password"])==0 )
        {
            header("Location:Main.php?error=Username Or Password Cannot Be Empty");
        }
    
    
    
    else{
      
   $count = 0;
        
    foreach($login as $a)
    {
        

        
        
        if($a['uname']==$_POST['uname'] && $a['password']==$_POST['password'])
        {
         
           //$_SESSION["Pattern"]="Pattern1234555";
            
            
            $_SESSION["flag"] = array(
                    
                "start" => time(),
                "duration" => $duration
            
            );
            
            
            ?>
            
            <script type="text/javascript">
                
                window.location="MyHome.php";


            </script>
            
            <?php
            
            $count++;
     
        }
  
     }
        
           $count1 = 0;
        
    foreach($loginTeacher as $b)
    {
        

        
        
        if($b['teacher_id']==$_POST['uname'] && $b['password']==$_POST['password'])
        {
         
           $_SESSION["flag"]="Pattern1234";
            
            $_SESSION["teacher_id"]=$b["teacher_id"];
             $_SESSION["teacher_name"]=$b["teacher_name"];
            
            
            
            /*$_SESSION["flag"] = array(
                    
                "start" => time(),
                "duration" => $duration
            
            );*/
            
           //echo $b["email"];
            
            /*foreach($data as $d){
                
                 $_SESSION["purl"]=$d["purl"];
                $_SESSION["pid"]=$d["pid"];*/
                
            
          
            
            ?>
            <script type="text/javascript">
                
                window.location="TeacherHomePage.php";


            </script>
            <?php
            
            //echo "<script>window.open(TeacherHomePage.php)</script>";
                
           /// }
            
            $count1++;
     
        }
  
     }
        
        
      if($count == 0 && $count1 == 0)
      {
          echo "Cant Recognize you";
          header("Location:Main.php?error=invalid user");
      }
        
    }
        
}






?>