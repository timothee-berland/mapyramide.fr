<div id="presentation">
	<div id="image">
	</div>
	
	<div id="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de page : Cliquez sur "Mon assiette" -> "Matières grasses" -->
		<span1> Matières grasses </span1> 
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
					<h1>  Equivalence pour une coupe de protéines </h1>
					<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. </p1>
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
		<table width=140%; >
		<tr>
			<td style="padding-right:60px;"></td>
			<td><h3> Huiles </h3> </td>
			<td style="padding-right:100px;"></td>
			<td><h3> Aliments riches en huiles </h3></td>
			<td style="padding-right:10px;"></td>
			<td><h3> Graisses solides </h3></td>
			</tr>
			<tr><td><br /></td></tr>
		</table>
		
		<table width=145%;  >
			<tr>
				<td>
					<div class="listeForEach">
						<table>
							<!-- Liste des matières grasses : affichage des images des différentes matières grasses à l'aide de zoombox -->
							<?php foreach ($matGrasses as $groupeMatGrasse) {
								foreach ($groupeMatGrasse['Aliment'] as $matGrasse) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par matière grasse différente
									$fichier = strtok($matGrasse['nomFR'], ',');
									echo $this->Html->link('<li>' . $matGrasse['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $matGrasse['nomFR'], 'escape' => false));
									echo '</td></tr>';
								}
							} ?>
						</table>
					</div>
					
					<td style="padding-right : 110px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
				
					<div class="listeForEach">
						<table>
							<!-- Liste des matières grasses : affichage des images des différentes matières grasses à l'aide de zoombox -->
							<?php foreach ($matGrasses as $groupeMatGrasse) {
								foreach ($groupeMatGrasse['Aliment'] as $matGrasse) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par matière grasse différente
									$fichier = strtok($matGrasse['nomFR'], ',');
									echo $this->Html->link('<li>' . $matGrasse['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $matGrasse['nomFR'], 'escape' => false));
									echo '</td></tr>';
								}
							} ?>
						</table>
					</div>
					
					<td style="padding-right : 130px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
				
					<div class="listeForEach">
						<table>
							<!-- Liste des matières grasses : affichage des images des différentes matières grasses à l'aide de zoombox -->
							<?php foreach ($matGrasses as $groupeMatGrasse) {
								foreach ($groupeMatGrasse['Aliment'] as $matGrasse) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par matière grasse différente
									$fichier = strtok($matGrasse['nomFR'], ',');
									echo $this->Html->link('<li>' . $matGrasse['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $matGrasse['nomFR'], 'escape' => false));
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

