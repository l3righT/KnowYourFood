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
    <div style="padding :5px; border: 5px solid #eeeeee;height:100%;width:500px; background-color: #ffd180;">
      
      <form name="frmLogin" method="post" action="checklogin.php">
        <h3 class = "font1">Sign in</h3>
        <div class="row font1" style = "width:350px;">
          <div class="card">
            <div class="card-content">
              <div class="row input-field col prefix">
                  <i class="material-icons prefix">account_box</i>
                  <input name="username" type="text" id="username" required>
                  <label for="username">User name</label>
              </div>
              <div class="row">
                <div class="input-field col prefix">
                  <i class="material-icons prefix">lock</i>
                  <input name="password" type="password" id="password" required>
                  <label for="password">Password</label>
                </div>
              </div>
            </div>
            <div class="card-action">
              <a href="register.php" class="btn red lighten-1 left font2">Register
              <i class="material-icons right">border_color</i>
              </a>
              <button type="submit" class="btn  red lighten-1 right font2">Login 
              <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
 
  <?php
    include "footer_script.php";
  ?>
