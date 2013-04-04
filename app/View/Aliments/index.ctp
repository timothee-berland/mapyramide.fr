<?php echo $this->Form->create('Aliment'); ?>
	<div id="presentation">
	<!-- Cette page est accessible depuis le menu situé en haut de page. Cliquez sur "Ressources" -> "SuperTracker" -> "Encyclopédie" -->
	    <div id="titre-accueil">
			<span> Encyclopédie </span> 
			<p>En plus de vous sentir mieux dans votre corps et d’avoir une silhouette plus svelte, le maintien d’un
poids corporel de santé est indispensable pour votre propre état de santé et de votre bien-être.
Si, vous êtes en surpoids, ou obèse, vous présentez un risque plus élevé de développer plusieurs
maladies parmi lesquelles : l’hypertension, le diabète de type 2, des maladies cardio-vasculaires et
certains types de cancers. </p> 
			
			<!-- Liste déroulante permettant à l'utilisateur de choisir dans quelle catégorie d'aliments, se trouve l'aliment qu'il recherche.
			     Cette dernière a pour but de faciliter la recherche. -->
			<select id="recherche">
			<option value="1">Tous les aliments</option>
			</select> 
			
			<!-- Zone de texte permettant à l'utilisateur de saisir le nom de l'aliment recherché -->
			<input type="text" name="zone-aliment" value="" id="zone-aliment" /> <br><br><br> 

			<input type="submit" value="Rechercher" onClick='return validRecherche();' />
		</div>
		
		<!-- <div id="lien-accueil">
			<a href="?page=supertracker"> Retourner à l'accueil du SuperTracker </a>
		</div> -->
	</div>
	
	<div id="encyclo">
		<span> Résultats </span>
		<!-- On affiche ici les caractéristique du premier aliment pour lequel l'utilisateur souhaite effectuer une comparaison avec un autre aliment -->
		<div class="bloc-gauche">
			<?php 
				if (isset($resultats)) :
					if (sizeof($resultats) >= 1) {
						echo "<ul>";
						$compteurResultats=0;
						// Ici on peut modifier le nombre de résultats affichés
						foreach ($resultats as $resultat) { $compteurResultats++; if($compteurResultats > 100) {break;} ?>

							<li>
								<?php 
									if (!isset($aliment1)): 
										echo $this->Html->link($resultat['Aliment']['nomFR'], '/aliments/index/' . $resultat['Aliment']['id']);
									elseif (!isset($aliment2)): 
										echo $this->Html->link($resultat['Aliment']['nomFR'], '/aliments/index/' . $aliment1['Aliment']['id'] .'/' . $resultat['Aliment']['id']);
									else : 
										echo '<a href="#" onClick="alimentsMax();">' . $resultat['Aliment']['nomFR'] . '</a>';
									endif; 
								?>
								
							</li>
				  <?php } 
						echo "</ul>";
					} else {
						echo "Aucun résultat ne correspond à votre recherche";
					}
			 	endif; 
		 	?>	
		</div>

		<?php if(isset($aliment1)): ?>
		<!-- On affiche ici les caractéristique du second aliment pour lequel l'utilisateur souhaite effectuer une comparaison avec un autre aliment -->
			<div class="bloc-droit"> 
				
				<?php 
					if(isset($aliment2)): 
						echo $this->Html->link('<div class="supprimer"></div>', '/aliments/index/' . $aliment2['Aliment']['id'], array('escape' => false));
					else : 
						echo $this->Html->link('<div class="supprimer"></div>', '/aliments/index/', array('escape' => false));
					endif; 
				?>
				

			   	<div class="titre">
					<?php
						echo "<h2>".$aliment1['Aliment']['nomFR']."</h2>";
						echo "<p> ____________________________ </p>";
					?>				
			    </div>
				
				<div class="choix-portion">
				<!-- Ici, l'utilisateur peut chosir la quantité pour laquelle il souhaite effectuer la comparaison -->
				   <p> Choisissez une quantité </p>
				   <select class="quantite" name="quantite">
					   <?php 
							if ($quantiteAliment1 == 1) {
								echo "<option value='1' selected='selected'>1</option>";
								echo "<option value='2'>2</option>";
								echo "<option value='3'>3</option>";
								echo "<option value='4'>4</option>";
							} elseif ($quantiteAliment1 == 2) {
								echo "<option value='1'>1</option>";
								echo "<option value='2' selected='selected'>2</option>";
								echo "<option value='3'>3</option>";
								echo "<option value='4'>4</option>";
							} elseif ($quantiteAliment1 == 3) {
								echo "<option value='1'>1</option>";
								echo "<option value='2'>2</option>";
								echo "<option value='3' selected='selected'>3</option>";
								echo "<option value='4'>4</option>";
							} else {
								echo "<option value='1'>1</option>";
								echo "<option value='2'>2</option>";
								echo "<option value='3'>3</option>";
								echo "<option value='4' selected='selected'>4</option>";
							}
						?>
				   </select>
				   
				   <!-- L'utilisateur choisi ici la taille de la portion : "petites portions", "moyennes portions" ou "grandes portions" -->
				    <select class="portion" name="portion">
						<?php 
							if ($quantitePortion1 == 'quantitePetitePortion') {
								echo "<option value='quantitePetitePortion' selected='selected'>".$aliment1['Aliment']['typePortion']." -petit(e)-</option>";
								echo "<option value='quantiteMoyennePortion'>".$aliment1['Aliment']['typePortion']." -moyen(ne)-</option>"; 
						 		echo "<option value='quantiteGrandePortion'>".$aliment1['Aliment']['typePortion']." -grand(e)-</option>";
							} elseif ($quantitePortion1 == 'quantiteMoyennePortion') {
								echo "<option value='quantitePetitePortion'>".$aliment1['Aliment']['typePortion']." -petit(e)-</option>";
								echo "<option value='quantiteMoyennePortion' selected='selected'>".$aliment1['Aliment']['typePortion']." -moyen(ne)-</option>";
								echo "<option value='quantiteGrandePortion'>".$aliment1['Aliment']['typePortion']." -grand(e)-</option>";
							} else {
								echo "<option value='quantitePetitePortion'>".$aliment1['Aliment']['typePortion']." -petit(e)-</option>";
						 		echo "<option value='quantiteMoyennePortion'>".$aliment1['Aliment']['typePortion']." -moyen(ne)-</option>"; 
								echo "<option value='quantiteGrandePortion' selected='selected'>".$aliment1['Aliment']['typePortion']." -grand(e)-</option>"; 
							}
						?>
				   </select>
				   
				    <input type="submit" name="valider" value="Valider" />			   
					<!-- <a>Ajouter *</a> -->
				</div>
			  	<!-- L'utilisateur peut afficher des informations concernant l'aliment mais aussi les caractéristiques nutritionelles de ce dernier -->
				<div class="onglets-encyclo">
				    <a onClick="afficherAliment('1');">Infos sur l'aliment </a>
					<a onClick="afficherNutriment('1');">Infos nutritionnelles </a>
				</div>
				
				<div class="info-aliment" id='info-aliment1'>
					<div class="calories"> Nombre total de calories 
						<?php
							$energieAliment1 = $aliment1['Donneesaliment'][1]['valmoy'] * $quantiteAliment1 * $aliment1['Aliment'][$quantitePortion1] / 100;
							echo "<p>". $energieAliment1 . "</p>";
						?>
					</div>
					
					<table>
					    <tr>
						    <th> Groupe alimentaire</th>
							<th> Apports </th>
						</tr>
						 <tr>
						    <td> 
						    	<ul>
						    		<li>
						    			<p class='groupeAlimentaire'>
						    				<?php echo $this->Html->link($aliment1['Famillealiments']['name'], '/pages/groupesalimentaires'); ?>
						    			</p>
						    		</li>
						    	</ul>
						    </td>
							<td>  
								<ul>
									<li>
										Energie : 
										<p>
											<?php 
												echo $energieAliment1;
											?> kcal
										</p>
									</li>
								
									<li>
										Matières grasses : 
										<p>
											<?php 
												echo $aliment1['Donneesaliment'][23]['valmoy'] * $quantiteAliment1 * $aliment1['Aliment'][$quantitePortion1] / 100;
											?> g
										</p>
									</li>
								
									<li>
										Sucres ajoutés : 
										<p>
											<?php 
												echo $aliment1['Donneesaliment'][18]['valmoy'] * $quantiteAliment1 * $aliment1['Aliment'][$quantitePortion1] / 100;
											?> g
										</p>
									</li>
								
									<li>
										Graisses saturés : 
										<p>
											<?php 
												echo $aliment1['Donneesaliment'][24]['valmoy'] * $quantiteAliment1 * $aliment1['Aliment'][$quantitePortion1] / 100;
											?> g
										</p>
									</li>
								
									<li>
										Sodium : 
										<p>
											<?php 
												echo $aliment1['Donneesaliment'][5]['valmoy'] * $quantiteAliment1 * $aliment1['Aliment'][$quantitePortion1] / 100;
											?> mg
										</p>
									</li>
								</ul>
							</td>
						</tr>
					</table>
					      
				</div>
				
				<div class="info-nutriment" id="info-nutriment-aliment1"> 
				 	<table>
				 		<?php for ($i=0; $i <= 56; $i++) : ?>
				 			<?php if (($nutrimentAliment1 = $aliment1['Donneesaliment'][$i]['valmoy'] * $quantiteAliment1 * $aliment1['Aliment'][$quantitePortion1] / 100) != 0) : ?>
					 		<tr>
					 			<td class='nomConstituant'>
					 				<?php echo $constituantsAliment1[$i]['Constituantaliments']['name'] ?>
					 			</td>
					 			<td>
					 				<p>
					 					<?php echo round($nutrimentAliment1); ?>
					 				</p>
					 			</td>
					 		</tr>
				 			<?php endif; ?>
				 		<?php endfor; ?>
				 	</table>
				</div>
			</div>
		<?php endif; ?>

		<?php if(isset($aliment2)): ?>
			<div class="bloc-droit"> 
				  
				<?php echo $this->Html->link('<div class="supprimer"></div>', '/aliments/index/' . $aliment1['Aliment']['id'], array('escape' => false)); ?>
				
			   	<div class="titre">
					<?php
						echo "<h2>".$aliment2['Aliment']['nomFR']."</h2>";
						echo "<p> ____________________________ </p>";
					?>				
			    </div>
				
				<div class="choix-portion">
				   <p> Choisissez une quantité </p>
				   <select class="quantite" name="quantite2">
					   <?php 
							if ($quantiteAliment2 == 1) {
								echo "<option value='1' selected='selected'>1</option>";
								echo "<option value='2'>2</option>";
								echo "<option value='3'>3</option>";
								echo "<option value='4'>4</option>";
							} elseif ($quantiteAliment2 == 2) {
								echo "<option value='1'>1</option>";
								echo "<option value='2' selected='selected'>2</option>";
								echo "<option value='3'>3</option>";
								echo "<option value='4'>4</option>";
							} elseif ($quantiteAliment2 == 3) {
								echo "<option value='1'>1</option>";
								echo "<option value='2'>2</option>";
								echo "<option value='3' selected='selected'>3</option>";
								echo "<option value='4'>4</option>";
							} else {
								echo "<option value='1'>1</option>";
								echo "<option value='2'>2</option>";
								echo "<option value='3'>3</option>";
								echo "<option value='4' selected='selected'>4</option>";
							}
						?>
				   </select>
				   
				    <select class="portion" name="portion2">
						<?php 
							if ($quantitePortion2 == 'quantitePetitePortion') {
								echo "<option value='quantitePetitePortion' selected='selected'>".$aliment2['Aliment']['typePortion']." -petit(e)-</option>";
								echo "<option value='quantiteMoyennePortion'>".$aliment2['Aliment']['typePortion']." -moyen(ne)-</option>"; 
						 		echo "<option value='quantiteGrandePortion'>".$aliment2['Aliment']['typePortion']." -grand(e)-</option>";
							} elseif ($quantitePortion2 == 'quantiteMoyennePortion') {
								echo "<option value='quantitePetitePortion'>".$aliment2['Aliment']['typePortion']." -petit(e)-</option>";
								echo "<option value='quantiteMoyennePortion' selected='selected'>".$aliment2['Aliment']['typePortion']." -moyen(ne)-</option>";
								echo "<option value='quantiteGrandePortion'>".$aliment2['Aliment']['typePortion']." -grand(e)-</option>";
							} else {
								echo "<option value='quantitePetitePortion'>".$aliment2['Aliment']['typePortion']." -petit(e)-</option>";
						 		echo "<option value='quantiteMoyennePortion'>".$aliment2['Aliment']['typePortion']." -moyen(ne)-</option>"; 
								echo "<option value='quantiteGrandePortion' selected='selected'>".$aliment2['Aliment']['typePortion']." -grand(e)-</option>"; 
							}
						?>
				   </select>
				   
				    <input type="submit" name="valider2" value="Valider" />			   
					<!-- <a>Ajouter *</a> -->
				</div>
			  	   
				<div class="onglets-encyclo">
				    <a onClick="afficherAliment('2');">Infos sur l'aliment </a>
					<a onClick="afficherNutriment('2');">Infos nutritionnelles </a>
				</div>
				
				<div class="info-aliment" id='info-aliment2'>
					<div class="calories"> Nombre total de calories 
						<?php
							$energieAliment2 = $aliment2['Donneesaliment'][1]['valmoy'] * $quantiteAliment2 * $aliment2['Aliment'][$quantitePortion2] / 100;
							echo "<p>". $energieAliment2 . "</p>";
						?>
					</div>
					
					<table>
					    <tr>
						    <th> Groupe alimentaire</th>
							<th> Apports </th>
						</tr>
						 <tr>
						    <td> 
						    	<ul>
						    		<li>
						    			<p class='groupeAlimentaire'>
						    				<?php echo $this->Html->link($aliment2['Famillealiments']['name'], '/pages/groupesalimentaires'); ?>

						    			</p>
						    		</li>
						    	</ul>
						    </td>
							<td>  
								<ul>
									<li>
										Energie : 
										<p>
											<?php 
												echo $energieAliment2;
											?> kcal
										</p>
									</li>
								
									<li>
										Matières grasses : 
										<p>
											<?php 
												echo $aliment2['Donneesaliment'][23]['valmoy'] * $quantiteAliment2 * $aliment2['Aliment'][$quantitePortion2] / 100;
											?> g
										</p>
									</li>
								
									<li>
										Sucres ajoutés : 
										<p>
											<?php 
												echo $aliment2['Donneesaliment'][18]['valmoy'] * $quantiteAliment2 * $aliment2['Aliment'][$quantitePortion2] / 100;
											?> g
										</p>
									</li>
								
									<li>
										Graisses saturés : 
										<p>
											<?php 
												echo $aliment2['Donneesaliment'][24]['valmoy'] * $quantiteAliment2 * $aliment2['Aliment'][$quantitePortion2] / 100;
											?> g
										</p>
									</li>
								
									<li>
										Sodium : 
										<p>
											<?php 
												echo $aliment2['Donneesaliment'][5]['valmoy'] * $quantiteAliment2 * $aliment2['Aliment'][$quantitePortion2] / 100;
											?> mg
										</p>
									</li>
								</ul>
							</td>
						</tr>
					</table>
					      
				</div>
				
				<div class="info-nutriment" id="info-nutriment-aliment2"> 
				 	<table>
				 		<?php for ($i=0; $i <= 56; $i++) : ?>
				 			<?php if (($nutrimentAliment2 = $aliment2['Donneesaliment'][$i]['valmoy'] * $quantiteAliment2 * $aliment2['Aliment'][$quantitePortion2] / 100) != 0) : ?>
					 		<tr>
					 			<td class='nomConstituant'>
					 				<?php echo $constituantsAliment2[$i]['Constituantaliments']['name'] ?>
					 			</td>
					 			<td>
					 				<p>
					 					<?php echo round($nutrimentAliment2); ?>
					 				</p>
					 			</td>
					 		</tr>
					 		<?php endif; ?>
				 		<?php endfor; ?>
				 	</table>
				</div>
			</div>
		<?php endif; ?>
	</div>
</form>

<script type="text/javascript">
	function alimentsMax() {
			alert("Vous avez déjà choisi deux aliments. Pour en remplacer un, supprimez le d'abord !");
	}

	function validRecherche() {
			if (document.getElementById("zone-aliment").value.length >= 3) {
				return true; 
			} else {
				alert('Vous devez saisir au moins trois lettres pour votre recherche.');
				return false
			}
	}

	function afficherNutriment($numAliment) {
		document.getElementById("info-nutriment-aliment" + $numAliment).style.display = "block";
		document.getElementById("info-aliment" + $numAliment).style.display = "none";
	}

	function afficherAliment($numAliment) {
		document.getElementById("info-aliment" + $numAliment).style.display = "block";
		document.getElementById("info-nutriment-aliment" + $numAliment).style.display = "none";
	}
</script>