<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "14022014";
	$dbName = "webtech";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		 echo "<script>";
                        echo "alert(\" password not match\");"; 
                        echo "window.history.back()";
                    echo "</script>";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
	
	$strSQL = "SELECT * FROM login WHERE username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO login (username,password,name,level,image) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST='member'."','".$_POST["fileup"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
        
         echo "<script>";
                        echo "alert(\" Register Completed! \");"; 
                        echo "window.location='checklogin.php'";
                    echo "</script>";
		
		
	}

	mysqli_close($objCon);
?>
