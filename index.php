<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sky Forms</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="css/survey.css">
		<link rel="stylesheet" href="css/sky-survey.css">
		<link rel="stylesheet" href="css/sky-forms-survey.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->

		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	<body class="bg-blue">
		<div class="body">

			<!-- Red color scheme -->
			<form action="post.php" class="sky-form" method="post">
				<header>
					This is a comparative study between the development of some IOS features and Android as part of my graduation project. Your help will be appreciated. Thank you.
					<br /><hr>
					Ceci est d'une étude comparative du développement entre certaines fonctionnalités d'IOS et d'Android dans le cadre de mon projet de fin d'études. Votre aide sera apprécié. Merci.
				</header>

				<fieldset>
					<section>
						<label class="label"><h1>IOS Development / Développement IOS</h1></label>
					</section>
					
					<section>
						<label class="label">&nbsp;</label>
					</section>
					
					<section>
						<label class="label"><h3>Geolocalisation / Géolocalisation</h3></label>
					</section>

					<section>
						<label class="label"></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_1" value="ios_1_1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_1" value="ios_1_2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_1" value="ios_1_3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_1" value="ios_1_4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_1" value="ios_1_5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_1" value="ios_1_6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Sensors (Compass) / Capteurs ( Boussole) </h3></label>
					</section>

					<section>
						<label class="label"></label>
						<div class="inline-group2">
							<label class="radio"><input type="radio" name="ios_2" value="ios_2_1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_2" value="ios_2_2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_2" value="ios_2_3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_2" value="ios_2_4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_2" value="ios_2_5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_2" value="ios_2_6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Databases / Bases de données</h3></label>
					</section>

					<section>
						<label class="label"></label>
						<div class="inline-group3">
							<label class="radio"><input type="radio" name="ios_3" value="ios_3_1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_3" value="ios_3_2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_3" value="ios_3_3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_3" value="ios_3_4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_3" value="ios_3_5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_3" value="ios_3_6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label">Comments / Commentaires</label>
						<label class="textarea">
							<textarea rows="2" name="ios_comments"></textarea>
						</label>
					</section>
				</fieldset>

				<fieldset>
					<section>
						<label class="label"><h1>Android Development / Développement Android</h1></label>
					</section>
					
					<section>
						<label class="label">&nbsp;</label>
					</section>
					
					<section>
						<label class="label"><h3>Geolocalisation / Géolocalisation</h3></label>
					</section>

					<section>
						<label class="label"></label>
						<div class="inline-group4">
							<label class="radio"><input type="radio" name="android_1" value="android_1_1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_1" value="android_1_2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_1" value="android_1_3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_1" value="android_1_4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_1" value="android_1_5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_1" value="android_1_6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Sensors (Compass) / Capteurs ( Boussole) </h3></label>
					</section>

					<section>
						<label class="label"></label>
						<div class="inline-group5">
							<label class="radio"><input type="radio" name="android_2" value="android_2_1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_2" value="android_2_2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_2" value="android_2_3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_2" value="android_2_4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_2" value="android_2_5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_2" value="android_2_6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Databases / Bases de données</h3></label>
					</section>

					<section>
						<label class="label"></label>
						<div class="inline-group6">
							<label class="radio"><input type="radio" name="android_3" value="android_3_1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_3" value="android_3_2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_3" value="android_3_3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_3" value="android_3_4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_3" value="android_3_5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_3" value="android_3_6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label">Comments / Commentaires</label>
						<label class="textarea">
							<textarea rows="2" name="android_comments"></textarea>
						</label>
					</section>
				</fieldset>

				<footer>
					<button type="submit" class="button">Submit</button>
				</footer>
			</form>
			<!--/ Red color scheme -->
		</div>
	</body>
</html>
