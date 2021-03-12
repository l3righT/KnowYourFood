<?php session_start();?>
<?php
include('h.php');
include('fonts.php');

?>

<style type="text/css">

html, body{
    background-color: #4db6ac ;
padding-top:0px;
#btn{
    width:100%;
}
}
</style>
<nav>
    <div align="center"class="nav-wrapper">
    
    <div  style="padding :5px; border: 5px solid #eeeeee;height:100%;width:500px;">
      <a href="main.php" class="brand-logo center font1"><i class="material-icons prefix">home</i>Know•Your•Food</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>
<div class="container">
<div align="center">
    <div style="padding :5px; border: 5px solid #eeeeee;height:100%;width:500px; 
    background-color: #ffd180;">
      
      <form name="frmLogin" method="post" action="save_register.php">
        <h3 class="font1">Sign up</h3>
        <div class="row font1" style = "width:350px;">
          <div class="card">
            <div class="card-content">
              <div class="row input-field col prefix">
                
                  <i class="material-icons prefix">account_box</i>
                  <input name="txtUsername" type="text" id="txtUsername"required/>
                  <label for="txtUsername">User name</label>
                
              </div>
              <div class="row input-field col prefix">
                
                  <i class="material-icons prefix">lock</i>
                  <input name="txtPassword" type="password" id="txtPassword"required/>
                  <label for="txtPassword">Password</label>
                
              </div>
              <div class="row input-field col prefix">
                
                  <i class="material-icons prefix">vpn_key</i>
                  <input name="txtConPassword" type="password" id="txtConPassword"required/>
                  <label for="txtConPassword">Confirm Password</label>
               
              </div>
              <div class="row">
                <div class="input-field col prefix">
                  <i class="material-icons prefix">font_download</i>
                  <input name="txtName" type="text" id="txtName"required/>
                  <label for="txtName">Name</label>
                </div>
                <div class="row font2">
                <div class="col left">
                <b class="brand-logo left font2">Image<i class="material-icons left">face</i></b>
                  <br>
                  <br>
                  <input name="fileup" type="file" id="fileup"required/>
                  
                </div>
              </div>
            </div>
            <div class="card-action">
              <a href="index.php" class="btn red lighten-1 left font2">Back
              <i class="material-icons right">undo</i>
              </a>
              <button type="submit" class="btn  red lighten-1 right font2">save 
              <i class="material-icons right">save</i>
              </button>
           
        </div>
      </form>
    </div>
  </div>
 
  <?php
    include "footer_script.php";
  ?>
