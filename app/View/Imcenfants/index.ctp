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
			<input type="radio" name="sexe" id="homme" value="homme" checked="checked" /> Masculin
			<input type="radio" name="sexe" id="femme" value="femme"/> Feminin 
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
			
			<label for="actPhys"> Activité physique  </label> 
			<select id="actPhys">
				<option value="1"> Sédentaire </option>
				<option value="2"> Faiblement actif </option>
				<option value="3"> Actif </option> 
				<option value="4"> Très actif </option> 
			</select> <br><br>

			<?php echo $this->Form->end('Calculer'); ?>
		</fieldset>
	</div>
</form>