<?php echo $this->Form->create('Aliment'); ?>
	<div id="presentation">
	    <div id="titre-accueil">
			<span> Encyclopédie </span> 
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim </p> 
			
			<select id="recherche">
			<option value="1">Tous les aliments</option>
			</select> 
			
			<input type="text" name="zone-aliment" value="" id="zone-aliment" /> <br><br><br> 

			<input type="submit" value="Rechercher" />
		</div>
		
		<!-- <div id="lien-accueil">
			<a href="?page=supertracker"> Retourner à l'accueil du SuperTracker </a>
		</div> -->
	</div>
	
	<div id="encyclo">
		<span> Résultats </span>
		<div id="bloc-gauche">
			<?php 
				if (isset($resultats)) :
					if (sizeof($resultats) >= 1) {
						echo "<ul>";
						foreach ($resultats as $resultat) { ?>
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
			<div class="bloc-droit"> 
				
				<?php 
					if(isset($aliment2)): 
						echo $this->Html->link('<div id="supprimer"></div>', '/aliments/index/' . $aliment2['Aliment']['id'], array('escape' => false));
					else : 
						echo $this->Html->link('<div id="supprimer"></div>', '/aliments/index/', array('escape' => false));
					endif; 
				?>
				

			   	<div id="titre">
					<?php
						echo "<h2>".$aliment1['Aliment']['nomFR']."</h2>";
						echo "<p> ____________________________ </p>";
					?>				
			    </div>
				
				<div id="choix-portion">
				   <p> Choisissez une quantité </p>
				   <select id="quantite" name="quantite">
					   <option value="1" selected="selected">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					   <option value="4">4</option>
					   <?php 
						   if (isset ($_POST['valider'])) {
								echo " <option value=\"".$_POST['quantite']."\" selected=\"selected\">".$_POST['quantite']."</option>";
							}
						?>
				   </select>
				   
				    <select id="portion" name="portion">
						<?php echo "<option value=\"petit(e)\">".$aliment1['Aliment']['typePortion']." -petit(e)-</option>"; ?>
						<?php echo "<option value=\"moyen(ne)\" selected=\"selected\">".$aliment1['Aliment']['typePortion']." -moyen(ne)-</option>"; ?>
						<?php echo "<option value=\"grand(e)\">".$aliment1['Aliment']['typePortion']." -grand(e)-</option>";
						if (isset ($_POST['valider'])) {
							echo " <option value=\"".$_POST['portion']."\" selected=\"selected\">".$type." -".$_POST['portion']."-</option>";
						}; ?>
				   </select>
				   
				    <input type="submit" name="valider" value="Valider" />			   
					<a>Ajouter *</a>
				</div>
			  	   
				<div id="onglets-encyclo">
				    <a onClick="afficherAliment();">Infos sur l'aliment </a>
					<a onClick="afficherNutriment();">Infos nutritionnelles </a>
				</div>
				
				<div id="info-aliment">
					<div id="calories"> Nombre total de calories 
						<?php
					    	foreach ($aliment1['Donneesaliment'] as $constituant) {
							    if (!empty($_POST['quantite'])) {
								echo "<p>".$constituant['valmoy']*$_POST['quantite']."</p>";
								} else {
									echo "<p>".$constituant['valmoy']."</p>";
								}
					    	}
						?>
					</div>
					
					<table>
					    <tr>
						    <th> Groupe(s) alimentaire(s) </th>
							<th> Apports </th>
						</tr>
						 <tr>
						    <td> &nbsp </td>
							<td>  principauxConstituants($aliment1['numAliment']); ?> </td>
						</tr>
					</table>
					      
				</div>
				
				<div id="info-nutriment"> 
				 tousLesCompos($aliment1['numAliment']) ?> !!!!!!!!!!!!!!!!!
				</div>
			</div>
		<?php endif; ?>

		<?php if(isset($aliment2)): ?>
			<div class="bloc-droit"> 
				  
				<?php echo $this->Html->link('<div id="supprimer2"></div>', '/aliments/index/' . $aliment1['Aliment']['id'], array('escape' => false)); ?>
				
			   	<div id="titre2">
					<?php
						echo "<h2>".$aliment2['Aliment']['nomFR']."</h2>";
						echo "<p> ____________________________ </p>";
					?>				
			    </div>
				
				<div id="choix-portion2">
				   <p> Choisissez une quantité </p>
				   <select id="quantite2" name="quantite2">
					   <option value="1" selected="selected">1</option>
					   <option value="2">2</option>
					   <option value="3">3</option>
					   <option value="4">4</option>
					   <?php 
						   if (isset ($_POST['valider2'])) {
								echo " <option value=\"".$_POST['quantite2']."\" selected=\"selected\">".$_POST['quantite2']."</option>";
							}
						?>
				   </select>
				   
				    <select id="portion2" name="portion2">
						<?php echo "<option value=\"petit(e)\">".$aliment2['Aliment']['typePortion']." -petit(e)-</option>"; ?>
						<?php echo "<option value=\"moyen(ne)\" selected=\"selected\">".$aliment2['Aliment']['typePortion']." -moyen(ne)-</option>"; ?>
						<?php echo "<option value=\"grand(e)\">".$aliment2['Aliment']['typePortion']." -grand(e)-</option>";
						if (isset ($_POST['valider2'])) {
							echo " <option value=\"".$_POST['portion']."\" selected=\"selected\">".$type." -".$_POST['portion']."-</option>";
						}; ?>
				   </select>
				   
				    <input type="submit" name="valider2" value="Valider2" />			   
					<a>Ajouter *</a>
				</div>
			  	   
				<div id="onglets-encyclo2">
				    <a onClick="afficherAliment('2');">Infos sur l'aliment </a>
					<a onClick="afficherNutriment('2');">Infos nutritionnelles </a>
				</div>
				
				<div id="info-aliment2">
					<div id="calories2"> Nombre total de calories 
						<?php
					    	foreach ($aliment1['Donneesaliment'] as $constituant) {
							    if (!empty($_POST['quantite'])) {
								echo "<p>".$constituant['valmoy']*$_POST['quantite']."</p>";
								} else {
									echo "<p>".$constituant['valmoy']."</p>";
								}
					    	}
						?>
					</div>
					
					<table>
					    <tr>
						    <th> Groupe(s) alimentaire(s) </th>
							<th> Apports </th>
						</tr>
						 <tr>
						    <td> &nbsp </td>
							<td>  principauxConstituants($aliment1['numAliment']); ?> </td>
						</tr>
					</table>
					      
				</div>
				
				<div id="info-nutriment2"> 
				 tousLesCompos($aliment1['numAliment']) ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</form>

<script type="text/javascript">
	function alimentsMax() {
			alert("Vous avez déjà choisi deux aliments. Pour en remplacer un, supprimez le d'abord !");
	}

	function afficherNutriment() {
	document.getElementById("info-nutriment").style.display = "block";
	document.getElementById("info-aliment").style.display = "none";
	}

	function afficherAliment() {
		document.getElementById("info-aliment").style.display = "block";
		document.getElementById("info-nutriment").style.display = "none";
	}
</script>