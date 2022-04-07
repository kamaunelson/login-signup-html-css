<?php 

include("database.php");
echo "<pre>";
//print_r($_POST);

$Firstname=$_POST["name"];//we use the name=""
$Email=$_POST["email"];
$Password=$_POST["password"];
//$encpassword=md5('!_?',$Password);

$sql="INSERT INTO client_users(name, username_email, password)VALUES('$Firstname','$Email','$Password')";

if(mysqli_query($con,$sql)){
	//echo "inserted record succesfully";
	 header("location: login.php");
	 die;
}
else{
	echo "error entering record";
	die;

}


?>