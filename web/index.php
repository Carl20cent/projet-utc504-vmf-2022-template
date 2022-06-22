<!DOCTYPE html>
<html lang="fr">

<?php
// Définition des variables globales
$GLOBALS["title-page"] = "Accueil";
$GLOBALS["id-page"] = "nav-accueil";
$GLOBALS["bdd-lecture-PDO"] = null;

// Inclusion du script permettant de se connecter à la BDD
// (et stockage de l'objet dans $GLOBALS["bdd-lecture-PDO"])
require("inclusions/connexion-bdd-lecture.php");

// Inclusion du script fournissant des fonctions permettant d'exécuter
// des requêtes SQL sur la BDD
require("inclusions/fonctions-bdd.php");
?>

<?php
// Inclusion des méta-données de la page (<head>)
require("inclusions/head.php");
?>

<body>

	<?php
	// Inclusion de l'en-tête de la page (<header>)
	require("inclusions/header.php");
	?>

	<!-- Contenu principal de la page -->
	<main class="container px-5">
		<h1>Récapitulatif de la programmation du festival 2022</h1>

		<p class="lead">Cette page affiche un récapitulatif de la programmation du <span class="fw-bolder">Vercors Music Festival 2022</span>.</p>

		<img src="images/vercors-music-festival-2022-banniere.png" style="display:block; margin:auto; width: 90%; max-width:600px;" alt="Bannière du Vercors Music Festival 2022">

		<div class="row my-2">

			<!-- 1ère Card -->
			<div class="col-lg-6 col-sm-12 my-2">
				<div class="card">
					<h5 class="card-header">3 jours de concerts</h5>
					<div class="card-body">

						<ul>
							<!-- Concerts du 01/07/2022 -->
							<li>Vendredi 1er juillet 2022 :
								<?php
								$nb = "...";
								echo " <span class='donnee-test gras'>" . $nb . "</span> concerts ";
								?>
								<?php
								$heure_deb = "...";
								echo " à partir de <span class='donnee-test gras'>" . $heure_deb . "</span>";
								?>
							</li>

							<!-- Concerts du 02/07/2022 -->
							<li>Samedi 2 juillet 2022 :
								<span class='donnee-test gras'>...</span>
							</li>

							<!-- Concerts du 03/07/2022 -->
							<li>Dimanche 3 juillet 2022 :
								<span class='donnee-test gras'>...</span>
							</li>
						</ul>

					</div>
				</div>
			</div>

			<!-- 2ème Card -->
			<div class="col-lg-6 col-sm-12 my-2">
				<div class="card">
					<h5 class="card-header">3 scènes sur le plateau du Vercors</h5>
					<div class="card-body">

						<ul>
							<?php
							// TODO Exécuter une requête SQL et afficher les informations
							// des 3 scènes du festival

							// TOFIX Exécution d'une requête de test (pour voir comment cela fonctionne)
							$tabScenes = executeRequeteQuiRetourneDesEnregistrements(
								$GLOBALS["bdd-lecture-PDO"],
								"SELECT * FROM Scene" /* TODO Adapter la requête SQL */
							);

							// TODELETE Données de test
							$tabScenes = ["Scène 1", "Scène 2", "Scène 3"];

							if (!empty($tabScenes)) {
								// Si scènes trouvées => Parcours et affichage des scènes
								foreach ($tabScenes as $scene) {
									echo "<li><span class='donnee-test gras'>" . $scene . "</li>";
								}
							} else {
								// Si aucune scène trouvée => Affichage d'un message
								echo "<i>(Information indisponible)</i>";
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</main>

	<!-- Inclusion du JS de Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>