
<?php
ob_start();
session_start();
$connection=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error())
{
	echo"error in connnecting to database ".mysqli_connect_error();
} 
else 
{
	echo"\n<script type='text/javascript'>alert('sucess in connecting to database!');</script>";
}


$grade=$_POST['Grade'];
 $mark=$_POST['rollno'];

$sql="INSERT into Grade (grade,rollno) VALUES('$grade','$mark')";

    if(mysqli_query($connection,$sql))
    {
      echo "\n Data is entered successfully";
      echo "<script language='javascript' type='text/javascript'>;
            window.location.href='Finalwt.html';</script>";
    }
    else
    {
      echo"Error is there".mysql_error($connection);
    }
?>   