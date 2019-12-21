
          


<?php 


global $are;
        
      
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
                   
                    $contact = "select * from stu_reg";
    
                        $result1=mysqli_query($conn,$contact)or die(mysqli_error($conn));
                        
                        
                    //step 2, sendfunction//


 while($row = mysqli_fetch_array($result1))
            {
                
                
              
          
           $phone  = $row["father_or_mother_contact"];
            $_GET["to"] = $phone;
            
  $to = $_GET["to"];      
$token = "a3d58a6fb200c419636c6938aacf93fb";
//$message = "Test SMS From Using API";

 $url = "http://api.greenweb.com.bd/api.php";


$data= array(
   'to'=>  "$to",
// //'message'=>"$message",
//'token'=>"$token"
 ); 
 
$ar = $data['to'];
   $are[] =  $ar;

if(isset($_REQUEST["submit"]) )
    {
// echo $data['to'];// Add parameters in key value
  $ch = curl_init(); // Initialize cURL
   curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_ENCODING, '');
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
   $smsresult = curl_exec($ch);
            
            }   
}

}
?>
              
<form action="http://api.greenweb.com.bd/api.php" method="GET">
<input type="text" name="token" placeholder="token" />
<input type="text" name="to"  value ="<?php foreach($are as $x => $x_value) {
    echo   $x_value.',';} ?>" />
<textarea class="span11" name="message" id="message" style="position: relative; left: 4%;" ></textarea>
<button type="submit" name="submit" class="btn btn-success btn-large">Send Message</button>
</form>         
			