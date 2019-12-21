
<?php

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


            if(isset($_POST["sect2"])){
            
                $id = $_POST["id"];
                $s_id = $_POST["stid1"];
                $sec = $_POST["sect2"];
                $fees = $_POST["fees3"];
                
                $sql ="UPDATE class_reg SET class_no = '$s_id',student_id = '$sec',section = '$fees' where id ='$id'";
                
                 mysqli_query($conn,$sql) or die("couldnot update".mysqli_error($conn));
                
                if($result)
                {
                    echo "Data Updated";
                }
                else
                {
                    echo "Bingo";       
                }
                
            }
            
    }
    
?>