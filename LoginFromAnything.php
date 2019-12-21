   <?php
   
   //////Login//////
   
   function FromMySql($sql,$sql1)
   {
       //datasource = "mysql";
       global $login;
       
       global $loginTeacher;
       
       global $data;
       
       $servername = "localhost";
        $username = "peacffkx_Farhan";
        $password = "Sherlock1234";
        $db = "peacffkx_login";
           
       $conn = mysqli_connect("$servername","$username","$password","$db");
       
       
       if(!$conn)
       {
           die("Connection failed: " . mysqli_connect_error());
       }
       else{
      
       
       $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
       
       $login = array();
       
       while($row = mysqli_fetch_assoc($result))
       {
           $mr = array();
           
           $mr["id"] = $row["id"];
           $mr["uname"] = $row["username"];
           $mr["password"] = $row["password"];
           $mr["email"] = $row["email"];
           
           $login[] = $mr;
           
       }
       
       $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
       
       $loginTeacher = array();
       
        while($row = mysqli_fetch_assoc($result1))
       {
           $tchr = array();
           
          
           $tchr["teacher_name"] = $row["teacher_name"];
           $tchr["teacher_id"] = $row["teacher_id"];
            $tchr["password"] = $row["password"];
            
            
            
           
           $loginTeacher[] = $tchr;
           
       }
       
     }
    
       
}

/////ClASS REG ////////
function classRegistration($sql)
{
         
        
    global $class;
    
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
     
    
     mysqli_query($conn,$sql);
    
     
    
    ?>
        <div class="alert alert-success col-lg2 col-lg-push-3">
                      Insert Success.
                  </div>
       
    
    <?php
    }
    
    
}

////// Show Class ///////

function showClass($sql)
{
    global $class;
    
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
    
     $result=mysqli_query($conn,$sql)or die(mysqli_error($con));
    
      while($row=mysqli_fetch_assoc($result))
      {
          $class[] = $row;
      }
    }
    
}


////// SUBJECT REGISTRATION //////

function SubjectRegistration($sql,$sql1)
{
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
    
      
                      $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
                    
                    $count = mysqli_num_rows($result);
                    
                    if($count==0)
                    {
                       
                       mysqli_query($conn,$sql1)or die(mysqli_error($conn));
                        
                        
                            ?>
                        <div class="alert alert-success col-lg2 col-lg-push-3">
                                      Insert Successfull.
                                  </div>
                       
                    
                    <?php    
                       
                    
                   
                    }
                        
                    
                    else{
                    
                            ?>
                        <div class="alert alert-success col-lg2 col-lg-push-3">
                                      Subject Name Can't Be the Same .
                                  </div>
                       
                    
                    <?php    
                
                    }
                    
    }
    
    
}


////// Show Subjects /////////

function showSubject($sql)
{
    global $sreg;
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
    
                      $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
                     while($row=mysqli_fetch_assoc($result))
                      {
                          $sreg[] = $row;
                      }
                }
}



//// Student Registration //////
function Registration($sql1,$sql2,$sql3,$sql4)
{
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
    
                        $result1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
                        
                        $result2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
                        
                        $result3=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
                        
                      
                        
                         $count1 = mysqli_num_rows($result1) ;
                        
                         $count2 = mysqli_num_rows($result2) ;
                        
                        
                         if($count1>0)
                        {
                            ?>
                               <div class="alert alert-success col-lg2 col-lg-push-3">
                                         Student ID Already Inserted
                               </div> 
                                      
                            <?php
                        }
                        else if($count2>0)
                        {
                            ?>
                               <div class="alert alert-success col-lg2 col-lg-push-3">
                                         Contact Already Inserted
                               </div> 
                                      
                            <?php
                        }
                       
                        else{
                            
                            mysqli_query($conn,$sql4);
                            
                             ?>
                               <div class="alert alert-success col-lg2 col-lg-push-3">
                                           Insert Success.
                               </div> 
                                      
                            <?php
                            
                        
                        }
    
                }
}

///// Show Registration //////

