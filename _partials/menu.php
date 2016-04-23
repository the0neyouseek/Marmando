<?php if ($connected): ?>
	<div class="navbar-fixed">
<?php endif; ?>
<nav class="white">
	<div class="nav-wrapper">
		<div class="col s12">
			<a href="" class="grey-text text-darken-2 logo brand-logo">Marmando</a>
			<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons grey-text text-darken-2">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li class="<?php if($active=="Accueil"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Accueil</a></li>
				<li class="<?php if($active=="Homme"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Homme</a></li>
				<li class="<?php if($active=="Femme"){echo "active";} ?>"><a class="grey-text text-darken-1" href="women.php">Femme</a></li>
				<li class="<?php if($active=="Accessoires"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Accessoires</a></li>
				<li class="<?php if($active=="Promotions"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Promotions</a></li>
				<li class="<?php if($active=="Nouveautés"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Nouveautés</a></li>
				<li class="<?php if($active=="Contact"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Contact</a></li>

				<?php if ($connected):?>
				<li><a class="dropdown-button grey-text text-darken-1" href="#!" data-activates="dropdown1"><i class="material-icons left">account_circle</i>Marie Motte<i class="material-icons right">arrow_drop_down</i></a></li>
				<ul id="dropdown1" class="dropdown-content">
				  <li><a class="grey-text text-darken-1" href="#!">Mon compte</a></li>
				  <li><a class="grey-text text-darken-1" href="./mannequin.php">Mon mannequin</a></li>
				  <li><a class="grey-text text-darken-1" href="#!">Mes commandes</a></li>
				  <li><a class="grey-text text-darken-1" href="#!">Mes favoris</a></li>
				  <li><a class="grey-text text-darken-1" href="#!">Mes avantages</a></li>
				  <li class="divider"></li>
				  <li><a class="grey-text text-darken-1" href="./connexion.php"><i class="material-icons right">exit_to_app</i>Me déconnecter</a></li>
				</ul>
				<?php endif;?>

				<li><a class="grey-text text-darken-1" href="#"><i class="material-icons">shopping_basket</i></a></li>
				<li><a class="grey-text text-darken-1" href="#"><i class="material-icons">search</i></a></li>
			</ul>
			<ul class="side-nav" id="mobile">
				<li class="<?php if($active=="Accueil"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Accueil</a></li>
				<li class="<?php if($active=="Homme"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Homme</a></li>
				<li class="<?php if($active=="Femme"){echo "active";} ?>"><a class="grey-text text-darken-1" href="women.php">Femme</a></li>
				<li class="<?php if($active=="Accessoires"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Accessoires</a></li>
				<li class="<?php if($active=="Promotions"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Promotions</a></li>
				<li class="<?php if($active=="Nouveautés"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Nouveautés</a></li>
				<li class="<?php if($active=="Contact"){echo "active";} ?>"><a class="grey-text text-darken-1" href="index.php">Contact</a></li>

				<li><a class="grey-text text-darken-1" href="#"><i class="material-icons left">shopping_basket</i>Mon panier</a></li>
				<li><a class="grey-text text-darken-1" href="#"><i class="material-icons left">search</i>Rechercher</a></li>
			</ul>
		</div>
	</div>
</nav>
<?php if ($connected): ?>
	</div>
<?php endif; ?>