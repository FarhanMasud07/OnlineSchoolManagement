
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
    


            if(isset($_POST["id"])){
            
                $id = $_POST["id"];
                $sc = $_POST["scode1"];
                $cn = $_POST["cname1"];
                $sn = $_POST["sname1"];
                $sm = $_POST["smark1"];
                
                $sql ="UPDATE subjectregistration SET subject_code = '$sc',class_name = '$cn',subject_name = '$sn',subject_mark = '$sm' where id ='$id'";
                
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