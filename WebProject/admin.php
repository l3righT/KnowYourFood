<?php session_start(); 
include('condb.php');
include('fonts.php');
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style type="text/css">
html, body{
    background-color: #4db6ac ;

#btn{
    width:100%;
}
}
</style>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="iconfont/material-icons.css">
</head>
<body>
<?php session_start(); 
include('header.php');
?>
	<form action="logout.php">
	<h1>Admin Page</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
    <?php session_start(); 
include('footer_script.php');
?>
</body>
</html>