function ShowRegistration($sql)
{
    global $reg;
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
    
                  $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
                
                $reg = array();
                
                      $tot = 0;
                      for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
                       {
                                  
                                    $re = array();
                                    $re["id"] =  $row["id"];
                                    $re["student_id"] =  $row["student_id"];
                                    $re["firstname"] = $row["firstname"];
                                    $re["lastname"] = $row["lastname"];
                                    $re["dateofbirth"] = $row["dateofbirth"];
                                    $re["mother_name"] = $row["mother_name"];
                                    $re["father_name"] = $row["father_name"];
                                    $re["father_or_mother_contact"] = $row["father_or_mother_contact"];
                                    $re["class"] = $row["class"];
                                    $re["Section"] = $row["Section"];
                                   
                                    $re["admission_fees"] = $row["admission_fees"];
                                    $re["account_date"] = $row["account_date"];
                                    
                                    
                                     $re["reg_fixedrate"]=$row["reg_fixedrate"];
                                    
                                    
                                    $re["payment_catagory"]=$row["payment_catagory"];
                                       
                                  
                                       
                                    $due = $row["reg_fixedrate"]-$row["admission_fees"];
                                    
                                    $re["due_fees"] = $due;
                                    
                                    $tot = $tot+$row["admission_fees"];
                                    
                                    $re["total"] = $tot;
                                  
                                  
            
                                   
                               $reg[] = $re;
                             
                              
                             }
                                
                }
           
}

////Old Student Admission //////
function oldStudentAdmission($sql1)
{
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
    
                        //$result1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
                        
                       // $result2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
                        
                        //$result3=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
                        
                      
                        
                       //  $count1 = mysqli_num_rows($result1) ;
                        
                        // $count2 = mysqli_num_rows($result2) ;
                        
                        
                        
                            mysqli_query($conn,$sql1);
                            
                             ?>
                               <div class="alert alert-success col-lg2 col-lg-push-3">
                                           Insert Success.
                               </div> 
                                      
                            <?php
                            
                        
     }
     
}

///// Old Show Registration /////loadFromMySQLSpecificOldStudentAnual/

function oldStudentShowAdmission($sql)
{
    global $oldStudentAdmission;
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
    
                  $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
                
                $oldStudentAdmission = array();
                
                      $tot = 0;
                      for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
                       {
                                  
                                    $re = array();
                                    $re["id"] =  $row["id"];
                                    $re["student_id"] =  $row["student_id"];
                                    $re["firstname"] = $row["firstname"];
                                    $re["lastname"] = $row["lastname"];
                                    $re["dateofbirth"] = $row["dateofbirth"];
                                    $re["mother_name"] = $row["mother_name"];
                                    $re["father_name"] = $row["father_name"];
                                    //$re["father_or_mother_contact"] = $row["father_or_mother_contact"];
                                    $re["class"] = $row["class"];
                                    $re["Section"] = $row["Section"];
                                   
                                    $re["admission_fees"] = $row["admission_fees"];
                                    $re["account_date"] = $row["account_date"];
                                    
                                    
                                     $re["reg_fixedrate"]=$row["reg_fixedrate"];
                                    
                                    
                                    $re["payment_catagory"]=$row["payment_catagory"];
                                       
                                  
                                       
                                    $due = $row["reg_fixedrate"]-$row["admission_fees"];
                                    
                                    $re["due_fees"] = $due;
                                    
                                    $tot = $tot+$row["admission_fees"];
                                    
                                    $re["total"] = $tot;
                                  
                                  
            
                                   
                               $oldStudentAdmission[] = $re;
                             
                              
                             }
                                
                }
           
}

////// Teacher Registration //////

function TeacherRegistration($sql)
{
    
     $servername = "localhost";
        $username = "peacffkx_Farhan";
        $password = "Sherlock1234";
        $db = "peacffkx_login";
           
       $conn = mysqli_connect("$servername","$username","$password","$db");
       
       
       if(!$conn)
       {
           die("Connection failed: " . mysqli_connect_error());
       }
       else{
    
    
    
             mysqli_query($conn,$sql) or die(mysqli_error($conn));
            
             ?>
                   <div class="alert alert-success col-lg2 col-lg-push-3">
                               Insert Success.
                   </div> 
                          
                <?php
       }
    
    
    
    
}

////// Expend Show ///////

