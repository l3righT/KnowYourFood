<?php session_start(); 
include('condb.php');
include('fonts.php');
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  }  
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>member</title>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
html, body{
    background-color: #4db6ac ;
    padding-top :px;
#btn{
    width:100%;
}
}
h1{
color: #000000;
}

input::placeholder {
  color: green;
}
</style>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="iconfont/material-icons.css">
  <iframe width="0" height="0" src="https://www.youtuberepeater.com/watch?v=2ibGF2PVNwY&name=AWelcoming+Sound#gsc.tab=0" frameborder="0"
    allowfullscreen></iframe>
</head>
<body>
<?php session_start(); 
include('header.php');
?>
<div class="row">
  <div class="col l" style="padding :45px;padding-left:130px">
    
    <div style="padding :5px; border: 5px solid #eeeeee;height:300px;width:350px;
     background-color: #ffd180;">

      
<form method="post" action="save_favorite.php?ID=<?=$_SESSION['ID']?>" enctype="multipart/form-data">

      <input type="file"class="custom-file-input" name="file" id="file" OnChange="showPreview(this)">

          <hr>
        <div align="center"style="padding :10px">
  <img id="blah"src="#" alt="Your Food"width="250" height="200">
  <br><br>
  
  <a  class="btn btn-outline-success red lighten-1 center font2"  id="upload">Analyze 
              <i class="material-icons right">remove_red_eye</i>
              </a>


</div>
</div>
</div>

<div class="col l" style="padding :45px;padding-left:130px">

<div style="padding :5px; border: 5px solid #eeeeee;height:300px;width:350px;
 background-color: #ffd180;">
 <div align="center"style="padding :10px">
 <h4 id="msg" class="font3"style="color: #ff3d00"></h4>
<input  size="20" name="text"id="msg" class="font3"style="color: #ff3d00"placeholder="Say something about this image..."></input>




      </div>
      
      </div>
      
      </div>
     
    <div style="padding :250px;padding-left:505px" >
    <button class="btn waves-effect waves-light black " type="submit" name="action">favorite
    <i class=" large material-icons right blue-text text-blue darken-4 ">thumb_up</i>
  </button>
  </form>
    <?php session_start(); 
include('footer_script.php');
?>
</body>
<script>
    /// ชื่อไฟล์รูป ////
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<!-- ajax ส่งรูปไป backend -->

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#upload').on('click', function() {
            var file_data = $('#file').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: 'backend.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(response) {
                    var result_food = response;
                    console.log(result_food);
                    var rs_food = result_food.split(',');
                    var ex = rs_food[2];
                    console.log(rs_food[2]);
                    var ss = ex.split(':');
                    var pp = ss[1];
                    document.getElementById("msg").innerHTML = pp;
                    console.log(array[0].results)
                },
                error: function(response) {
                    $('#msg').html(response); // display error response from the PHP script
                }
            });
        });
    });

    /// ฟังก์ชั่น พรีวิว รูปที่เราอัพโหลด ///

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file").change(function() {
        readURL(this);
    });
</script>

</html>
