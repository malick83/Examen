<!DOCTYPE html>
<html>
<head>
	<title>FICHE D'INFORMATIONS</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	form{
		background-color: white;
        width: 50%;
	}
    label{
    	text-align: center;
    	text-align: none;
    }
    legend{
    	background-color: blue;
    }
    footer{
    	text-align: center;
    	background-color: rgb(0, 42, 50);
    }
    body{
    	background-color: rgb(25, 49, 15);
    	background-image: url(1338392701_45226.jpg);
    	background-repeat: no-repeat;
		background-size: 150%;
    }

    img{
    	font-size: 100%;
     }

</style>
<body>

	<div align="center">
	<form method="POST" action="recueil.php">
		<legend><br> VOS INFORMATIONS <br><br></legend>
		<fieldset>
		<table>
		<img src="téléchargé.png" width="15%" height="10%"><br><br><br>

		<label for="Nom"><small> Nom:</small></label>
		<input type="text" name="Nom" placeholder="Votre Nom"><br><br><br>


		<label for="Prénom"><small>Prénom:</small></label>
		<input type="text" name="Prénom" placeholder="Votre Prénom"><br><br><br>

		<label for="Adresse"><small> Adresse: </small></label>
        <input type="Adresse" id="Adresse" name="Adresse" placeholder="Fann"><br><br><br>

		<label for="Profession"> <small>Profession: </small></label>
		<input type="text" name="Profession" placeholder=" employer"><br><br><br>
		<input type="submit" name="valider" align="rigth">
        </table>
	</form></fieldset></div>
	<footer width: 100% ><hr> 
	<p>Pour plus d'informations contactez-nous sur</p>
	<p>malickkebe83@gmail.com    ou  le 77 532 34 50 </p><br><hr>
	</footer>
</body>
</html>