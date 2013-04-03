<div id="presentation">
	<div id="image">
	</div>
	<div class="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de la page : Cliquez sur "Mon assiette" -> Légumes -->
		<span1> Légumes </span1> 
		<br/>
		<h1> Quantité quotidienne conseillée </h1>
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1> 
		<br/>
	</div> 
	
	<div id="texte4">
		<table>
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de légumes </h1>
					<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
					</p1>
				</td>
				
				<td>
					<br/><br/>
					<!-- Image illustrant le paragraphe n°2 -->
					<p1><?php echo $this->Html->image('Fruits.png', array('height' => '200px', 'width' => '260px', 'alt' => 'Fruits')); ?></p1>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="texte6">
		<h1>  Conseils de consommation </h1> <br />
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1>
	</div>
	<div id="containerLiensImages3cat">
		<fieldset class='listeFruitsLegumes'>
		  <legend class='legendCenter'>Légumes verts</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Légumes']['Légumes verts'] as $groupeLegume) {
					foreach ($groupeLegume['Aliment'] as $legume) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($legume['nomFR'], ',');
						echo $this->Html->link('<li>' . $legume['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $legume['nomFR'], 'escape' => false));
					}
				} ?>
				</ul>
			</div>
		</fieldset>

		<fieldset class='listeFruitsLegumes'>
		  <legend class='legendCenter'>Légumes féculents</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Légumes']['Légumes féculents'] as $groupeLegume) {
					foreach ($groupeLegume['Aliment'] as $legume) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($legume['nomFR'], ',');
						echo $this->Html->link('<li>' . $legume['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $legume['nomFR'], 'escape' => false));
					}
				} ?>
				</ul>
			</div>
		</fieldset>

		<fieldset class='listeFruitsLegumes'>
		  <legend class='legendCenter'>Autres légumes</legend>
			<div class="listeForEach">
				<ul>
				<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
				<?php 
				foreach ($donnees['Légumes']['Autres légumes'] as $groupeLegume) {
					foreach ($groupeLegume['Aliment'] as $legume) {
						// Pour simplifier on ne metra qu'une image par légume différent
						$fichier = strtok($legume['nomFR'], ',');
						echo $this->Html->link('<li>' . $legume['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $legume['nomFR'], 'escape' => false));
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

