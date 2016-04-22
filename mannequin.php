<?php $bodyclass = "mannequin"; $connected = true;?>
<?php include_once '_partials/header.php'; ?>
<?php include_once '_partials/menu.php'; ?>
<div class="container">
	<div class="row">
		<div class="col s12 center">
			<h3>Création de votre mannequin</h3>
		</div>
	</div>
	<div class="row">
		<div class="col s4">
			<div class="card">
				<div class="card-content">
					<span class="card-title">Général</span>
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<select id="sexe">
										<option value disabled selected>Choisir le sexe</option>
										<option value="1">Femme</option>
										<option value="2">Homme</option>
									</select>
									<label for="sexe" >Sexe</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select id="taille">
										<option value disabled selected>Choisir la taille</option>
										<option value="130">130cm</option>
										<option value="135">135cm</option>
										<option value="140">140cm</option>
										<option value="145">145cm</option>
										<option value="150">150cm</option>
										<option value="155">155cm</option>
										<option value="160">160cm</option>
										<option value="165">165cm</option>
										<option value="170">170cm</option>
										<option value="175">175cm</option>
										<option value="180">180cm</option>
										<option value="185">185cm</option>
										<option value="190">190cm</option>
									</select>
									<label for="taille">Taille</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select id="poids">
										<option value disabled selected>Choisir le poids</option>
										<option value="60">60kg</option>
										<option value="65">65kg</option>
										<option value="70">70kg</option>
										<option value="75">75kg</option>
										<option value="80">80kg</option>
										<option value="85">85kg</option>
										<option value="90">90kg</option>
										<option value="95">95kg</option>
										<option value="100">100kg</option>
										<option value="105">105kg</option>
										<option value="110">110kg</option>
									</select>
									<label for="poids">Poids</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="number" placeholder="30" id="age">
									<label for="age">Âge</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select id="couleur">
										<option value disabled selected>Choisir la couleur</option>
										<option value="1">Couleur 1</option>
										<option value="2">Couleur 2</option>
										<option value="3">Couleur 3</option>
										<option value="4">Couleur 4</option>
										<option value="5">Couleur 5</option>
										<option value="6">Couleur 6</option>
									</select>
									<label for="couleur">Couleur de peau</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center">
									<a href="cheveux.php" class="waves-effect waves-light btn green">Choix des cheveux</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="center">
				<a href="#" class="waves-effect waves-light btn green">Importer</a>
				<a href="#" class="waves-effect waves-light btn green">Utiliser la webcam</a>
			</div>
		</div>
		<div class="col s8">
			<div class="row">
				<div class="col s12">
					<img src="./assets/img/model.jpg" alt="" class="responsive-img">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s4 offset-s3">
					<input type="text" name="Nom" value="" id="nom">
					<label for="nom">Nom</label>
				</div>
				<div class="col s4">
					<a href="#" class="waves-effect waves-light btn green">Enregistrer</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once '_partials/footer.php'; ?>