
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Your name">
<title>Bibleoteca</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="profImg">
<?php

?>
<?php
include "Changephpcode.php";
if(isset($_POST["submit"])){
	//header("Location:Profil.php");
	header("Refresh:1; url=sigin.php?id=2");
}
?>



<div id="headi">
<a href="http://localhost/FirstPage.php"><img src="Logo.svg" alt="Logo" id="biblog"></a>
<p id="login"><a href="http://localhost/sigin.php">Log In</a></p>
<p id="signin"><a href="http://localhost/login.php">Sign In</a></p>
</div>
 <form action = "" method = "POST" enctype = "multipart/form-data">
<div id="profzon">


<?php echo "<img src=\"$image\" id=\"pofimg\">" ;

?>
<div id="imChange">

         <input type = "file" name = "image" />
         <input type = "submit" name="z"/>
			
         
			
      </form>
	  </div>
 <form method="get">
<div id="Num">
<p id="fontp">Nume:<input type="text" name="Nume" required value="" placeholder="Nume"><button type="submit" name="Nume2">Trimite</button></p>
</div>
</form>
<form method="post">
<div id="Pre">
<p id="fontp">Prenume:<input type="text" name="Prenume" required value="" placeholder="Prenume"><button type="submit" name="Pre">Trimite</button></p>
</div>
</form>
<form method="post">
<div id="Ema">
<p id="fontp">Email:<input type="text" name="Email" required value="" placeholder="E-mail"><button type="submit" name="Ema">Trimite</button></p>
</div>
</form>
<form method="post">
<div id="Par">
<p id="fontp">Parola:<input type="password" name="Passworld" required value="" placeholder="Passworld"><button type="submit" name="Pass">Trimite</button></p></p>
</div>
</form>
</div>


</form>
<form class="" action="" method="post" autocomplete="off" >
<div>
<a href="http://localhost/Profil.php"><button type="submit" name="submit">Trimite</button></a>
</div>
</form>
</body>
</html>
