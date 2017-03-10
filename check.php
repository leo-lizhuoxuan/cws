<!-- This page used to check the username & password -->
<?php  
//require('db.php');
// get username & password
$username=$_POST['username'];  
$password=$_POST['password']; 
 
if($username == "")  
{    
// check vaule
     echo"<script type='text/javascript'>alert('Write User Name');location='index.php?page=login';  
            </script>";            
}  
elseif($password == "")  
{  
  
// check vaule
    echo"<script type='text/javascript'>alert('Write Pass Word');location='index.php?page=login';</script>";  
      
}  
else  
{   
	// select information from database
    $sql = "SELECT * FROM customer WHERE password = '$password' AND username = '$username'";
	echo $sql;
	$query = mysql_query("$sql");
	$rows = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	// check u & p
	if ($rows ==1){
		session_start();
		$_SESSION['userid']= $row{'id'};
		$_SESSION['customer_username']= $username;
		$_SESSION['customer_name']= $row{'name'};
		//Say right and go to home2 page
		echo"<script type='text/javascript'>alert('ok');</script>"; 
 header("location: index.php");		
	}else{
		//Say worn and go back to login page 
		echo"<script type='text/javascript'>alert('Worn User Name or Password');location='index.php?page=login';</script>";
		}                
}  
?>  