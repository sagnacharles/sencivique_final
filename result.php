<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$choixq1 = $_POST['choixq1'];
$choixq2 = $_POST['choixq2'];
$choixq3 = $_POST['choixq3'];
?>

<!DOCTYPE html> 
<html> 
	<head> 
	<title>Resultats</title> 
<link rel="stylesheet" href="jquerymobilelocal/jquery.mobile-1.3.0.min.css" />
<script src="jquerymobilelocal/jquery-1.8.2.min.js"></script>
<script src="jquerymobilelocal/jquery.mobile-1.3.0.min.js"></script>
	</head> 
	<body> 
   
 <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '201609560001964',                       // App ID from the app dashboard
      channelUrl : '///127.0.0.1/sencivique/channel.html', 		// Channel file for x-domain comms
      status     : true,                                 	// Check Facebook Login status
      xfbml      : true                                  	// Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=201609560001964";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

	<div data-role="page"> 
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
			<h1 style="text-align: center">Resultats</h1> 
				<h3> Merci d'avoir jou&eacute;, <?php echo $prenom." ".$nom; ?> </h3>
				<p>&nbsp;	 
                </p>
				<?php 
					echo "</br> Question 1: ".$choixq1;
					echo "</br> Question 2: ".$choixq2;
					echo "</br> Question 3: ".$choixq3;					
				?>
			</div>
            
      	<p>Vous pouvez envoyer votre score sur facebook ou le partager </p>
        <div class="fb-send" data-href="http://facebook.com" style="font-size:14px"></div>
		<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank"><button type="button">Partager</button></a>	
		
        </div> 
	</body> 
</html>