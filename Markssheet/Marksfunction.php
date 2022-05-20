<?php
include("Marksconfig.php");

if(isset($_POST['submit']))
{
	
$Sno=$_POST['Sno'];
$username=$_POST['username'];
$marks1=$_POST['marks1'];
$marks2=$_POST['marks2'];
$marks3=$_POST['marks3'];
$total= $marks1 + $marks2 + $marks3;


$result=mysqli_query($mysqli,"INSERT INTO marks values(' ','$Sno' , '$username' , '$marks1' ,'$marks2' , '$marks3' , '$total')");


if($result)

{

//header("Location:Marks.php");
header("Location:Marksresult.php");
}
else{
echo "failed";
}
}

?>