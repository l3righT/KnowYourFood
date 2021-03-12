<style type="text/css">
@font-face {  
font-family: title;  
src: url('iconfont/FC Lamoon Bold ver 1.00.ttf');
}
.font1{
font-family: title;
font-size:40px;
}
.font2{
font-family: title;
font-size:15px;
border: 5px;
}
@font-face {  

font-family: title2;  
src: url('iconfont/sd performance.ttf');
}
.font11{
font-family: title2;
font-size:40px;
}
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="iconfont/material-icons.css">
<div class="navbar-fixed">
            <nav class="nav-wraper  teal lighten-1">
                <div>
                    <a href="#" class="sidenav-trigger hide-on-med-and-up" data-target="sidemenu">
                    <i class="material-icons">menu</i>
                    </a>
                </div>
                <div class="container">
                
                    <a href="" class="brand-logo font11">Know•Your•Food</a>
                    <ul class="right hide-on-small-only">
                    
                    <li><a href="favorite.php?ID=<?=$_SESSION['ID']?>" class="white-text font2">My favorite
                    <i class="btn-floating pulse pink lighten-5"><i class=" material-icons pink-text text-pink lighten-5">favorite</i></i>
                    </a></li>
                    <li><a href="information.php?ID=<?=$_SESSION['ID']?>"class="white-text font2"> Hello <?php echo $name; ?>
                    <i class="material-icons right">mood</i>
                    </a></li>
                        <?php
                            if (isset($_SESSION['ID'])) 
                            {
                        ?>
                                <li><a href="logout.php" class="white-text font2">Logout
                                <i class="material-icons right">lock_open</i>
                                </a></li>
                        <?php
                            }
                            else
                            {
                        ?>
                                <li><a href="Login.php" class="white-text font2">Login
                                <i class="material-icons right">lock_open</i></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>

    <ul class="sidenav   teal  lighten-3" id="sidemenu">
    <li><a href="favorite.php?ID=<?=$_SESSION['ID']?>" class="white-text font2">My favorite
    <i class="material-icons right ">favorite</i>
    </a></li>
    <li><a href="information.php?ID=<?=$_SESSION['ID']?>"class="white-text font2"> Hello <?php echo $name; ?>
                    <i class="material-icons right">mood</i>
                    </a></li>         
        <?php
            if (isset($_SESSION['ID'])) 
            {
        ?>
                <li><a href="logout.php" class="white-text font2">Logout
                <i class="material-icons right">lock_open</i></a></li>
        <?php
            }
            else
            {
        ?>
                <li><a href="Login.php" class="white-text">Login
                <i class="material-icons right">lock_open</i></a></li>
        <?php
            }
        ?>
        <li><a href="#" class="white-text"><?=$_SESSION['u_name']?></a></li>
    </ul>



