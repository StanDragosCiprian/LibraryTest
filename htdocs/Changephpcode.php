<?php 
include "signinconect.php";
$numez= $_SESSION['Name'];
$penz=$_SESSION['Pren'];
$emailz=$_SESSION['E-mail'];
$parz=$_SESSION['Pass'];
$idz=$_SESSION['id'];
$image=$_SESSION['img'];
$num="";
$pre="";
$em="";
$ps="";
$image="";
//echo '<img src="$_SESSION[\'img\']" id= ="pofimg"/>';
if(isset($_POST["Nume"])){
	$num=$_POST["Nume"];
	$sql2 = "UPDATE log SET Nume='$num' WHERE id=$idz";


if (mysqli_query($conn, $sql2)) {
 
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
if(isset($_POST["Prenume"])){
	$pre=$_POST["Prenume"];
	$sql2 = "UPDATE log SET Prenume='$pre' WHERE id=$id";
if (mysqli_query($conn, $sql2)) {
 
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
	
}
if(isset($_POST["Email"])){
	$em=$_POST["Email"];
	$sql2 = "UPDATE log SET Email='$em' WHERE id=$id";
	

if (mysqli_query($conn, $sql2)) {
 
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
if(isset($_POST["Passworld"])){
	$ps=$_POST["Passworld"];
	$sql2 = "UPDATE log SET Passworld='$ps' WHERE id=$id";
if (mysqli_query($conn, $sql2)) {
 
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

}
if(isset($_POST["z"])){
$image=$_FILES['image']['name'];
$sql2 = "UPDATE log SET Image='$image' WHERE id=$id";
if (mysqli_query($conn, $sql2)) {
 
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
//$sql2 = "UPDATE log SET Nume='Dzze' WHERE id=$id";

/*
if (mysqli_query($conn, $sql2)) {
 
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

*/
?>