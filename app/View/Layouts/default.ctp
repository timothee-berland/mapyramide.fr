<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Ma Pyramide Alimentaire</title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('navStyles');
		echo $this->Html->css('lof-slider');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
			
	<!-- JS -->
	<script  src="/mapyramide.fr/js/slider/jquery-1.7.1.min.js"></script>
	<script  src="/mapyramide.fr/js/slider/custom.js"></script>
	<script  src="/mapyramide.fr/js/slider/tabs.js"></script>
	<script  src="/mapyramide.fr/js/slider/css3-mediaqueries.js"></script>
	<script  src="/mapyramide.fr/js/slider/jquery.columnizer.min.js"></script>
	
	<!-- Lof slider -->
	<script  src="/mapyramide.fr/js/slider/jquery.easing.js"></script>
	<script  src="/mapyramide.fr/js/slider/lof-slider.js"></script>
	<!-- ENDS slider -->
	
	<!-- JCarousel -->
	<script type="text/javascript"  src="/mapyramide.fr/js/slider/jquery.jcarousel.min.js"></script>
	<!-- ENDS JCarousel -->

	<!--   superfish   -->
	<!-- (Beaux menus) -->
	<link rel="stylesheet" media="screen" href="/mapyramide.fr/js/superfish-1.4.8/css/superfish.css" /> 
	<script src="/mapyramide.fr/js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script src="/mapyramide.fr/js/superfish-1.4.8/js/superfish.js"></script>
	<script src="/mapyramide.fr/js/superfish-1.4.8/js/supersubs.js"></script>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});
	</script>
	<!-- ENDS superfish -->

</head>

<body>

	<header>
		<?php if (AuthComponent::user('id') == 1): ?>
		<div class="menu3">
		    <a href="#1">Gérer les photos</a>
		    <a href="#2">Gérer les articles</a>
		    <a href="#3">Gérer la base de données</a>
		    <a href="#4">Gérer les utilisateurs</a>
		</div>
		<?php endif; ?>
		
		<a href="/mapyramide.fr"><div id="AGD-logo">AG Diététique </div></a>
		<a href="/mapyramide.fr"><div id="NomSite"> Ma Pyramide Alimentaire </div></a>
		<!-- <a href="javascript:void(0)" class="button green"> <span class="phone"></span> Contact </a> -->
		<div id="profil">
			<?php if (AuthComponent::user('id') == NULL): ?>
				<div id="logo-ajout"> Créer rofil</div>
				<div id='liens'>
					<?php echo $this->Html->link('Créer mon profil', '/users/add') ?>
					<br>
					<?php echo $this->Html->link('ou me connecter', '/users/login', array('id' => 'connexionLink')) ?>
				</div>
			<?php else: ?>
				

			<?php endif; ?>
		</div>
	</header>

	<nav id="filter">
		<ul id="navigation" class="sf-menu"> 
			<li><a href="/mapyramide.fr/pages/groupesalimentaires">Mon assiette</a>
				<ul class="dropdown">
					<li class="dropdown-first"><a href="/mapyramide.fr/pages/fruits">Fruits</a></li>
					<li class="dropdown-middle"><a href="/mapyramide.fr/pages/legumes">Légumes</a></li>
					<li class="dropdown-middle"><a href="#">Grains</a></li>
					<li class="dropdown-middle"><a href="/mapyramide.fr/pages/proteines">Protéines</a></li>
					<li class="dropdown-middle"><a href="/mapyramide.fr/pages/produitslaitiers">Produits Laitiers</a></li>
					<li class="dropdown-last"><a href="/mapyramide.fr/pages/matieresgrasses">Huiles</a></li>
					<li> <a>Test</a> 
						<ul class="dropdown">
							<li class="dropdown-first"><a href="/mapyramide.fr/pages/fruits">Fruits</a></li>
							<li class="dropdown-middle"><a href="/mapyramide.fr/pages/legumes">Légumes</a></li>
							<li class="dropdown-middle"><a href="#">Grains</a></li>
							<li class="dropdown-middle"><a href="/mapyramide.fr/pages/proteines">Protéines</a></li>
							<li class="dropdown-middle"><a href="/mapyramide.fr/pages/produitslaitiers">Produits Laitiers</a></li>
							<li class="dropdown-last"><a href="/mapyramide.fr/pages/matieresgrasses">Huiles</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a id="test" href="#">Poids / Calories</a>
				<ul class="dropdown">
					<li class="dropdown-first"><a href="/mapyramide.fr/pages/gestionpoids">Gestion du poids</a></li>
					<li class="dropdown-last"><a href="/mapyramide.fr/pages/calories">Calories</a></li>
				</ul>
			</li>
			<li><a href="#">Activité physique</a>
				<ul class="dropdown">
					<li class="dropdown-first"><a href="/mapyramide.fr/pages/importancesport">Importance</a></li>
					<li class="dropdown-middle"><a href="#">Temps de pratique</a></li>
					<li class="dropdown-middle"><a href="#">Calories consommées</a></li>
					<li class="dropdown-last"><a href="#">Gérer mon activité</a></li>
				</ul>
			</li>
			<li><a href="#">Ressources</a>
				<ul class="dropdown">
					<li class="dropdown-first"><a href="/mapyramide.fr/imcenfants/">Calculateur IMC</a></li>
					<li class="dropdown-last"><a href="/mapyramide.fr/pages/supertracker">Super traqueur</a></li>
				</ul>
			</li>
		</ul>
	</nav>

	<div id="container">

		<!-- <div id="header">
			<div id="AGD-logo">AG Diététique </div>
			<div id="NomSite"> Ma Pyramide Alimentaire </div>
			<a href="javascript:void(0)" class="button green"> <span class="phone"></span> Contact </a>
		</div> -->

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<!-- <div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div> -->

	</div>
	
	<footer>
		<div class="bloc-gauche">
		<p><a>Plan du site</a> | <a>lien 1</a> | <a>lien 2</a> | <a>lien 3</a></p>
		</div>
		<div class="bloc-droit">
			<pre><a>FAQ</a>   <a>A propos de nous</a>   <a>Contact</a></pre>
			<p> - Association Gradient  2013© - </p>
		</div>
	</footer>


<!-- <fieldset id='debug'>
  <legend align="center">
    DEBUG AREA
  </legend>
	<div><?php echo $this->element('sql_dump'); ?></div>
</fieldset> -->


</body>
</html>
