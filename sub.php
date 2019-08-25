
<?php

$connection=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error())
{
	echo"error in connnecting to database ".mysqli_connect_error();
} 
else 
{
	echo"\nsucess in connecting to database";
}


$fn=$_POST['Semester'];
$ln=$_POST['Subject'];
$cn=$_POST['Browse'];


$sql="INSERT into submission (sem,subject,file) VALUES('$fn','$ln','$cn')";

if(mysqli_query($connection,$sql))
{
	echo "\n Data is entered successfully";
	echo "<script language='javascript' type='text/javascript'>alert('Data is entered successfully!');
        window.location.href='Finalwt.html';</script>";

} 
else 
{
	echo"Error is there".mysql_error($connection);
}

?>