<?php $bodyclass = "connexion"; ?>
<?php include_once '_partials/header.php'; ?>
<?php include_once '_partials/menu.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col s7 center">
				<h1 class="white-text logo">Marmando</h1>
				<p class="grey-text text-lighten-2 lead">La mode des marmottes !</p>
				<a href="./index.php" class="waves-effect waves-light btn white grey-text text-darken-3"><i class="material-icons right">keyboard_arrow_right</i>Voir nos collections</a>
			</div>
			<div class="col s5">
				<div class="card login">
					<form action="login.php" method="post">
						<div class="card-content">
							<span class="card-title">Connectez vous</span>
							<div class="row">
								<div class="input-field col s12">
									<input id="first_name" type="email" class="validate" required>
									<label class="" for="first_name">Email</label>
								</div>
								<div class="input-field col s12">
									<input id="password" type="password" class="validate" required>
									<label class="" for="password">Mot de passe</label>
								</div>
							</div>
							<div class="row">
								<div class="col s6">
									<input type="checkbox" id="remember" checked="checked">
									<label for="remember">Garder ma session active</label>
								</div>
								<div class="col s6">
									<a href="#">Mot de passe oublié ?</a>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center">
									<a class="waves-effect waves-light btn blue darken-3" href="./index.php">Se connecter avec Facebook</a>
								</div>
							</div>
						</div>
						<div class="card-action center">
							<input type="submit" name="connect" value="Connexion" class="waves-effect waves-light btn green">
							<a class="waves-effect waves-light btn white grey-text text-darken-2" href="./inscription.php">Inscription</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once '_partials/footer.php'; ?>