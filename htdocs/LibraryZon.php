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
include "bookselect.php";
error_reporting(0);
$image=$_GET['img'];
$logid= $_GET['id'];
if($logid==0){
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

<section>
<div id="RightBlue">
<h5>
Carti
</h5>
</div>
</section>
</div>

<div id="Carti"><h5>Cartii</h5></div>
<div class="custom-select" style="width:200px;">
  <select>

    <option value="0">Select car:</option>
    <option value="1">Audi</option>
    <option value="2">BMW</option>
    <option value="3">Citroen</option>
    <option value="4">Ford</option>
    <option value="5">Honda</option>
    <option value="6">Jaguar</option>
    <option value="7">Land Rover</option>
    <option value="8">Mercedes</option>
    <option value="9">Mini</option>
    <option value="10">Nissan</option>
    <option value="11">Toyota</option>
    <option value="12">Volvo</option>
  </select>
</div>
<div id="zonz">
<div class="gallery">
<?php

include "conect.php";
$sql = "SELECT * FROM book";

$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $Titl=$row["Titlu"]." ";
	  $Autor=$row["Autor"]." ";
	  $Categ=$row["Categorie"]." ";
	  $Editu=$row["Editura"]." ";
	  $Anapar=$row["An Aparitie"]." ";
	  $Imag=$row["Imagini"]." ";
	  $Titl2=$row["Titlu 2"]." ";
	  $CarInp=$row["Carti Inprumutater"]." ";
	  $id=$row["id"];
	  echo "<div class=\"image-holder\"><a href=\"bookPage.php?variableName=$id&img=$image&logid=$logid\"><img src=\"$Imag\" alt=\"img-1\" id=\"BookImgZon\"><div id=\"pmargin\">$Titl</div></a></div>";
	  }
}
?>

</div>

</body>
</html>