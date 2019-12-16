
<?php
$uname=$_POST['Student_id'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","book_store");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT 'Student_id' AND 'password' FROM `registration` WHERE `Student_id`='$uname' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
	
{
	header("Location: profile.php");
	
                    //echo "You're in!  <a href=\"try4.php\"></a>";
                    
                    
                        
	
	//echo "Login success";
	//$link_address ='PROFILE.php';
//echo "<a href="$link_address"></a>";
	//header("refresh:2;url=welcome.php");

}
else
{
	echo "please fill proper details";
	 
}


?>
 