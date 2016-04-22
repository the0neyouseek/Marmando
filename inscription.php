<?php $bodyclass = "inscription"; ?>
<?php include_once '_partials/header.php'; ?>
<?php include_once '_partials/menu.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col s6">
				<div class="card login">
					<form action="login.php" method="post">
						<div class="card-content">
							<span class="card-title">Déjà client ?</span>
							<div class="row">
								<div class="input-field col s12">
									<input id="first_name" type="email" class="validate" required>
									<label for="first_name">Email</label>
								</div>
								<div class="input-field col s12">
									<input id="password" type="password" class="validate" required>
									<label for="password">Mot de passe</label>
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
						</div>
					</form>
				</div>
			</div>
			<div class="col s6">
				<div class="card subs">
					<form action="success.php" method="post">
						<div class="card-content">
							<span class="card-title">Vous êtes nouveau ?</span>
							<div class="row">
								<div class="input-field col s6">
									<input id="first_name" type="text" class="validate" required>
									<label for="first_name">Prénom</label>
								</div>
								<div class="input-field col s6">
									<input id="last_name" type="text" class="validate" required>
									<label class="" for="last_name">Nom</label>
								</div>
								<div class="input-field col s12">
									<input type="date" class="datepicker" id="date">
									<label for="date">Date de naissance</label>
								</div>
								<div class="input-field col s12">
									<input id="mail" type="email" class="validate" required>
									<label for="mail">Email</label>
								</div>
								<div class="input-field col s12">
									<input id="password" type="password" class="validate" required>
									<label for="password">Mot de passe</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<input type="checkbox" id="news" checked="checked">
									<label for="news">Recevoir la newsletter</label>
								</div>
							</div>
						</div>
						<div class="card-action center">
							<input type="submit" name="connect" value="S'inscrire" class="waves-effect waves-light btn green">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include_once '_partials/footer.php'; ?>