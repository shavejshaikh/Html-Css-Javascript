


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


if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	
   $mypassword = mysqli_real_escape_string($connection,$_POST['Subject']); 

		$sql ="SELECT * FROM submission WHERE  subject='$mypassword'";

		 $result = mysqli_query($connection,$sql);
     	 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


     	 $count = mysqli_num_rows($result);
      

	if($count == 1)
	 {
        
         echo "<script language='javascript' type='text/javascript'>alert('Grade is enter !');
        window.location.href='Finalwt.html';</script>";

      }

      else 
      {
          echo "<script type='text/javascript'>alert('Semester Or Subject Invalid!');window.location.href='tosee.html';</script>";
      }

   }
?>   
<style>
	.we
	{
		border-radius:10px;

	}
</style>


<body bgcolor="#d1ccc0">
<form method="POST" action="mar1.php">
	<h1 align="center"> GRADE </h1>
	<table align="center">

		
		<tr>
			<td> Marks </td>
			<td><input type="text" name="Grade" id="Grade" size="5" maxlength="2" >/10</td>    
			</td>
		</tr>
		<tr>
			<td>Roll No:</td>
			<td><input type="text" name="rollno" id="rollno" size="5" maxlength="3" ></td>    

		</tr>
		<tr>

			<td><button class ="we"><a href="KBC1.java">Click to see</a></button></td>
		</tr>

		<tr>
			<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<br> <input class ="we" type="submit" name="sub" value="Submit"      ></td>
			<td> <br><input class ="we" type="reset"  value="Reset"/></td>
			<td> <br><button class ="we"><a href="Finalwt.html">Back</a></button></td>
		</tr>

	</table>

</form>

</body>
