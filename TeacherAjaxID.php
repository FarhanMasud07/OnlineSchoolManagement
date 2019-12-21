<?php


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
    


              $sq = "select * from teacher where teacher_id like '".$_REQUEST["p"]."%'";
              $result=mysqli_query($conn,$sq)or die(mysqli_error($conn));
            
                $count = mysqli_num_rows($result);
                if($count>0)
                {
                        echo "Already Exist";
                }
                else{
                        echo "Not Exist";
                }
       }

?>