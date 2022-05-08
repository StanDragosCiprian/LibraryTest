<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="corp">
<?php
include "Insert.php";
if(isset($_POST["submit"])){

	header("Location:sigin.php");
}
?>
<div id="headi2">
<a href="FirstPage.php"><img src="Logo.svg" alt="Logo" id="biblog"></a>
<p id="login"><a href="http://localhost/sigin.php">Log In</a></p>
<p id="signin"><a href="http://localhost/login.php">Sign In</a></p>
</div>
<div id="logblock">

<form class="" action="" method="post" autocomplete="off" >
<div class="sing">
<h1>Sign In</h1>
</div>
<div class="input">
<input type="text" name="Nume" required value="" placeholder="Nume">
</div>
<div class="input">
<input type="text" name="Prenume" required value="" placeholder="Prenume" > 
</div>
<div class="input">
<input type="text" name="Email" required value="" placeholder="E-mail">
</div>
<div class="input">
<input type="password" name="Passworld" required value="" placeholder="Passworld">
</div>
<div class="cend">
<button type="submit" name="submit">Trimite</button>
</div>
</form>
</div>
<div>
<img src="LogBack.jpg" alt="Logo" id="background-img">
</div>
</body>

<script>

</script>
</html>