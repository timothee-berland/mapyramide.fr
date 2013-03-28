<div id="presentation">
	<div id="image">
	</div>
	
	<div id="texte">
		<!-- Cette page est accessible à partir du mnu situé en haut de page : Cliquez sur "Mon assiette" -> "Protéines" -->
		<span1> Produits protéinés </span1> 
		<br/>
		<h1> Quantité quotidienne conseillée </h1>
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1> 
		<br/>
	</div> 
	
	<div id="texte4">
		<table  width=145%; >
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de protéines </h1>
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
				<td><h3> Viandes, oeufs & poissons </h3> </td>
				<td style="padding-right: 20px;"></td>
				<td><h3> Noix & graines </h3></td>
				<td style="padding-right:70px;"></td>
				<td><h3> Produits de soja traités </h3></td>
			</tr>
		</table>
	
		<table width=145%;  >
			<tr>
				<td>
					<div class="listeForEach">
						<table>
							<!-- Liste des produits protéinés : affichage des images des différents produits protéinés à l'aide de zoombox -->
							<?php foreach ($pdtProteines as $groupProteine) {
								foreach ($groupProteine['Aliment'] as $pdtProteine) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par produit différent
									$fichier = strtok($pdtProteine['nomFR'], ',');
									echo $this->Html->link('<li>' . $pdtProteine['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $pdtProteine['nomFR'], 'escape' => false));
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
							<!-- Liste des produits protéinés : affichage des images des différents produits protéinés à l'aide de zoombox -->
							<?php foreach ($pdtProteines as $groupProteine) {
								foreach ($groupProteine['Aliment'] as $pdtProteine) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par produit différent
									$fichier = strtok($pdtProteine['nomFR'], ',');
									echo $this->Html->link('<li>' . $pdtProteine['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $pdtProteine['nomFR'], 'escape' => false));
									echo '</td></tr>';
								}
							} ?>
						</table>
					</div>
					<td style="padding-right : 90px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
				
					<div class="listeForEach">
						<table>
							<!-- Liste des produits protéinés : affichage des images des différents produits protéinés à l'aide de zoombox -->
							<?php foreach ($pdtProteines as $groupProteine) {
								foreach ($groupProteine['Aliment'] as $pdtProteine) {
									
									echo '<tr><td>';
									// Pour simplifier on ne metra qu'une image par produit différent
									$fichier = strtok($pdtProteine['nomFR'], ',');
									echo $this->Html->link('<li>' . $pdtProteine['nomFR'] . '</li>', '../img/' . $fichier . '.jpg', array('class' => 'zoombox', 'alt' => $pdtProteine['nomFR'], 'escape' => false));
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


