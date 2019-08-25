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


$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['emailid'];
$cn=$_POST['cname'];
$no=(int)$_POST['no'];//int
$pas=$_POST['password'];
$rad=$_POST['gender'];
$yea=$_POST['dropdown'];




//$sql="INSERT into employee (id_no,Name,Address,age) VALUES (1,'KAMAL','MUMBAI',25),(2,'KAMAL','KOLKATA',25),(100,'JUNAID','DELHI',27)";

$sql="INSERT into student (fname,lname,email,cname,mobile,password,year,Gender) VALUES('$fn','$ln','$em','$cn',$no,'$pas','$yea','$rad')";
if(mysqli_query($connection,$sql))
{
	echo "\n Data is entered successfully";
	echo "<script language='javascript' type='text/javascript'>;
        window.location.href='student.html';</script>";
}
else
{
	echo"Error is there".mysql_error($connection);
}

?>