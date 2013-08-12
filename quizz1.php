<?php 
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Quizz civique</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="jquerymobilelocal/jquery.mobile-1.3.0.min.css" />
<script src="jquerymobilelocal/jquery-1.8.2.min.js"></script>
<script src="jquerymobilelocal/jquery.mobile-1.3.0.min.js"></script>

</head>

<body>
	<div data-role="page" data-theme="e">

		<div data-role="header">
			<div data-id="navig" data-role="navbar">
				<ul>
					<li> <a href="index.html"> Accueil </a></li>
					<li> <a href="apropos.html"> A propos </a></li>
					<li> <a href="aide.html"> Aide </a></li>
				</ul>
			</div>
		</div>
		
		<div data-role="content">
			<h3 style="font-family: ms-trebuchet; font-weight:bold; text-align:center"> Quizz niveau 1 </h3>
			<form action="result.php" method="post" data-transition="flip" data-direction="reverse" name="quizz_niveau1" id="quizz_niveau1id">
				<fieldset>
					<fieldset data-role="controlgroup" class="ui-grid-e">
						<legend><b>Question 1:</b> De ces trois drapeau, lequel est celui du S&eacute;n&eacute;gal?:</legend>
							<div class="ui-block-a">
								<input type="radio" name="choixq1" id="choix11" value="Ghana" checked="checked" /> 
									<label for="radio-choice-1"> <img src="image/ghana.jpg" widht="30" height="20"> </label>
							</div>
							<div class="ui-block-b">
								<input type="radio" name="choixq1" id="choixq12" value="Senegal" /> 
									<label for="radio-choice-2"> <img src="image/drapeau_SN.gif" widht="30" height="20"> </label> 
							</div>
							<div class="ui-block-c">
								<input type="radio" name="choixq1" id="choix13" value="Cameroun" /> 
									<label for="radio-choice-3"> <img src="image/cameroun.jpg" widht="30" height="20"> </label> 
							</div>
					</fieldset>
					<fieldset data-role="controlgroup">
							<legend><b> Question 2:</b> Je passe devant un site ex&eacute;cutant la lev&eacute;e des couleurs. Que dois-je faire? :</legend>
							<input type="radio" name="choixq2" id="choix21" value="Je continue ma route" checked="checked" /> 
								<label for="radio-choice-1">Je continue ma route</label>
							<input type="radio" name="choixq2" id="choix22" value="Je m'arr&ecirc;te" /> 
								<label for="radio-choice-2">Je m&apos;arr&ecirc;te et attend la fin</label> 
							<input type="radio" name="choixq2" id="choix23" value="Je contourne le site" /> 
								<label for="radio-choice-3">Je contourne le site </label> 
					</fieldset>
					<fieldset data-role="controlgroup">
							<legend><b> Question 3:</b> Press&eacute;, je veux me rendre de l&apos;autre c&ocirc;t&eacute; de  l&apos;autoroute. Que dois-je faire?</legend>
							<input type="radio" name="choixq3" id="choix31" value="J&apos;emprunte le pont pi&eacute;ton" checked="checked" /> 
								<label for="radio-choice-1">J&apos;emprunte le pont pi&eacute;ton</label>
							<input type="radio" name="choixq3" id="choix32" value="Je me faufile entre les voitures" /> 
								<label for="radio-choice-2">Je me faufile entre les voitures</label> 
					</fieldset>
					<input type="hidden" name="nom" id="nomid" value="<?php echo $nom ?>" >
					<input type="hidden" name="prenom" id="prenomid" value="<?php echo $prenom ?>" >

					<input type="submit" name="btnsuivant" value=" - Suivant -" />
				</fieldset>
			</form>
		</div>
		<div data-role="footer">
			<h5>Designed & produced by Te@m-Civique</h5>
		</div>

	</div>
</body>
</html>