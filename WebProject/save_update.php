
<?php

include('condb.php');

?>
<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
#$objConnect = mysqli_connect("localhost","root","bright123456") or die("Error Connect to Database");
#$objDB = mysqli_select_db("webtech");
$sql = "UPDATE login SET ";
$sql .="ID = '".$_GET["ID"]."' ";
$sql .=",username = '".$_POST["txtUsername"]."' ";
$sql .=",password = '".$_POST["txtPassword"]."' ";
$sql .=",name = '".$_POST["txtName"]."' ";
$sql .="WHERE ID = '".$_GET["ID"]."' ";
$result = mysqli_query($con,$sql);

if($result)
{
	echo "<script>";
                        echo "alert(\" Update Successfully! \");"; 
                        echo "window.location='information.php?ID=".$_GET["ID"]."'";
                    echo "</script>";
}
else
{
	echo "Error Save [".$sql."]";
}
mysqli_close($con);
?>
</body>
</html>