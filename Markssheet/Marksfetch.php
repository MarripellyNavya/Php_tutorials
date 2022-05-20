<?php
include ("Marksconfig.php");
$result=mysqli_query($mysqli,"SELECT* from  marks ORDER by id DESC");
?>

<<html> 
<head><link rel="stylesheet" href="main.css">

<body>

<?php if(mysqli_num_rows($result) > 0){ ?>
<h1 style=text-align:center; >RESULTS</h1>
<table border="3">


<tr>
<th>Sno</th>
<th>Name</th>
<th>Marks1</th>
<th>Marks2</th>
<th>Marks3</th>
<th>Total</th>

</tr>
<?php
	
	$stmt2=$mysqli->prepare("SELECT* from marks ORDER by id DESC");
	$stmt2->execute();
	$row=$stmt2->get_result();
	while ($res = $row->fetch_array()){

echo "<tr>";
		echo "<td>".$res['Sno']."</td>";
        echo "<td>".$res['username']."</td>";
        echo "<td>".$res['marks1']."</td>";
        echo "<td>".$res['marks2']."</td>";
        echo "<td>".$res['marks3']."</td>";
		echo "<td>".$res['total']."</td>";
        echo "<tr>";
	}
	?>
	</table>
	<?php
      }else{
      echo "<h2>No Records Found!</h2>";
       
       }
	   ?>
</body>
</head>
</html>
