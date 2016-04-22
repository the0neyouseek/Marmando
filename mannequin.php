<?php $bodyclass = "mannequin"; $connected = true; $active="";?>
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
					<form>
						<div class="row">
							<div class="input-field col s6">
								<select id="sexe">
									<option value disabled selected>Choisir le sexe</option>
									<option value="1">Femme</option>
									<option value="2">Homme</option>
								</select>
								<label for="sexe" >Sexe</label>
							</div>
							<div class="input-field col s6">
								<input type="number" placeholder="30" id="age">
								<label for="age">Âge</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input type="number" placeholder="180" id="taille">
								<label for="taille">Taille</label>
							</div>
							<div class="input-field col s6">
								<input type="number" placeholder="60" id="poids">
								<label for="poids">Poids</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<select id="couleur">
									<option value disabled selected>Choisir la couleur</option>
									<option value="1">Couleur 1</option>
									<option value="2">Couleur 2</option>
									<option value="3">Couleur 3</option>
								</select>
								<label for="couleur">Couleur de peau</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12 center">
								<a href="#modal1" class="waves-effect waves-light btn green modal-trigger">Choix des cheveux</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<span class="card-title">Mensurations</span>
					<form>
						<div class="row">
							<div class="input-field col s6">
								<input type="number" placeholder="90" id="poitrine">
								<label for="poitrine">Tour de poitrine</label>
							</div>
							<div class="input-field col s6">
								<input type="number" placeholder="70" id="ttaille">
								<label for="ttaille">Tour de taille</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s4">
								<input type="number" placeholder="100" id="hanche">
								<label for="hanche">Tour de hanche</label>
							</div>
							<div class="input-field col s4">
								<input type="number" placeholder="50" id="cuisse">
								<label for="cuisse">Tour de cuisse</label>
							</div>
							<div class="input-field col s4">
								<input type="number" placeholder="85" id="ljambe">
								<label for="ljambe">Longueur de jambe</label>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="center">
				<a href="#" class="waves-effect waves-light btn green">Importer</a>
				<a href="#modal2" class="waves-effect waves-light btn green modal-trigger">Utiliser la webcam</a>
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
<div id="modal1" class="modal">
	<div class="modal-content">
		<h5>Choix des cheveux</h5>
		<div class="row">
			<div class="col s6">
				<div class="row">
					<div class="col s12">
						<div class="input-field">
							<select id="xcouleur">
								<option value disabled >Choisir la couleur</option>
								<option value="1" selected>Blond 1</option>
								<option value="2">Couleur 2</option>
								<option value="3">Couleur 3</option>
							</select>
							<label for="xcouleur">Couleur des cheveux</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s4"><img src="./assets/img/hair-1.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-2.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-3.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-4.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-5.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-6.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-7.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-8.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-9.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-10.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-11.png" alt="" class="responsive-img"></div>
					<div class="col s4"><img src="./assets/img/hair-12.png" alt="" class="responsive-img"></div>
				</div>
			</div>
			<div class="col s6 center">
				<img src="./assets/img/hair.jpg" alt="" class="responsive-img">
				<a href="#!" class="modal-close waves-effect waves-light btn green">Valider la coiffure</a>
			</div>
		</div>
	</div>
</div>
<div id="modal2" class="modal">
	<div class="modal-content center">
		<h5>Analyse en cours…</h5>
		<p>Placez vous façe à la camera et positionnez votre corps à l'intérieur du modèle*<p>
		<img src="./assets/img/webcam.png" alt="" class="responsive-img">
		<small class="right">(*les proportions peuvent ne pas correspondre exactement)</small>
	</div>
</div>
<?php include_once '_partials/footer.php'; ?>