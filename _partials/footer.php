<footer class="page-footer green">
	<div class="container">
		<div class="row">
			<div class="col s5">
				<h5 class="white-text">Marmando.com</h5>
				<p class="grey-text text-lighten-4">Nous répondons à vos questions du lundi au vendredi de 9h00 à 19h00 et le samedi de 10h30 à 18h30.</p>
				<p class="white-text"><strong>0 800 30 15 27</strong></p>
			</div>
			<div class="col s2">
				<h5 class="white-text">Shops</h5>
				<ul>
					<li><a class="grey-text text-lighten-3">New In</a></li>
					<li><a class="grey-text text-lighten-3">Women</a></li>
					<li><a class="grey-text text-lighten-3">Men</a></li>
					<li><a class="grey-text text-lighten-3">Schuhe Shoes</a></li>
					<li><a class="grey-text text-lighten-3">Bags &amp; Accessories</a></li>
					<li><a class="grey-text text-lighten-3">Top Brands</a></li>
					<li><a class="grey-text text-lighten-3">Sale &amp; Special Offers</a></li>
					<li><a class="grey-text text-lighten-3">Lookbook</a></li>
				</ul>
			</div>
			<div class="col s2">
				<h5 class="white-text">Information</h5>
				<ul>
					<li><a class="grey-text text-lighten-3">About us</a></li>
					<li><a class="grey-text text-lighten-3">Customer Service</a></li>
					<li><a class="grey-text text-lighten-3">New Collection</a></li>
					<li><a class="grey-text text-lighten-3">Best Sellers</a></li>
					<li><a class="grey-text text-lighten-3">Manufacturers</a></li>
					<li><a class="grey-text text-lighten-3">Privacy policy</a></li>
					<li><a class="grey-text text-lighten-3">Terms &amp; condition</a></li>
					<li><a class="grey-text text-lighten-3">Blog</a></li>
				</ul>
			</div>
			<div class="col s3">
				<h5 class="white-text">Customer Services</h5>
				<ul>
					<li><a class="grey-text text-lighten-3">Search Terms</a></li>
					<li><a class="grey-text text-lighten-3">Advanced Search</a></li>
					<li><a class="grey-text text-lighten-3">Orders and Returns</a></li>
					<li><a class="grey-text text-lighten-3">Contact Us</a></li>
					<li><a class="grey-text text-lighten-3">RSS</a></li>
					<li><a class="grey-text text-lighten-3">Help &amp; FAQs</a></li>
					<li><a class="grey-text text-lighten-3">Consultant</a></li>
					<li><a class="grey-text text-lighten-3">Store Locations</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Copyright © 2016 - Marmando.com. Tout droits réservés.
			<a class="grey-text text-lighten-4 right" href="#!">Conditions Générales. </a><a class="grey-text text-lighten-4 right" href="#!">Vie Privée. </a>
		</div>
	</div>
</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
		<script>
			$( document ).ready(function () {
				$(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({
					hover: true,
					belowOrigin: true
				});
				$('.datepicker').pickadate({
				    // selectMonths: true, // Creates a dropdown to control month
					monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Julliet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
					monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
					weekdaysFull: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
					weekdaysShort: ['D', 'L', 'Ma', 'Me', 'J', 'V', 'S'],
					showMonthsShort: true,
					today: 'Aujourd\'hui',
					clear: '',
					close: 'Fermer',
					firstDay: true,
				    selectYears: 20 // Creates a dropdown of 15 years to control year
				  });
				  $('select').material_select();
				  $('.modal-trigger').leanModal();
			});
		</script>
	</body>
</html>