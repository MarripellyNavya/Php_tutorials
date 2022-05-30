<!--<p>Please <a href = " Marksfetch.php" style="color:green"> click me here for the results  </a>.</p>-->

<!--<a href="Marksresult.php?pageSet=true">click me</a>-->



<!--<form action="" method="POST">
<button type="submit" name="display" class="btn" value="show"> click me here for results</button>
</form>
<style>
.btn {
    border: none;
    background:transparent;
    text-decoration:underline;
    cursor: pointer;
}
</style>-->
<!--open php
	/*if($_POST['display'] ?? false){
    echo file_get_contents( "http://" .$_SERVER['HTTP_HOST'].'/Markssheet/Marksfetch.php');
}*/



//if (isset($_GET['pageSet']))
{
	include("Marksfetch.php");
	
}//
close php-->