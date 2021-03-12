<?php
session_start();
include('condb.php');
$member = $_SESSION['member'];
	$msg = "";
if (isset($_POST['action'])) {
$target = "food/".basename($_FILES['file']['name']);
$member = $_GET['ID'];
$food_image = $_FILES['file']['name'];
$food_text = $_POST['text'];

$sql = "INSERT INTO food (member,food_image,food_text) VALUES ('$member','$food_image','$food_text')";
mysqli_query($con, $sql);
if(move_uploaded_file($_FILES['file']['name'], $target)) {

$msg = "Image uploaded succesfully";


}else{
$msg = "There was a problem uploading image";
}
echo "<script>";
echo "alert(\" Completed! \");"; 
echo "window.location='favorite.php?ID=".$_GET["ID"]."'";
echo "</script>";
}
mysqli_close($con);
?>
