﻿<div id="presentation">
	<div id="image">
	</div>
	
	<div class="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de page : Cliquez sur "Mon assiette" -> "Matières grasses" -->
		<div class="span2"> Matières grasses </div> 
		<br/>
		<h1> Quantité quotidienne conseillée </h1>
		<div class="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</div> 
		<br/>
	</div>
	
	<div id="texte4">
		<table>
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de protéines </h1>
					<div class="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. </div>
				</td>
				
				<td>
					<br/><br/><br/>
					<!-- Image illustrant le paragraphe n°2 -->
					<div class="p1"><?php echo $this->Html->image('Fruits.png', array('height' => '200px', 'width' => '260px', 'alt' => 'Fruits')); ?></div>
				</td>
			</tr>
		</table>
	
	</div>
	
	<div id="texte6">
		<h1>  Conseils de consommation </h1> <br />
		<div class="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</div>
	</div>
	
	<div id="containerLiensImages2cat">
		<fieldset class='listeFruitsLegumes'>
		  <legend class='legendCenter'>Huiles</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Matières grasses']['Huiles'] as $groupeMatiereGrasse) {
					foreach ($groupeMatiereGrasse['Aliment'] as $matiereGrasse) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($matiereGrasse['nomFR'], ',');
						echo $this->Html->link('<li>' . $matiereGrasse['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $matiereGrasse['nomFR'], 'escape' => false));
					}
				} ?>
				</ul>
			</div>
		</fieldset>

		<fieldset class='listeFruitsLegumes'>
		  <legend class='legendCenter'>Graisses solides</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Matières grasses']['Graisses solides'] as $groupeMatiereGrasse) {
					foreach ($groupeMatiereGrasse['Aliment'] as $matiereGrasse) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($matiereGrasse['nomFR'], ',');
						echo $this->Html->link('<li>' . $matiereGrasse['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $matiereGrasse['nomFR'], 'escape' => false));
					}
				} ?>
				</ul>
			</div>
		</fieldset>
	</div>
</div>	


<!--Script permettant l'affichage des images à l'aide de zoombox -->
<?php echo $this->Html->script('zoombox/zoombox.js'); ?>
<?php echo $this->Html->css('/js/zoombox/zoombox.css'); ?>

<script type="text/javascript">
    jQuery(function($){
        $('a.zoombox').zoombox();

        /**
        * Or You can also use specific options
        $('a.zoombox').zoombox({
            theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
            opacity     : 0.8,              // Black overlay opacity
            duration    : 800,              // Animation duration
            animation   : true,             // Do we have to animate the box ?
            width       : 500,              // Default width
            height      : 500,              // Default height
            gallery     : true,             // Allow gallery thumb view
            autoplay : false                // Autoplay for video
        });
        */
	});
</script>
