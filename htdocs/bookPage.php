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
$image=$_GET['img'];
$id= $_GET['variableName'];
$zz=$_GET['variableName'];
$logid=$_GET['logid'];
$numez= $_SESSION['Name'];
$penz=$_SESSION['Pren'];
$emailz=$_SESSION['E-mail'];
$parz=$_SESSION['Pass'];
$image=$_SESSION['img'];
$book1=$_SESSION['Book_1'];
$book2=$_SESSION['Book_2'];
$book3=$_SESSION['Book_3'];
$book4=$_SESSION['Book_4'];
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
$sql2 = "SELECT * FROM book";

$result2 = $conn->query($sql2); 
if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
	
	  $CarInp2[]=$row["Carti_Inprumutate"]." ";
	
	  }
}
$lenghCarti=count($CarInp2);
$sql2 = "SELECT * from book WHERE  id=$zz";

$result = $conn->query($sql2); 

  // output data of each row
  while($row = $result->fetch_assoc()) {
	    $Titl=$row["Titlu"]." ";
	  $Autor=$row["Autor"]." ";
	  $Categ=$row["Categorie"]." ";
	  $Editu=$row["Editura"]." ";
	  $Anapar=$row["An Aparitie"]." ";
	  $Imag=$row["Imagini"]." ";
	  $Titl2=$row["Titlu 2"]." ";
	  $CarInp=$row["Carti_Inprumutate"]." ";
	  $id=$row["id"];
	   echo "
	   <div>
	   <img src=\"$Imag\" alt=\"img-1\" id=\"BookPageImage\">
	   <p id=\"BookPageTitle\">$Titl2</p>
	   <p id=\"BookPageAutor\">Autor:$Autor</p>
	   <p id=\"BookPageCategorie\">Categorie:$Categ</p>
	   <p id=\"BookPageEditura\">Editura:$Editu</p>
	   <p id=\"BookPageAnAparitie\">An Aparitie:$Anapar</p>
	   </div>
	   ";
	
  }

if(isset($_POST["Inp"])){
	for($i=0;$i<$lenghCarti;$i++){
		if(($CarInp2[$i]!=0)||($CarInp2[$i]==$id)){
		
		}else{
			
			
			$sqlog = "UPDATE log SET Book_1='$id' WHERE id=$logid";
            if (mysqli_query($conn, $sqlog)) {
  //echo "Record updated successfully";
          } else {
           echo "Error updating record: " . mysqli_error($conn);
           }

        $sqlbook = "UPDATE book SET Carti_Inprumutate='$logid' WHERE id=$id";
         if (mysqli_query($conn, $sqlbook)) {
  //echo "Record updated successfully";
       } else {
         echo "Error updating record: " . mysqli_error($conn);
			}
				
			
		
}
//}else{
	//echo "Cartea aceasta este inprumutata";
}
}			

	



?>

<form class="" action="" method="post" autocomplete="off" >
<button name="Inp">Inprumuta</button>
</form>
</body>
</html>