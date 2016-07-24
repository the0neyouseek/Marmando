<?php $bodyclass = "inscription"; $connected = true; $active=""; ?>
<?php include_once '_partials/header.php'; ?>
<?php include_once '_partials/menu.php'; ?>
<div class="row">
	<div class="col s8 push-s2">
		<div class="card center success">
			<div class="card-content">
				<span class="card-title">Félicitations !</span>
				<p>Votre commande a bien était validée et est en cours de traitement.</p><br>
				<p>Vous allez recevoir prochainement un mail recapitulatif de votre commande.</p><br>
				<a href="./index.php" class="waves-effect waves-light btn green">Suivre ma commande</a>
				<a href="./index.php" class="waves-effect waves-light btn green">Imprimer le reçu</a>
				<a href="./index.php" class="waves-effect waves-light btn white grey-text text-darken-3">Aller à l'Accueil</a>
			</div>
		</div>
	</div>
</div>
<?php include_once '_partials/footer.php'; ?>