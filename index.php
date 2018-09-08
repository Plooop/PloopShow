<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Login</title>
	<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">

</head>
<body>

<div id="titre"><img src="img2/v3.png" alt="Le Ploop Show !" /></div>

<div class="erreur">
<?php
if(@$_GET["fail"])
echo "<span class='msg'>Le mot de passe saisi est incorrect ! :(</span>";
elseif(@$_GET["logout"])
echo "<span class='msg'>Déconnecté !</span>";
elseif (@$_GET['notlogin'])
echo "<span class='msg'>Saisir le mot de passe fourni !</span>";
elseif (@$_GET['refuse'])
echo "<span class='msg'>Vous devez saisir un mot de passe pour continuer. :(</span>";
?>
</div>

<div class="row">
<div class="container">
<div id="login">
	<div id="form">
		<form class="log-form" action="login.php" method="post">
			<div class="col-3">
			<input class="effect-8" type="password" required name="pass" placeholder="Mot de passe">
			<span class="focus-border"><i></i>
			</span>
		</div>
			<button class="btn" type="submit">Valider</button>
		</form>
	</div>
</div>

</div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
