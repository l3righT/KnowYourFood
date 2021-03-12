<?php session_start();?>

<?php
include('h.php');
include('fonts.php');
include('condb.php');
?>
<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
<style type="text/css">

html, body{
    background-color: #4db6ac ;
padding-top:0px;
#btn{
    width:100%;
}
}
</style>
</head>
<body>

<nav>
    <div align="center"class="nav-wrapper">
    
    <div  style="padding :5px; border: 5px solid #eeeeee;height:100%;width:500px;">
      <a href="information.php?ID=<?=$_SESSION['ID']?>" class="brand-logo center font1"><i class="material-icons prefix">undo</i>Information</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>
<div class="container">
<div align="center">
    <div style="padding :5px; border: 5px solid #eeeeee;height:100%;width:500px; 
    background-color: #ffd180;">
<form action="save_update_img.php?ID=<?php echo $_GET["ID"];?>" name="frmEdit" method="post">
<?php
#$objConnect = mysqli_connect("localhost","root","bright123456") or die("Error Connect to Database");
#$objDB = mysqli_select_db("webtech");
$sql = "SELECT * FROM login WHERE ID = '".$_GET["ID"]."' ";
$result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
if(!$row)
{
	echo "Not found CustomerID=".$_GET["ID"];
}
else
{
?>

  
   <h3 class="font1">Update Image</h3>
        <div class="row font1" style = "width:350px;">
          <div class="card">
            <br>
              <div class="row font2">
                <div class="col left">
                <b class="brand-logo left font2">Image<i class="material-icons left">face</i></b>
                  <br>
                  <br>
                  <input name="fileup" type="file" id="fileup" required value="<?php echo $row["image"];?>">
                  
                </div>
              <div class="row">
              
              </div>
            </div>
            <div class="card-action">
              <a href="information.php?ID=<?=$_SESSION['ID']?>" class="btn red lighten-1 left font2">Back
              <i class="material-icons right">undo</i>
              </a>
              <button type="submit" class="btn  red lighten-1 right font2">save 
              <i class="material-icons right">save</i>
              </button>
           
        </div>
      </form>
      <?php
  }
  mysqli_close($con);
  ?>
</body>
</html>