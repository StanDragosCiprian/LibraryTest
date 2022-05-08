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
include "signinconect.php";

$numez= $_SESSION['Name'];
$penz=$_SESSION['Pren'];
$emailz=$_SESSION['E-mail'];
$parz=$_SESSION['Pass'];
$image=$_SESSION['img'];

$sql2 = "UPDATE log SET Image=$image WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  //echo "Record updated successfully";
} else {
 // echo "Error updating record: " . mysqli_error($conn);
}

?>

<div id="headi">
<a href="FirstPage.php"><img src="Logo.svg" alt="Logo" id="biblog"></a>
<p id="login"><a href="http://localhost/sigin.php">Log In</a></p>
<p id="signin"><a href="http://localhost/login.php">Sign In</a></p>
</div>

<div id="profzon">
 <div class="cend">
 <div id="Change">
<a href="http://localhost/Change.php"><button type="submit" name="submit" >Change</button></a>
</div>
</div>



<?php echo "<img src=\"$image\" id=\"pofimg\">"?>

<div id="Num">

 
 
<p id="fontp">Nume:<?php echo "$numez";?></p>
</div>
<div id="Pre">
<p id="fontp">Prenume:<?php echo "$penz";?></p>
</div>
<div id="Ema">
<p id="fontp">Email:<?php echo "$emailz";?></p>
</div>
<div id="Par">
<p id="fontp">Parola:<p id="pas"><?php echo "$parz";?></p></p>
</div>
</div>
</body>
</html>