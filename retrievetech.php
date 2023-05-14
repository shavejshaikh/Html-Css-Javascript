 
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
	echo"\nsucess in connecting to database";
}


if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	   $myusername = mysqli_real_escape_string($connection,$_POST['email']);
     $mypassword = mysqli_real_escape_string($connection,$_POST['pass']); 

		$sql ="SELECT * FROM teacher WHERE email = '$myusername' and password='$mypassword'";

		 $result = mysqli_query($connection,$sql);
     	 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


     	 $count = mysqli_num_rows($result);
      

	if($count == 1)
	 {
         //session_register("myusername"); deprecated
         $_SESSION['login_user'] = $myusername;
         echo "<script language='javascript' type='text/javascript'>alert('You Are A Valid User!');
        window.location.href='tosee.html';</script>";

      }

      else 
      {
          echo "<script type='text/javascript'>alert('User Name Or Password Invalid!');window.location.href='teacher.html';</script>";
      }

    }
?>   
                

   
  
