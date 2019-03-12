<!DOCTYPE html>
<html>
<meta charset="utf-8">

<style type="text/css">
	body{
		background-color: rgb(10, 45, 48);
	}
	div, h2 {
		text-align: center;
	}
	table{
		 width: 50%;
		 border-color: blue;
	}
	fieldset{
		background-image: url(hebus_1280x1024_1551486152_4272.jpg);
		background-repeat: no-repeat;
		background-size: 120%;
	}
</style>
<head>
	<title>COORDONEES PERSONNELLES</title><br><br>
	<h2>LES INFORMATIONS DONNEES PAR L'UTILISATEUR</h2><br><br>
</head>

<body>
<fieldset>
<table>
<div><br>
<?php
if(isset($_POST['Nom'])){
	 echo "Nom :";
	 echo "  ";
     echo $_POST['Nom'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['Prénom'])){
	 echo "Prénom :";
	 echo "  ";
     echo $_POST['Prénom'] ;
} ?>  <br><br><br>
<?php
if(isset($_POST['Adresse'])){
	 echo "Votre Adresse :";
	 echo "  ";
     echo $_POST['Adresse'] ; 
} ?>  <br><br><br>
<?php
if(isset($_POST['Profession'])){
	echo "Votre Profession :";
	echo "  ";
    echo $_POST['Profession'] ;
} ?> <br><br><br>

<h2>INFORMATIONS ENVOYEES<br><br></h2><br>
</div>
</table>
</body>
</fieldset>
</html>