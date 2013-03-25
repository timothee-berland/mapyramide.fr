<?php echo $this->Form->create('Imcenfant',array('action' => 'calcul')); ?>
	<!-- Cette page est accessible à partir du menu situé en haut de la page : Clquez sur "Ressources" -> "Calculateur IMC" -->
	<div id="IMC">
		<span2 class='span2'> Calculateur IMC </span2>
	</div>
	
	<div id="bloc1">	
		<fieldset>
			<div id="texte">
				<p>Définition : </br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
				</p> 
			</div>
			<br/><br/><br/><br/>
			
			<!-- On récupère le sexe, la taille, le poids, l'âge et le temps moyen de pratique d"une activité physique par l'utilisateur.
			     Ces informations nous permettent, par la suite, de calculer l'IMC de la personne -->
			<label for="sexe"> Sexe </label>
			<input type="radio" name="sexe" id="homme" value="homme" checked="checked" /> <a class="labelInscription">Masculin</a>
			<input type="radio" name="sexe" id="femme" value="femme"/> <a class="labelInscription">Feminin</a>
			<br/><br/>

			<label for="taille"> Taille </label>
			<input type="text" MAXLENGTH=3 name="zt_taille" />
			<p style="text-indent:25px;">cm</p>
			<br/> <br/>
			
			<label for="poids"> Poids </label>
			<input type="text" MAXLENGTH=3 name="zt_poids" />
			<p style="text-indent:25px;">kg</p>
			<br/> <br/>
			
			<label for="age"> Age </label>
			<input type="text" MAXLENGTH=2 name="zt_age" />
			<p style="text-indent:25px;">ans</p>
			<br/> <br/>
			
			<label for="actPhys"> Activité physique  </label> 
			<select id="actPhys" name='AP'>
				<option value="1" title="Je fais moins de 15 minutes d'activité physique par jour"> Sédentaire </option>
				<option value="2" title="Tous les jours, ou presque, je fais au moins 15 minutes d'activité physique modérée"> Faiblement actif </option>
				<option value="3" title="Tous les jours, ou presque, je fais au moins 30 minutes d'activité physique modérée (environ 200 min par semaine)"> Actif </option> 
				<option value="4" title="Tous les jours, ou presque, je fais de 45 à 60 minutes d’activité physique modérée (environ 300 à 400 min par semaine)&#13;			OU&#13;au moins 3 fois par semaine, à raison de 45 à 60 minutes par séance, je pratique une activité physique d’intensité élevée"> Très actif </option> 
			</select> 
			
			<?php echo $this->Form->end('Calculer'); ?>
		</fieldset>
	</div>
</form>