<?php
include ("Marksconfig.php");
$result=mysqli_query($mysqli,"SELECT* from  marks ORDER by id DESC");
        ?>
<DOCTYPE html>
<html> 
<head><link rel="stylesheet" href="main.css">
<title>Marks Sheet</title>
<body>

<form action="Marksfunction.php " method="POST"><br><br>
<h1 style=text-align:center; >STUDENT MARKS DETAILS</h1><br><br>
<div style="width:50%; height:280px; background-color:pink; margin-left:300px; ">
<div style="border: 3px solid black;translate(-50%,-50%);" id="form_div">

<div class="container">
<table id="form_table"> 

<tr>
<td>SNO:</td>
<td><input type="number" name="Sno" required autocomplete="off"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="username" required></td>
</tr>

<tr>
<td>Marks1:</td>
<td><input type="number" name="marks1" required></td>
</tr>

<tr>
<td>Marks2:</td>
<td><input type="number" name="marks2" required></td>
</tr>

<tr>
<td>Marks3:</td>
<td><input type="number" name="marks3" required></td>
</tr>


<tr>
    <td>
        <a href="Marksfetch.php"> <input style="margin-left:200px;", type ="submit" value="Submit" name="submit">  </a> 
	
	</td>
   </tr>
  </table>
  </div>
  </div>
 </form>

</body>
</head>
</html>
