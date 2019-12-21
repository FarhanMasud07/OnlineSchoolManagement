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
  

                            
                            if(isset ($_GET["ID"]))
                            {
                                    
                                
                                    $id = $_GET["ID"];
                            
                                    mysqli_query($conn,"delete from oldstu_admission where id=$id");
                                
                            
                            ?>
                            
                            
                                    <script type="text/javascript">
                            
                                      window.location="oldStudentAnualFees.php";
                                        
                                       
                            
                                    </script>
                            <?php
                                
                                
                            }
                            
                            else
                            
                            {
                                    
                                ?>
                                
                                       <script type="text/javascript">
                            
                                        window.location="SignupStudent.php";
                            
                                    </script>
                                
                                <?php
                            
                            }
                }
                
?>
