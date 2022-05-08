<?php

include "conect.php";

$sql = "INSERT INTO `book` (`id`, `Titlu`, `Autor`, `Categorie`, `Editura`, `An Aparitie`, `Imagini`, `Carti Inprumutater`) VALUES (NULL, 
'Ugly Love. Despre fata urata a iubirii', 'Colleen Hoover', 'Literatura Universala', 'EPICA', '2016',
 'CartiImagini/Ugly Love. Despre fata urata a iubirii.jpg', '0');";
$rez=mysqli_query($conn, $sql);
if ($rez) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>