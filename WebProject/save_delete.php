
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	session_start();
	include('condb.php');
	
	$member = $_GET["member"];
	$food_image = $_GET["food_image"];
	$food_text = $_GET["food_text"];
	$sql = "DELETE FROM food
			WHERE member = '".$member."' 
			AND food_image = '".$food_image."'
			AND food_text = '".$food_text."'
			";

	$query = mysqli_query($con,$sql);

	if($query) {
		
		 echo "<script>";
echo "alert(\" Record delete successfully! \");"; 
echo "window.location='favorite.php?ID=".$_GET["member"]."'";
echo "</script>";
	}

	mysqli_close($con);
?>
