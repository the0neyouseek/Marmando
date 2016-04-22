<?php $bodyclass = "home"; $active="Accueil"; $connected=true; ?>
<?php include_once '_partials/header.php'; ?>
<?php include_once '_partials/menu.php'; ?>
<main>
<img class="responsive-img" src="./assets/img/slider.jpg" alt="Slider">
<div class="container">
	<div class="row">
		<div class="col s4">
			<div class="card featured-1">
				<div class="card-content">
					<div class="valign-wrapper featured">
						<h5 class="valign center" style="width: 100%;">Robes</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="col s4">
			<div class="card featured-2">
				<div class="card-content">
					<div class="valign-wrapper featured">
						<h5 class="valign center" style="width: 100%;">Chaussures</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="col s4">
			<div class="card featured-3">
				<div class="card-content">
					<div class="valign-wrapper featured">
						<h5 class="valign center white-text" style="width: 100%;">Accessoires</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 center">
			<h4>Nouveautés</h4>
		</div>
		<div class="col s12 center">
			<img src="./assets/img/new.png" alt="" class="responsive-img">
			<a href="#" class="waves-effect waves-light btn green">En voir plus</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12 center">
			<h4>Collection Printemps Homme</h4>
		</div>
		<div class="col s12 center">
			<img src="./assets/img/men.jpg" alt="" class="responsive-img">
			<a href="#" class="waves-effect waves-light btn green">En voir plus</a>
		</div>
	</div>
</div>
</main>
<?php include_once '_partials/footer.php'; ?>