
   <head>

       <style>
           .dropdown:hover .dropdown-content {display:block;}
           
           .dropdown-content a:hover {background-color: #ddd;}

       </style>

   </head>

   
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
        
        $sq = "select * from oldstu_admission where  student_id like '".$_REQUEST["q"]."%'";
          $result=mysqli_query($conn,$sq)or die(mysqli_error($conn));
        
    
               
               while($row = mysqli_fetch_assoc($result))
               {
                       
                                echo "<div style = ' 
                 position: sticky;
                    background-color: #f1f1f1;
                    min-width: 10px;
            
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index:1;' class='dropdown'>";
            
                       echo"<div class ='dropdown-content'>";
                        ?>
                            <a style=" color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;"href = "SpecificOldStudentAnual.php?StudentId=<?php
                                            echo $row["student_id"];?>">
            
                    <?php
                        
                            echo $row["student_id"];
                   
                    ?>
                   
                   </a> 
                   
                   <?php
                   echo "</div>";
                   
                                echo "</div>";
                   
                      
             }
         
       
       
    }
 

    
  
    
?>