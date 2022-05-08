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
	  $CarInp=$row["Carti Inprumutater"]." ";
	  echo "<div class=\"image-holder\"><a href=\"BookProfile.php\"><img src=\"$Imag\" alt=\"img-1\" id=\"BookImgZon\"></a><div id=\"pmargin\">$Titl</div></div>";}
  
}
?>