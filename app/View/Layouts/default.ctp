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
			
	<!-- JQuery & Jquery UI -->
	<?php echo $this->html->script('jquery-ui-1.10.2.custom/js/jquery-1.9.1.js'); ?>
	<?php echo $this->html->script('jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js'); ?>
	<?php echo $this->Html->css('/js/jquery-ui-1.10.2.custom/css/smoothness/jquery-ui-1.10.2.custom.min.css'); ?>

	<!-- Slider -->
	<?php echo $this->html->script('slider/custom.js'); ?>
	<?php echo $this->html->script('slider/tabs.js'); ?>
	<?php echo $this->html->script('slider/css3-mediaqueries.js'); ?>
	<?php echo $this->html->script('slider/jquery.columnizer.min.js'); ?>
	
	<!-- Lof slider -->
	<?php echo $this->html->script('slider/jquery.easing.js'); ?>
	<?php echo $this->html->script('slider/lof-slider.js'); ?>
	<!-- ENDS slider -->
	
	<!-- JCarousel -->
	<?php echo $this->html->script('slider/jquery.jcarousel.min.js'); ?>
	<!-- ENDS JCarousel -->

	<!--   superfish   -->
	<!-- (Beaux menus) -->
	<?php echo $this->html->css('/js/superfish-1.4.8/css/superfish.css'); ?>
	<?php echo $this->html->script('superfish-1.4.8/js/hoverIntent.js'); ?>
	<?php echo $this->html->script('superfish-1.4.8/js/superfish.js'); ?>
	<?php echo $this->html->script('superfish-1.4.8/js/supersubs.js'); ?>
	<?php echo $this->html->script('superfish-1.4.8/jquery.mb.browser-master/jquery.mb.browser.min.js'); ?>
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
		    <?php echo $this->Html->link('Gérer les photos', '#'); ?>
		    <?php echo $this->Html->link('Gérer les articles', '#'); ?>
		    <?php echo $this->Html->link('Gérer la base de données', '#'); ?>
		    <?php echo $this->Html->link('Gérer les utilisateurs', '#'); ?>
		</div>
		<?php endif; ?>
		
		<div id='nomEtLogo'>
			<?php echo $this->Html->link('<div id="AGD-logo">AG Diététique </div>', '/', array('escape' => false)); ?>
			<?php echo $this->Html->link('<div id="NomSite"> Ma Pyramide Alimentaire </div>', '/', array('escape' => false)); ?>
			<!-- <a href="javascript:void(0)" class="button green"> <span class="phone"></span> Contact </a> -->
		</div>

		<div id='menuEtConnexion'>
		
			<nav id="filter">
				<ul id="navigation" class="sf-menu"> 
					<li><?php echo $this->Html->link('Mon assiette', '/pages/groupesalimentaires'); ?>
						<ul class="dropdown">
							<li class="dropdown-first"><?php echo $this->Html->link('Fruits', '/pages/fruits'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Bienfaits', '/pages/bienfaits'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Conseils', '/pages/conseilsfruits'); ?></li>
								</ul>
							</li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Légumes', '/pages/legumes'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Bienfaits', '/pages/bienfaitslegumes'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Conseils', '/pages/conseilslegumes'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Haricots & pois', '/pages/legumesbeansandpeas'); ?></li>
								</ul>
							</li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Céréales', '#'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Bienfaits', '/pages/bienfaitscereales'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Conseils', '/pages/conseilscereales'); ?></li>
								</ul>
							</li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Protéines', '/pages/proteines'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Bienfaits', '/pages/bienfaitsproteines'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Conseils', '/pages/conseilsproteines'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Plats végétariens', '/pages/choixvegetariens'); ?></li>
								</ul>
							</li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Produits Laitiers', '/pages/produitslaitiers'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Bienfaits', '/pages/bienfaitsPL'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Conseils', '/pages/conseilspl'); ?></li>
								</ul>
							</li>
							<li class="dropdown-last"><?php echo $this->Html->link('Matières grasses', '/pages/matieresgrasses'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Importance', '/pages/importancemg'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Dose recommandée', 'quantiterecommandeemg'); ?></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><?php echo $this->Html->link('Poids & Calories', '#'); ?>
						<ul class="dropdown">
							<li class="dropdown-first"><?php echo $this->Html->link('Gestion pondérale', '/pages/fruits'); ?>				
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Nourriture actuelle', '/pages/nourritureactuelle'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Que manger ?', '/pages/quemanger'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Meilleurs choix', '/pages/meilleurschoix'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Quantité calories', '/pages/quantitequiconvient'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Diminuer portions', '/pages/diminuerportions'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Mes aliments', '/pages/alimentsnecessaires'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Manger à l\'extérieur', '/pages/mangerdehors'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Cuisine maison', '/pages/cuisinemaison'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Plus de sport', '/pages/augmentersport'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Moins d\'écrans', '/pages/moinsdecrans'); ?></li>
								</ul>
							<li class="dropdown-last"><?php echo $this->Html->link('Calories', '/pages/calories'); ?>
								<ul class="dropdown">
									<li class="dropdown-first"><?php echo $this->Html->link('Calories vides', '/pages/caloriesvides'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Matières grasses', '/pages/caloriesMG'); ?></li>
									<li class="dropdown-middle"><?php echo $this->Html->link('Sucres ajoutés', '/pages/sucresajoutes'); ?></li>
									<li class="dropdown-last"><?php echo $this->Html->link('Quantifier calories', '/pages/comptercalories'); ?></li>
								</ul>
						</ul>
					</li>
					<li><?php echo $this->Html->link('Activité physique', '#'); ?>
						<ul class="dropdown">
							<li class="dropdown-first"><?php echo $this->Html->link("Définition", '/pages/activitephysique'); ?></li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Importance', '/pages/importancesport'); ?></li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Temps de pratique', '/pages/tempspratique'); ?></li>
							<li class="dropdown-middle"><?php echo $this->Html->link('Calories brulées', '/pages/caloriesbrulees'); ?></li>
							<li class="dropdown-last"><?php echo $this->Html->link('Conseils', '/pages/conseilssportifs'); ?></li>
						</ul>
					</li>
					<li><?php echo $this->Html->link('Ressources', '#'); ?>
						<ul class="dropdown">
							<li class="dropdown-first"><?php echo $this->Html->link('Calculateur IMC', '/imcenfants'); ?></li>
							<li class="dropdown-last"><?php echo $this->Html->link('Super Traqueur', '/pages/supertracker'); ?></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div id="profil">
				<?php if (AuthComponent::user('id') == NULL): ?>
					<div id="logo-connexion"> Créer profil</div>
					<div id='liens'>
						<?php echo $this->Html->link('Créer mon profil', '/users/add'); ?>
						<br>
						<?php echo $this->Html->link('ou me connecter', '/users/login', array('id' => 'connexionLink')); ?>
					</div>
				<?php else: ?>
					<div id='liens'>
						<?php echo $this->Html->link('Bonjour ' . AuthComponent::user('username'), '/users/edit'); ?>
						<br>
						<?php echo $this->Html->link('me déconnecter', '/users/logout', array('id' => 'connexionLink')); ?>
					</div>
				<?php endif; ?>
			</div>
			
		</div>
	</header>

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
