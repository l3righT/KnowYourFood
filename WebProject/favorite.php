<?php
    session_start();
    include('condb.php');
    include('fonts.php');

   
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorite</title>
    <style type="text/css">

html, body{
    background-color: #4db6ac ;
padding-top:0px;
#btn{
    width:100%;
}
}
</style>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="iconfont/material-icons.css">
</head>
<body>
<nav>
    <div align="center"class="nav-wrapper">
    
    <div  style="padding :5px; border: 5px solid #eeeeee;height:100%;width:500px;">
      <a href="member.php?ID=<?=$_SESSION['ID']?>" class="brand-logo center font1"><i class="large  material-icons prefix">reply</i>Favorite</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>
    <?php
        $sql="SELECT * FROM login 
                WHERE ID = '".$_GET['ID']."' ";
        
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $sql2="SELECT* FROM food JOIN login ON login.ID=food.member
         WHERE food.member= '".$_GET['ID']."'";
        $result2 = mysqli_query($con,$sql2);
        #$row2 = mysqli_fetch_array($result2);
    ?>
    <div class="container">
    <div align="center">
    <div style="padding :5px; border: 5px solid #eeeeee;height:prefix;width:500px; 
    background-color: #ffd180;">
<div align="right">
    <i class=" s6 flow-text small  material-icons ">fingerprint</i>
                    <a class="black-text font1"> Member No. </a>
                  
                  <label class="font1 black-text">&nbsp<?=$row['ID']?></label>
                  </div>
                  
        <h3 class="teal darken-4-text font11"style="padding :0px">
            Your Favorite Food
        </h3>

        <?php
        while($row2=mysqli_fetch_array($result2)){
            ?>
            <?php
            echo '<img align = left class="circle " src="'.$row2['food_image'].'" width="250" height="200" />';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo '<h4 class="font11" align = right style="padding :10px">'.$row2['food_text'].'</h4>';
            
            ?>
             <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='save_delete.php?member=<?=$row2['member']?>
                &food_image=<?php echo $row2['food_image'] ; ?>&food_text=<?php echo $row2['food_text'] ; ?>';}">
                <button class="btn-floating  red right" >
                    <i class="material-icons right">clear</i>
                </button>
                </a>
               
                
            <?php
            echo "<br>";
            echo "<br>";
            echo "<br>";
            ?>
            <?php  
        }
        ?>
   </div>
   </div>
     
   </div>
    
    <?php
        include "footer_script.php";
    ?>
</body>
</html>
