<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Your name">
<title>Bibleoteca</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="corp">
<?php
include "signinconect.php";
error_reporting(0);
$image=$_SESSION['img'];
$id=0;
$id= $_SESSION['id'];
if($id==0){
echo "<div id=\"headi\">
<a href=\"FirstPage.php\"><img src=\"Logo.svg\" alt=\"Logo\" id=\"biblog\"></a>
<p id=\"login\"><a href=\"sigin.php\">Log In</a></p>
<p id=\"signin\"><a href=\"login.php\">Sign In</a></p>
</div>";
}else{
echo "<div id=\"headi\">
<a href=\"FirstPage.php\"><img src=\"Logo.svg\" alt=\"Logo\" id=\"biblog\"></a>
<a href=\"Profil.php\"><img src=\"$image\"id=\"ProfileIncon\"></a>
</div>";
}
?>

<div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
		<img src="FirsImagB.jpg" alt="">
        </div>
        <div class="slide">
		
          <a href="LibraryZon.php?id=<?php echo $id;?>&img=<?php echo $image;?>"><img src="firstImg2.jpg" alt=""></a>
        </div>
        <div class="slide">
          <a href="sigin.php"><img src="firstImg3.jpg" alt=""></a>
        </div>
        
     
      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        
      </div>
    </div>
  
   

</div>

</body>
</html>