function ExpendShow($sql1,$sql2,$sql3)
{
    
    //global $account;
    global $expend;
    global $expend1;
    global $expend2;
    
    
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

    
                      $result=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
                    
                    //$account = array();
                    $expend = array();
                    
                    $expend1 = array();
                    $expend2 = array();
                
                    
                   
                    
                             
                              $tot = 0;
                              for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
                                    {
                                  
                                  $acc = array();
                                      
                                       $acc["fees"] = $row["fees"];
                                
                                        $tot = $tot+$row["fees"];
                           
                                        $acc["total"] = $tot;
                              
                                  $expend1[] = $acc;
                                  
                                    }
                    
                    
                     $result1=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
                    
                        
                    
                       $tot1 = 0;
                              for($i=0;$i<$row= mysqli_fetch_assoc($result1);$i++)
                                    {
                                  
                               $ex = array();
                               
                               $ex["expend_date"] = $row["expend_date"];
                               
                                $ex["teachers_salary"] = $row["teachers_salary"];
                               
                                $ex["books_purchase"] = $row["books_purchase"];
                               
                                $ex["others"] = $row["others"];
                                  
                                  
                                   $tot1 = $tot1+$row["teachers_salary"]+$row["books_purchase"]+$row["others"];
                                  
                                $ex["total"] = $tot1;
                                  
                                  $expend[]=$ex;
                              }
                    
                    
                    
                    
                    
                    
                          $result2=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
                          
                           
                      $total = 0;
                              for($j=0;$j<$row= mysqli_fetch_assoc($result2);$j++)
                                    {
                                  
                                  $addmission = array();
                                     
                                       $addmission["admission_fees"] = $row["admission_fees"];
                                  
                                      
                                      
                                        $total = $total+$row["admission_fees"];
                                        
                                       
                                  
                                        $addmission["total"] = $total;
                                
                                  $expend2[] = $addmission;
                                  
                                    }
                }
                   
   
    
   
}

///// Expend ///////

function Expend($sql)
{
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

    
     
                        mysqli_query($conn,$sql);
                        
                         ?>
                           <div class="alert alert-success col-lg2 col-lg-push-3">
                                       Insert Success.
                           </div> 
                                  
                        <?php
                }
    
}
/////// Account Insert/////

function  Account($sql,$sql1,$sql2)
{
    
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
       
        
          
        
        $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql1);
    
    
    
       $count = mysqli_num_rows($result);
     $count1 = mysqli_num_rows($result1);
     //$count2 = mysqli_num_rows($result2);
    
    
    if($count==0 && $count1!=0)
    {
       
         ?>
           <div class="alert alert-success col-lg2 col-lg-push-3">
                       Same Slip Number for another Student ID Cannot Insert!
           </div> 
                  
        <?php
        
    }
    else
    {
         mysqli_query($conn,$sql2);
        
         ?>
           <div class="alert alert-success col-lg2 col-lg-push-3">
                       Insert Success.
           </div> 
                  
        <?php
        
    }
        
    }
    
} 


///////// Notice /////////

function  Notice($sql)
{
    
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
        
         mysqli_query($conn,$sql);
        
         ?>
           <div class="alert alert-success col-lg2 col-lg-push-3">
                       Insert Success.
           </div> 
                  
        <?php
    }
    
}   

/////// Account Show ///////



function show($sql)
{
     global $account;
    global $expend;
    
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
    
      $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
    
    $account = array();
    $expend = array();

    
   

             
              $tot = 0;
              for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
            {
                  
                  $acc = array();
                  $acc["id"] =  $row["id"];
                      $acc["account_date"] =  $row["account_date"];
                       $acc["student_id"] = $row["student_id"];
                       $acc["class"] = $row["class"];
                       $acc["section"] = $row["section"];
                       $acc["fees"] = $row["fees"];
                       $acc["fixedrate"]=$row["fixedrate"];
                       $acc["paymentcatagory"]=$row["paymentcatagory"];
                       
                  
                       //$acc["due_fees"] = $row["due_fees"];
                        $due = $row["fixedrate"]-$row["fees"];
                        
                        $acc["due_fees"] = $due;
                        $acc["slip_number"] =
                        $row["slip_number"];  
                            //$a = array();

                        $tot = $tot+$row["fees"];
                        
                       
                  
                        $acc["total"] = $tot;
                    
                   $account[] = $acc;
                  $expend[] = $acc["total"];
                  
            }
           
          
           
    }
   
    
   
}

////// Month wise show ///////

function loadFromMySQLMonth($sql)
{
    global $month;
    
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
        
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $month = array();
        
        $tot = 0;
        $totdue = 0;
        for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
        {
            $mon = array();
                
            $mon["account_date"] = $row["account_date"];
            $mon["student_id"] = $row["student_id"];
            $mon["section"] = $row["section"];
            $mon["fees"] = $row["fees"];
            $mon["fixedrate"]=$row["fixedrate"];
                  
                      
            $due = $row["fixedrate"]-$row["fees"];
            $totdue = $totdue + $due;
            $mon["due_fees"] = $due;
            
            $mon["totaldue_fees"] = $totdue;
            $tot = $tot+$row["fees"];
                
            $mon["total"] = $tot;
                
            $mon["slip_number"] = $row["slip_number"];
            
            $month[]=$mon;
            
        }
    }
}


