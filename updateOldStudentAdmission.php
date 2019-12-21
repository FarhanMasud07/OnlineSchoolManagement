

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


                        if(isset($_POST["fees"])){
                        
                            $id = $_POST["id"];
                            
                            $fees = $_POST["fees"];
                            
                            // $fOM_C = $_POST["fomcontact"];
                             
                             $f_R = $_POST["fixedrate"];
                            
                            $sql ="UPDATE oldstu_admission SET admission_fees = '$fees',  reg_fixedrate = '$f_R' where id ='$id'";
                            
                            $result= mysqli_query($conn,$sql) or die("couldnot update".mysqli_error($conn));
                            
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