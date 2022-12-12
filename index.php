<!DOCTYPE html>
<html lang="fr"> 
<head>
	<title>WATT IS THE QUESTION</title>
	<meta charset="utf-8">
	<link  href="./assets/css/style_page_accueil.css" rel="stylesheet" type='text/css'>
	<link href="https://fonts.cdnfonts.com/css/polar-snow" rel="stylesheet">
	<link rel="icon" type="image/png" href="./assets/images/ico.png" />
</head>
<body>
	<div id="calque_noir" class="off">
	</div>
	<div id="interrupteur" >
			<img src="./assets/images/off.png" alt="Allumez la lumière" id ="button_light">
	</div>
	<header>
		<h1>WATT IS THE QUESTION</h1>
		<h2>Le site qui répond à toutes les questions que vous vous posez sur l'énergie</h2>
</header>
	<main>
		<div id="questions">
			<div id="consfrigo">
				<a href="./pages/cons_frigo.html">
					<figure>
						<img src="./assets/images/5questions/frigo.webp" >
						<figcaption id="frigo2">
							<p>Un frigo, ça consomme combien ?</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div id="consbox">
				<a href="#">
					<figure>
						<img src="./assets/images/5questions/box.webp" >
						<figcaption id="box">
							<p>Pourquoi éteindre sa box la nuit ?</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div id="consled">
				<a href="#">
					<figure >
						<img src="./assets/images/5questions/led.jpg" >
						<figcaption id="led">
							<p>C'est quoi une led ?</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div id="linky">
				<a href="#">
					<figure >
						<img src="./assets/images/5questions/linky.jpg" >
						<figcaption id="linky1">
							<p>Comment accéder aux données de linky ?</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div id="isola">
				<a href="#">
					<figure >
						<img src="./assets/images/5questions/isolation.jpg" >
						<figcaption id="isolation">
							<p>L'isolation extérieure, c'est vraiment bien ?</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div id="kwh">
				<a href="#">
					<figure >
						<img src="./assets/images/5questions/kwh.jpg" >
						<figcaption id="kilowattheure">
							<p>Combien coûte un KWh ?</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div id="consmoy">
				<a href="#">
					<figure>
						<figcaption id="moyenne">
							<p>Une maison de 120m2 occupée par 4 personnes consomme en moyenne <span id="kwhan"></br>18 796 kWh par an</span></p>
						</figcaption>
					</figure>
				</a>
			</div>
		</div>
		<div id="moteurderecherche">
			<h2><span>B</span><span>i</span><span>n</span><span>g</span><span>o</span></h2>
			<div>
				<p>Vous cherchez la réponse à une question en lien avec l'énergie, confiez-la à notre moteur de recherche Bingo </p>
			</div>
			<form>
				<span>
					<svg>
						<path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
						</path>
					</svg>
				</span>
				<input type="text" name="zt_bingo" id="zt_bingo" >
			</form>
		</div>
		<div id="liens">
			<div>
				<h1 class="titre">Envie d'aller voir ailleurs ?</h1>
				<nav>
					<a href="https://www.ademe.fr">
						<p>https://www.ademe.fr</p>
						<p>Ademe</p>
						<p><strong>L'Ademe</strong>, est résolue à faire bouger les lignes pour bâtir une société plus sobre et solidaire</p>
					</a>
					<a href="https://www.rte-france.com">
						<p>https://www.rte-france.com</p>
						<p>Eco2mix – Consommation d'électricité moyenne en France</p>
						<p>Suivez en temps réel la <strong>consommation d'électricité </strong> en France métropolitaine et visualisez les prévisions de consommation</p>
					</a>
					<a href="https://quelleenergie.fr">
						<p>https://quelleenergie.fr</p>
						<p>Comment faire des économies d'énergie dans son logement</p>
						<p>Comment réduire sa consommation de chauffage ? isoler correctement votre maison ; remplacer vos fenêtres par du double vitrage</p>
					</a>
					<a href="https://quelwatt.fr">
						<p>https://quelwatt.fr</p>
						<p>Des astuces pour réduire le montant de votre facture d'électricité</p>
						<p>Conseils pour réduire votre <strong>facture d'électricité </strong> en fonction des pièces de la maison</p>
						
					</a>
					
				</nav>
			</div>
			<aside>
				<h2 class="titre">Besoin d'idées pour l'hiver</h2>
				<a href="#">
					<figure>
						<img src="./assets/images/outils_conseils/pull.webp" alt="Conseils énergie">
						<figcaption>
							<p> Le pullover,<br>de la chaleur à petit prix</p>
						</figcaption>
					</figure>
				</a>
					
			</aside>
			
		</div>
		<div id="bredouille">
			
				<div>
					<h2 class="titre">Bredouille, vous n'avez pas trouvé la réponse à votre question</h2>
					<form action="./pages/enregistrer-question.php" method="POST">
						<input id="zt_email" name="zt_email" type="email" required placeholder="Votre adresse mail">
						<textarea id="zt_question" name="zt_question" maxlength="500" minlength="4" required placeholder="Votre question"></textarea>
						<input type="submit" id="bouton">
						<a href="./pages/bilan-questions.php">Afficher le bilan des questions</a>
					</form>
					<!--Notification when form was being submitted-->
				</div>
				<aside>
					<h2 class="titre">Une calculette pour gagner des kebabs ! </h2>
					<a href="./pages/calcul_cons.html">
						<img src="./assets/images/outils_conseils/calculette.png" alt="pull - réduction énergie">
					</a>
				</aside>
			
		</div>
		<footer>
			<nav>
				<a href="#">Plan du site</a>
				<a href="#">Mentions légales</a>
				<a href="./gniduweb/index.html">Agence gniduweb - Angoulême</a>
			</nav>
		</footer>
		
	</main>		
	<script src="./js/script_index.js"></script>
	<script>const stateObj = { 'index.php?confirm=ok#bredouille' : 'index' };
			history.pushState(stateObj, '', 'index.php#bredouille');
	</script>
	<?php
	if(isset($_GET['confirm'])){
		if($_GET['confirm'] == 'ok'){
		echo "<script>alert('Votre question a bien été transmise à une équipe compétente !');</script>";
		}}

	?>

</body>

</html>