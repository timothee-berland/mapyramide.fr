<div id="presentation">
	<div id="image">
	</div>
    <div id="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de la page : Cliquez sur "Mon assiette" -> "Céréales" -->
		<span1> Céréales </span1> <br/>
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
					<h1>  Equivalence pour une coupe de céréales </h1>
					<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
					</p1>
				</td>
				<td>
					<br/><br/><br/>
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
	
	<div class="texte1">
		<table width="140%">
			<tr>
				<td style="padding-right:50px;"></td>
				<td><h3> Grains entiers </h3> </td>
				<td style="padding-right:20px;"></td>
				<td><h3> Grains raffinés </h3></td>
			</tr>
			<tr><td><br /></td></tr>
		</table>
		<table width=145%;  >
			<tr>
				<td>
					<div class="listeForEach">
						<table>
						<!-- Liste des grains : affichage des images des différents grains à l'aide de zoombox -->
						<?php foreach ($grains as $groupeGrain) {
							foreach ($groupeGrain['Aliment'] as $grain) {
								
								echo '<tr><td>';
								// Pour simplifier on ne metra qu'une image par céréale différente
								$fichier = strtok($grain['nomFR'], ',');
								echo $this->Html->link('<li>' . $grain['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $grain['nomFR'], 'escape' => false));
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
						<!-- Liste des grains : affichage des images des différents grains à l'aide de zoombox -->
						<?php foreach ($grains as $groupeGrain) {
							foreach ($groupeGrain['Aliment'] as $grain) {
								
								echo '<tr><td>';
								// Pour simplifier on ne metra qu'une image par céréale différente
								$fichier = strtok($grain['nomFR'], ',');
								echo $this->Html->link('<li>' . $grain['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $grain['nomFR'], 'escape' => false));
								echo '</td></tr>';
							}
						} ?>
						</table>
					</div>
					
					<td style="padding-right : 170px">
					</td>
				</td>
			</tr>
		</table>
	</div>
</div>

