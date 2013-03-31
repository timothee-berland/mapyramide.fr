﻿<div id="presentation">
	<div id="image">
	</div>
	
	<div id="texte">
		<!-- Cette page est accessible à partir du menu situé en haut de page : Cliquez sur "Mon assiette" -> "Produits laitiers" -->
		<span2> Produits laitiers </span2> 
		<br/>
		<h1> Quantité quotidienne conseillée </h1>
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim.  
		</p1>
	</div> 
	
	<div id="texte4">
		<table>
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de produits laitiers </h1>
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
		<table width=130%; >
			<tr>
				<td style="padding-right:20px;"></td>
				<td><h3> Lait & déserts à base de lait </h3> </td>
				<td style="padding-right:-20px;"></td>
				<td><h3> Yaourts </h3></td>
				<td style="padding-right:120px;"></td>
				<td><h3> Fromages </h3></td>
				<td style="padding-right:120px;"></td>
			</tr>
			<tr><td><br /></td></tr>
		</table>
		
		<table width=145%;  >
			<tr>
				<td>
					<div class="listeForEach">
						<table>
							<!-- Liste des produits laitiers : affichage des images des différents produits laitiers à l'aide de zoombox -->
							<?php foreach ($pdtLaitiers as $groupPdtLaitier) {
								foreach ($groupPdtLaitier['Aliment'] as $pdtLaitier) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par produit différent
									$fichier = strtok($pdtLaitier['nomFR'], ',');
									echo $this->Html->link('<li>' . $pdtLaitier['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $pdtLaitier['nomFR'], 'escape' => false));
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
							<!-- Liste des produits laitiers : affichage des images des différents produits laitiers à l'aide de zoombox -->
							<?php foreach ($pdtLaitiers as $groupPdtLaitier) {
								foreach ($groupPdtLaitier['Aliment'] as $pdtLaitier) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par produit différent
									$fichier = strtok($pdtLaitier['nomFR'], ',');
									echo $this->Html->link('<li>' . $pdtLaitier['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $pdtLaitier['nomFR'], 'escape' => false));
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
							<!-- Liste des produits laitiers : affichage des images des différents produits laitiers à l'aide de zoombox -->
							<?php foreach ($pdtLaitiers as $groupPdtLaitier) {
								foreach ($groupPdtLaitier['Aliment'] as $pdtLaitier) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par produit différent
									$fichier = strtok($pdtLaitier['nomFR'], ',');
									echo $this->Html->link('<li>' . $pdtLaitier['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $pdtLaitier['nomFR'], 'escape' => false));
									echo '</td></tr>';
								}
							} ?>
						</table>
					</div>
					
					<td style="padding-right : 250px">
					</td>
				</td>
			</tr>
		</table>
	</div>
</div>

