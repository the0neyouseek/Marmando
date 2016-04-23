<?php $bodyclass = "green"; $connected = true; $active="Panier";?>
<?php include_once '_partials/header.php'; ?>
<?php include_once '_partials/menu.php'; ?>
<div class="container">
	<div class="row">
		<div class="col s12">
			<h3 class="white-text">Mon panier</h3>
		</div>
	</div>
	<div class="row">
		<div class="col s8">
			<div class="card">
				<div class="card-content">
					<span class="card-title">Article #1</span>
					<div class="row">
						<div class="col s3"><img src="./assets/img/cl-1.jpg" alt="" class="responsive-img"></div>
						<div class="col s9">
							<h5>Lorem ipsum dolor sit amet.</h5>
							<p><strong>Couleur : </strong>Bleu <strong>Taille : </strong>M</p>
							<p><strong>Marque :</strong> Lorem ipsum.</p><br>
							<div class="col s4">
								<form class="" method="post">
									<div class="input-field">
										<input type="number" min="1" value="1" id="q1">
										<label for="q1">Quantité</label>
									</div>
								</form>
							</div>
							<div class="col s8 valign-wrapper price">
								<div class="valign">
									<p><strong>Prix :</strong> 70 €</p>
								</div>
							</div>
							<a href="#" class="waves-effect waves-light btn red">Supprimer</a> <a href="#" class="waves-effect waves-light btn grey lighten-2 grey-text text-darken-3">Actualiser le panier</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<span class="card-title">Article #2</span>
					<div class="row">
						<div class="col s3"><img src="./assets/img/cl-2.jpg" alt="" class="responsive-img"></div>
						<div class="col s9">
							<h5>At in officia ullam praesentium.</h5>
							<p><strong>Couleur : </strong>Bleu <strong>Taille : </strong>M</p>
							<p><strong>Marque :</strong> Lorem ipsum.</p><br>
							<div class="col s4">
								<form class="" method="post">
									<div class="input-field">
										<input type="number" min="1" value="1" id="q2">
										<label for="q2">Quantité</label>
									</div>
								</form>
							</div>
							<div class="col s8 valign-wrapper price">
								<div class="valign">
									<p><strong>Prix :</strong> 70 €</p>
								</div>
							</div>
							<a href="#" class="waves-effect waves-light btn red">Supprimer</a> <a href="#" class="waves-effect waves-light btn grey lighten-2 grey-text text-darken-3">Actualiser le panier</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<span class="card-title">Article #3</span>
					<div class="row">
						<div class="col s3"><img src="./assets/img/cl-3.jpg" alt="" class="responsive-img"></div>
						<div class="col s9">
							<h5>Totam, minima non ab debitis!</h5>
							<p><strong>Couleur : </strong>Bleu <strong>Taille : </strong>M</p>
							<p><strong>Marque :</strong> Lorem ipsum.</p><br>
							<div class="col s4">
								<form class="" method="post">
									<div class="input-field">
										<input type="number" min="1" value="1" id="q3">
										<label for="q3">Quantité</label>
									</div>
								</form>
							</div>
							<div class="col s8 valign-wrapper price">
								<div class="valign">
									<p><strong>Prix :</strong> 70 €</p>
								</div>
							</div>
							<a href="#" class="waves-effect waves-light btn red">Supprimer</a> <a href="#" class="waves-effect waves-light btn grey lighten-2 grey-text text-darken-3">Actualiser le panier</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<span class="card-title">Article #4</span>
					<div class="row">
						<div class="col s3"><img src="./assets/img/cl-4.jpg" alt="" class="responsive-img"></div>
						<div class="col s9">
							<h5>Ratione fuga autem minus rerum.</h5>
							<p><strong>Couleur : </strong>Bleu <strong>Taille : </strong>M</p>
							<p><strong>Marque :</strong> Lorem ipsum.</p><br>
							<div class="col s4">
								<form class="" method="post">
									<div class="input-field">
										<input type="number" min="1" value="1" id="q4">
										<label for="q4">Quantité</label>
									</div>
								</form>
							</div>
							<div class="col s8 valign-wrapper price">
								<div class="valign">
									<p><strong>Prix :</strong> 70 €</p>
								</div>
							</div>
							<a href="#" class="waves-effect waves-light btn red">Supprimer</a> <a href="#" class="waves-effect waves-light btn grey lighten-2 grey-text text-darken-3">Actualiser le panier</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col s4">
			<div class="card">
				<div class="card-content center">
					<span class="card-title">Total</span>
					<h5 class="center">235 €</h5>
					<form action="#">
						<div class="input-field">
							<textarea id="note" class="materialize-textarea"></textarea>
							<label for="note">Commentaire</label>
						</div>
					</form>
					<a href="./success-payement.php" class="waves-effect waves-dark btn green">Accéder au payement</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once '_partials/footer.php'; ?>