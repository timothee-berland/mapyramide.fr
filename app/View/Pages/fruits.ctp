<div id="presentation">
	<div id="image">
	</div>
    <div class="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de page : Cliquez sur "Mon assiette" -> "Fruits" -->
		<div class="span1"> Fruits </div> <br />
		<h1> Quantité quotidienne conseillée </h1>
		<div class="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
	ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</div> 
	</div>
	
	<div id="texte4">
		<table>
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de fruits </h1>
					<div class="p1"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
					</div>
				</td>
				
				<td>
					<br/>
					<!--  Image illustrant le paragraphe "Equivalence pour une coupe de fruits -->
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
		  <legend class='legendCenter'>Fruits</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Fruits']['Fruits'] as $groupeFruit) {
					foreach ($groupeFruit['Aliment'] as $fruit) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($fruit['nomFR'], ',');
						echo "<li>";
						echo $this->Html->link($fruit['nomFR'], '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $fruit['nomFR'], 'escape' => true));
						echo "</li>";
					}
				} ?>
				</ul>
			</div>
		</fieldset>

		<fieldset class='listeFruitsLegumes'>
		  <legend class='legendCenter'>Jus de fruits</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Fruits']['Jus de fruits'] as $groupeFruit) {
					foreach ($groupeFruit['Aliment'] as $fruit) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($fruit['nomFR'], ',');
						echo "<li>";
						echo $this->Html->link($fruit['nomFR'], '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $fruit['nomFR'], 'escape' => true));
						echo "</li>";
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


