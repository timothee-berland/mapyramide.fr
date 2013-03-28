<div id="presentation">
	<div id="image">
	</div>
	<div id="texte">
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
	
	<div id="texte6">
		<h1>  Conseils de consommation </h1> <br />
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1>
	</div>
	
	<div class="texte1">
		<table style="width:158%;">
			<tr>
				<td style="padding-right:40px;"></td>
				<td><h3> Légumes verts </h3> </td>
				<td style="padding-right:30px;"></td>
				<td><h3> Légumes féculents </h3></td>
				<td style="padding-right:20px;"></td>
				<td><h3> Autres légumes </h3></td>
			</tr>
		</table>
	</div>
	<div class="texte1">
		<table>
			<tr>
				<td>
					<div class="listeForEach">
						<table>
						<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
						<?php foreach ($legumes as $groupeLegume) {
							foreach ($groupeLegume['Aliment'] as $legume) {
								
								echo '<tr><td>';
								// Pour simplifier on ne metra qu'une image par légume différent
								$fichier = strtok($legume['nomFR'], ',');
								echo $this->Html->link('<li>' . $legume['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $legume['nomFR'], 'escape' => false));
								echo '</td></tr>';
							}
						} ?>
						</table>
					</div>
					
					<td style="padding-right : 100px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
					<div class="listeForEach">
						<table>
						<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
						<?php foreach ($legumes as $groupeLegume) {
							foreach ($groupeLegume['Aliment'] as $legume) {
								
								echo '<tr><td>';
								// Pour simplifier on ne metra qu'une image par légume différent
								$fichier = strtok($legume['nomFR'], ',');
								echo $this->Html->link('<li>' . $legume['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $legume['nomFR'], 'escape' => false));
								echo '</td></tr>';
							}
						} ?>
						</table>
					</div>
					
					<td style="padding-right : 100px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
					<div class="listeForEach">
						<table>
						<!-- Liste des légumes : affichage des images des différents légumes à l'aide de zoombox -->
						<?php foreach ($legumes as $groupeLegume) {
							foreach ($groupeLegume['Aliment'] as $legume) {
								
								echo '<tr><td>';
								// Pour simplifier on ne metra qu'une image par légume différent
								$fichier = strtok($legume['nomFR'], ',');
								echo $this->Html->link('<li>' . $legume['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $legume['nomFR'], 'escape' => false));
								echo '</td></tr>';
							}
						} ?>
						</table>
					</div>
					
					<td style="padding-right : 130px">
					</td>
				</td>
			</tr>
		</table>
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
<script type="text/javascript">
//<![CDATA[
    $(function(){
        $('a.zoombox').zoombox();
    });
//]]>
</script>