////// Anual wise show ///////

function loadFromMySQLAnual($sql)
{
    global $anual;
    
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
        
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $anual = array();
        
        $tot = 0;
        $totdue = 0;
        for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
        {
            
                                    $an = array();
                                    $an["id"] =  $row["id"];
                                    $an["student_id"] =  $row["student_id"];
                                    $an["firstname"] = $row["firstname"];
                                    $an["lastname"] = $row["lastname"];
                                    $an["dateofbirth"] = $row["dateofbirth"];
                                    $an["mother_name"] = $row["mother_name"];
                                    $an["father_name"] = $row["father_name"];
                                    $an["father_or_mother_contact"] = $row["father_or_mother_contact"];
                                    $an["class"] = $row["class"];
                                    $an["Section"] = $row["Section"];
                                   
                                    $an["admission_fees"] = $row["admission_fees"];
                                    
                                     $an["reg_fixedrate"]=$row["reg_fixedrate"];
                                    
                                    
                                    $an["payment_catagory"]=$row["payment_catagory"];
                                       
                                  
                                       
                                    $due = $row["reg_fixedrate"]-$row["admission_fees"];
                                     $totdue = $totdue + $due;
                                     $an["totaldue_fees"] = $totdue;
                                    
                                    $an["due_fees"] = $due;
                                    
                                    $tot = $tot+$row["admission_fees"];
                                    
                                    $an["total"] = $tot;
                                  
                                  
            
                                   
                               $anual[] = $an;
                             
            
        }
    }
}




/////// Old Specific Student Anual Wise  Show Table ///////////////

function loadFromMySQLSpecificOldStudentAnual($sql)
{
    global $oldSpecificStudentAnual;
    
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
        
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $oldSpecificStudentAnual = array();
        
        $tot = 0;
        $totfixed = 0;
        $totdue = 0;
        for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
        {
            
                                    $an = array();
                                    $an["id"] =  $row["id"];
                                    $an["student_id"] =  $row["student_id"];
                                    $an["firstname"] = $row["firstname"];
                                    $an["lastname"] = $row["lastname"];
                                    $an["dateofbirth"] = $row["dateofbirth"];
                                    $an["mother_name"] = $row["mother_name"];
                                    $an["father_name"] = $row["father_name"];
                                    //$an["father_or_mother_contact"] = $row["father_or_mother_contact"];
                                    $an["class"] = $row["class"];
                                    $an["Section"] = $row["Section"];
                                   
                                    $an["admission_fees"] = $row["admission_fees"];
                                    
                                     $an["reg_fixedrate"]=$row["reg_fixedrate"];
                                     
                                    // $totfixed = $totfixed+$row["reg_fixedrate"];
                                    // $an["total"] = $totfixed;
                                    
                                    $an["payment_catagory"]=$row["payment_catagory"];
                                       
                                  
                                       
                                    $due = $row["reg_fixedrate"]-$row["admission_fees"];
                                     $totdue = $totdue + $due;
                                      $an["totaldue_fees"] = $totdue;
                                    
                                    $an["due_fees"] = $due;
                                    
                                    $tot = $tot+$row["admission_fees"];
                                    
                                    $an["total"] = $tot;
                                  
                                  
            
                                   
                               $oldSpecificStudentAnual[] = $an;
                             
            
        }
    }
}




////// Class wise Show //////

    function loadFromMySQLClass($sql)
    {
        global $class;
       
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
        
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        $class = array();
        
            //while($row = mysqli_fetch_assoc($result))
            //{
            
             $tot = 0;
              for($i=0;$i<$row= mysqli_fetch_assoc($result);$i++)
            {
                $cls = array();
                
               $cls["account_date"] = $row["account_date"];
               $cls["student_id"] = $row["student_id"];
               $cls["section"] = $row["section"];
               $cls["fees"] = $row["fees"];
                
                
                $due = $row["fees"]-300;
                $cls["due_fees"] = $due;
                
                
                
                $cls["slip_number"] = $row["slip_number"];
                
               $class[]=$cls;
                
            }
        }
    }




?>