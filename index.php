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
					Ceci est une étude comparative du développement entre certaines fonctionnalités d'IOS et d'Android dans le cadre de mon projet de fin d'études. Votre aide sera apprécié. Merci.
				</header>

				<fieldset>
					
					<?php if (isset($_SESSION['message'])) : ?>
						<section>
							<div class="note-error"><h1><?php echo $_SESSION['message']; ?></h1></div>
						</section>
					<?php unset($_SESSION['message']); ?>
					<?php endif; ?>
					
					<section>
						<label class="label"><h1>IOS Development / Développement IOS</h1></label>
					</section>
					
					<section>
						<label class="label"><h3>Geolocation / Géolocalisation</h3></label>
					</section>

					<section>
						<label class="label">* <i>Examples and tutorials availables / Exemples et tutoriels disponibles</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_1_1" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_1_1" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_1_1" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_1_1" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_1_1" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_1_1" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Help and support available online / Aide et support disponible en ligne</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_1_2" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_1_2" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_1_2" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_1_2" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_1_2" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_1_2" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Having a code that compiles without errors  / Avoir un code qui compile sans erreurs</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_1_3" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_1_3" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_1_3" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_1_3" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_1_3" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_1_3" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>The application run without any bugs / L'application fonctionne sans bogues</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_1_4" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_1_4" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_1_4" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_1_4" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_1_4" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_1_4" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Sensors (Compass) / Capteurs ( Boussole) </h3></label>
					</section>

					<section>
						<label class="label">* <i>Examples and tutorials availables / Exemples et tutoriels disponibles</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_2_1" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_2_1" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_2_1" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_2_1" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_2_1" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_2_1" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Help and support available online / Aide et support disponible en ligne</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_2_2" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_2_2" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_2_2" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_2_2" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_2_2" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_2_2" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Having a code that compiles without errors  / Avoir un code qui compile sans erreurs</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_2_3" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_2_3" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_2_3" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_2_3" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_2_3" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_2_3" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>The application run without any bugs / L'application fonctionne sans bogues</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_2_4" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_2_4" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_2_4" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_2_4" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_2_4" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_2_4" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Databases / Bases de données</h3></label>
					</section>

					<section>
						<label class="label">* <i>Examples and tutorials availables / Exemples et tutoriels disponibles</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_3_1" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_3_1" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_3_1" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_3_1" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_3_1" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_3_1" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Help and support available online / Aide et support disponible en ligne</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_3_2" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_3_2" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_3_2" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_3_2" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_3_2" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_3_2" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Having a code that compiles without errors  / Avoir un code qui compile sans erreurs</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_3_3" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_3_3" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_3_3" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_3_3" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_3_3" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_3_3" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>The application run without any bugs / L'application fonctionne sans bogues</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="ios_3_4" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="ios_3_4" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="ios_3_4" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="ios_3_4" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="ios_3_4" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="ios_3_4" value="6"><i></i>Not Applicable / Non applicable</label>
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
						<label class="label">* <i>Examples and tutorials availables / Exemples et tutoriels disponibles</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_1_1" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_1_1" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_1_1" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_1_1" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_1_1" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_1_1" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Help and support available online / Aide et support disponible en ligne</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_1_2" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_1_2" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_1_2" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_1_2" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_1_2" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_1_2" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Having a code that compiles without errors  / Avoir un code qui compile sans erreurs</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_1_3" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_1_3" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_1_3" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_1_3" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_1_3" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_1_3" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>The application run without any bugs / L'application fonctionne sans bogues</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_1_4" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_1_4" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_1_4" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_1_4" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_1_4" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_1_4" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Sensors (Compass) / Capteurs ( Boussole) </h3></label>
					</section>

					<section>
						<label class="label">* <i>Examples and tutorials availables / Exemples et tutoriels disponibles</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_2_1" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_2_1" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_2_1" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_2_1" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_2_1" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_2_1" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Help and support available online / Aide et support disponible en ligne</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_2_2" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_2_2" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_2_2" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_2_2" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_2_2" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_2_2" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Having a code that compiles without errors  / Avoir un code qui compile sans erreurs</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_2_3" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_2_3" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_2_3" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_2_3" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_2_3" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_2_3" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>The application run without any bugs / L'application fonctionne sans bogues</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_2_4" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_2_4" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_2_4" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_2_4" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_2_4" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_2_4" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					
					<section>
						<hr>
					</section>
					
					<section>
						<label class="label"><h3>Databases / Bases de données</h3></label>
					</section>

					<section>
						<label class="label">* <i>Examples and tutorials availables / Exemples et tutoriels disponibles</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_3_1" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_3_1" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_3_1" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_3_1" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_3_1" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_3_1" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Help and support available online / Aide et support disponible en ligne</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_3_2" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_3_2" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_3_2" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_3_2" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_3_2" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_3_2" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>Having a code that compiles without errors  / Avoir un code qui compile sans erreurs</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_3_3" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_3_3" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_3_3" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_3_3" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_3_3" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_3_3" value="6"><i></i>Not Applicable / Non applicable</label>
						</div>
					</section>
					<section>
						<label class="label">* <i>The application run without any bugs / L'application fonctionne sans bogues</i></label>
						<div class="inline-group1">
							<label class="radio"><input type="radio" name="android_3_4" value="1"><i></i>Very easy / Très facile</label>
							<label class="radio"><input type="radio" name="android_3_4" value="2"><i></i>Easy / Facile</label>
							<label class="radio"><input type="radio" name="android_3_4" value="3"><i></i>Average / Moyen</label>
							<label class="radio"><input type="radio" name="android_3_4" value="4"><i></i>Difficult / Difficile</label>
							<label class="radio"><input type="radio" name="android_3_4" value="5"><i></i>Very Difficult / Très difficile</label>
							<label class="radio"><input type="radio" name="android_3_4" value="6"><i></i>Not Applicable / Non applicable</label>
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
		<a title="Web Statistics" href="http://clicky.com/100772563"><img alt="Web Statistics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
		<script src="//static.getclicky.com/js" type="text/javascript"></script>
		<script type="text/javascript">try{ clicky.init(100772563); }catch(e){}</script>
		<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100772563ns.gif" /></p></noscript>
	</body>
</html>
