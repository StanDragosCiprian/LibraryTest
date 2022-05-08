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
//include "SelectBook.php"
?>
<div id="headi">
<a href="FirstPage.php"><img src="Logo.svg" alt="Logo" id="biblog"></a>
<p id="login"><a href="http://localhost/sigin.php">Log In</a></p>
<p id="signin"><a href="http://localhost/login.php">Sign In</a></p>
</div>
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
		
          <img src="firstImg2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="firstImg3.jpg" alt="">
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