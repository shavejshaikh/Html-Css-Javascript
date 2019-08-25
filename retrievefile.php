


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

$sql ="SELECT * FROM submission ";
$result = mysqli_query($connection,$sql);


while($row = mysqli_fetch_array($result))
       {
          
        echo " Name\n".$row["sem"]."<br>";
        echo "file\n". $row['file'];
        
        header(" filename=" . $row['file'] );
      //echo $content;
       // @readfile($file);
        echo "<script language='javascript' type='text/javascript'>alert('File is downloaded!');
        window.location.href='grade1.php';</script>";


      
    

       }

if(mysqli_query($connection,$sql))
{
  echo "\n Data is entered successfully";
   echo "<script language='javascript' type='text/javascript'>alert('File is downloaded!');
        window.location.href='grade1.php';</script>";

 } 
else
{
  echo"Error is there".mysql_error($connection);
}

?>































