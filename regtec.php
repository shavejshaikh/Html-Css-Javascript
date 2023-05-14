
<?php

$connection=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error()) {
	echo"error in connnecting to database ".mysqli_connect_error();

} else {
	echo"\nsucess in connecting to database";
}


	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$cn=$_POST['cn'];
	$no=$_POST['no'];
	$rad=$_POST['gender'];
	$pas=$_POST['pw'];
	$em=$_POST['emailid'];

	



$sql="INSERT into teacher (fname,lname,cname,mobile,gender,password,email) VALUES('$fn','$ln','$cn',$no,'$rad','$pas','$em')";
if(mysqli_query($connection,$sql))  {
	echo "\n Data is entered successfully";
} 
else {
	echo"Error is there".mysql_error($connection);
}

?>