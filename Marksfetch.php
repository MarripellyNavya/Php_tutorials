<?php
include ("Marksconfig.php");
$result=mysqli_query($mysqli,"SELECT* from  marks ORDER by id DESC");
?>

<html> 
<head><link rel="stylesheet" href="main.css">
<script>
function myFunction() {
  var x = document.getElementById("data_table");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
	
  }
  var val=document.getElementById("GrpBtn").innerHTML;
  if(val=="Hide")
  {
	document.getElementById("GrpBtn").innerHTML="Show";
  }
  else if(val=="Show")
  {
	  document.getElementById("GrpBtn").innerHTML="Hide";
  }
}


</script> 

<body>

<?php if(mysqli_num_rows($result) > 0){ 
	?><br>
<h1 style=text-align:center; >RESULTS</h1><br><br>
<table  id="data_table" border="3">


<tr>
<th>Sno</th>
<th>Name</th>
<th>Marks1</th>
<th>Marks2</th>
<th>Marks3</th>
<th>Total Marks</th>



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
	<br/><br/>
<p id="btn_para"><button id="GrpBtn" onclick="myFunction()">Hide</button></p>
</body>
</head>
</html>
