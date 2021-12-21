<?php 
include("svg.php");

?>



<!doctype html>
<html>
<head>

</head>



<body>

<form >
  <label for="fname"> name1:</label><br>
  <input type="text" id="fname" name="fn" placeholder="firstname"><br>
  <label for="lname">Last name2:</label><br>
  <input type="text" id="lname" name="ln" placeholder="lastname"><br>
   <label for="lname">e mail:</label><br>
  <input type="email" id="email" name="em" placeholder="a@gmail.com"><br>
     <label for="lname">password:</label><br>
  <input type="password" id="password" name="pa" placeholder="password"><br>
    <label for="lname">rollno:</label><br>
  <input type="text" id="num" name="nur" placeholder="rollno"><br>
  <input type="submit" value="Submit">
</form>

</body>

</html>

<?php

$fn=$_GET['fn'];
$ln=$_GET['ln'];
$em=$_GET['em'];
$ps=$_GET['pa'];
$rn=$_GET['nur'];


$query="insert into names values('$fn','$ln','$em','$ps','$rn')";
$data=mysqli_query($conn,$query);
if($data)
{
	
	echo "data inserted into datbase";

}


?>