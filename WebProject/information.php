<?php
    session_start();
    include 'condb.php';
    include('fonts.php');
    
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
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
      <a href="member.php?ID=<?=$_SESSION['ID']?>" class="brand-logo center font1"><i class="large  material-icons prefix">reply</i>Information</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>
    <?php
        $sql="SELECT * FROM login 
                WHERE ID = '".$_GET['ID']."' ";
        
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
    <div align="center">
    <div style="padding :5px; border: 5px solid #eeeeee;height:prefix;width:500px; 
    background-color: #ffd180;">
        <h3 class="teal-text font11">
            Welcome <?=$row['name']?>
        </h3>
        
        <div class="row">
        
            <div class="col s3">
            
                <!--แสดงรูปภาพของ User ตาม u_id ที่อ่านได้จาก Database-->
                   
            </div>
            
            <div class="col s12 m6 l6">
            <div class="row valign-wrapper">
                <img class="left circle responsive-img "
                src="<?=$row['image']?>"width="250" height="200">
                <div class="row">
                <div align="right">
                <a href="update_img.php?ID=<?=$row['ID']?>">
                <button class="btn-floating  grey darken-2  right" >
                    <i class="material-icons right">camera_alt</i>
                </button>
                </a>
                </div>
                </div>
            </div> 
           
            <h3 class="teal-text font11">
            อื้มม อาาหร่อยยย
         </h3>  
        
                 
               
                  </div>
                    
                 <div class="row">
         <div align="left"style="padding-left:50px">

                 <div class="col s11 ">
                 <i class=" s6 flow-text material-icons ">fingerprint</i>
                    <a class="black-text font2"> Member No. </a>
                  
                  <label class="font11 indigo-text">&nbsp<?=$row['ID']?></label>
                 
                    
              
                <div class="row">
                <div align="left" class="col s11  ">
                 <i class=" s6 flow-text material-icons ">account_circle</i>
                    <a class="black-text font2">Name </a>
                  
                  <label class="font11 indigo-text">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?=$row['name']?></label>
                  </div>
                   
         <div align="left">
                
                <div class="col s11 ">
                 <i class=" s6 flow-text material-icons ">verified_user</i>
                    <a class="black-text font2">Status </a>
                  
                  <label class="font11 indigo-text">&nbsp&nbsp&nbsp&nbsp&nbsp<?=$row['level']?></label>
                  
                <div class="row">
                <div align="right">
                <a href="update.php?ID=<?=$row['ID']?>">
                <button class="btn-floating  red  right" >
                    <i class="material-icons right">edit</i>
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include "footer_script.php";
    ?>
</body>
</html>
