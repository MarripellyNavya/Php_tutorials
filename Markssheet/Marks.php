<?php
include ("Marksconfig.php");
$result=mysqli_query($mysqli,"SELECT* from  marks ORDER by id DESC");
?>
<DOCTYPE html>
<html> 
<head><link rel="stylesheet" href="main.css">
<title>Marks Sheet</title>
<body>

<form  action="Marksfunction.php " method="POST">

<h1 style=text-align:center; >STUDENT MARKS DETAILS</h1>
<div class="container">
<table> 
<tr>
<td>SNO:</td>
<td><input type="number" name="Sno"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="username"></td>
</tr>

<tr>
<td>Marks1:</td>
<td><input type="number" name="marks1"></td>
</tr>

<tr>
<td>Marks2:</td>
<td><input type="number" name="marks2"></td>
</tr>

<tr>
<td>Marks3:</td>
<td><input type="number" name="marks3"></td>
</tr>


<tr>
    <td>
	<a href="Marksresults.php"> <input style="margin-left:200px;", type ="submit" value="Submit" name="submit">  </a> 
	
	</td>
   </tr>
  </table>
  </div>
 </form>

</body>
</head>
</html>
