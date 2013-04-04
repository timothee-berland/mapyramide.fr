<?php echo $this->Form->create('Imcenfant',array('action' => 'calcul')); ?>
	<!-- Cette page est accessible à partir du menu situé en haut de la page : Clquez sur "Ressources" -> "Calculateur IMC" -->
	<div id="IMC">
		<div class='span2'> Calculateur IMC </div>
	</div>
	
	<div class="bloc1">	
		<div class="texte">
		    <h1> Définition </h1>
			<div class="p1">En plus de vous sentir mieux dans votre corps et d’avoir une silhouette plus svelte, le maintien d’un
poids corporel de santé est indispensable pour votre propre état de santé et de votre bien-être.
Si, vous êtes en surpoids, ou obèse, vous présentez un risque plus élevé de développer plusieurs
maladies parmi lesquelles : l’hypertension, le diabète de type 2, des maladies cardio-vasculaires et
certains types de cancers. 
			</div> 
		</div>
		<br/><br/><br/><br/>
		
		<!-- On récupère le sexe, la taille, le poids, l'âge et le temps moyen de pratique d"une activité physique par l'utilisateur.
		     Ces informations nous permettent, par la suite, de calculer l'IMC de la personne -->
		<label for="sexe"> Sexe </label>
		<input type="radio" name="sexe" id="homme" value="homme" checked="checked" /> <a class="labelInscription">Masculin</a>
		<input type="radio" name="sexe" id="femme" value="femme"/> <a class="labelInscription">Feminin</a>
		<br/><br/>

		<label for="taille"> Taille </label>
		<input type="text" MAXLENGTH=3 name="zt_taille" required="required" />
		<div class="p2">cm</div>
		<br/> <br/>
		
		<label for="poids"> Poids </label>
		<input type="text" MAXLENGTH=3 name="zt_poids" required="required" />
		<div class="p2">kg</div>
		<br/> <br/>
		
		<label for="age"> Age </label>
		<input type="text" MAXLENGTH=2 name="zt_age" required="required" />
		<div class="p2">ans</div>
		<br/> <br/>
		
		<label for="actPhys"> Activité physique  </label> 
		<select id="actPhys" name='AP'>
			<option value="1" title="Je fais moins de 15 minutes d'activité physique par jour"> Sédentaire </option>
			<option value="2" title="Tous les jours, ou presque, je fais au moins 15 minutes d'activité physique modérée"> Faiblement actif </option>
			<option value="3" title="Tous les jours, ou presque, je fais au moins 30 minutes d'activité physique modérée (environ 200 min par semaine)"> Actif </option> 
			<option value="4" title="Tous les jours, ou presque, je fais de 45 à 60 minutes d’activité physique modérée (environ 300 à 400 min par semaine)&#13;			OU&#13;au moins 3 fois par semaine, à raison de 45 à 60 minutes par séance, je pratique une activité physique d’intensité élevée"> Très actif </option> 
		</select> 
		
		<div class="p3"> Tous les champs sont obligatoires </div>
		
		<?php echo $this->Form->end('Calculer'); ?>
	</div>
</form>

<script type="text/javascript">
	function postData() {
		<?php if (!isset($noPost)) : ?>
			var formulaire =  document.forms['ImcenfantCalculForm'];

			// Calcul de l'age de l'utilisateur
			var birthday = new Date( <?php echo $datenaissance ?> );
			var today = new Date();
			var age = today.getFullYear() - birthday.getFullYear();

			// Reset birthday to the current year.
			birthday.setFullYear(today.getFullYear());

			// If the user's birthday has not occurred yet this year, subtract 1.
			if (today < birthday)
			{
			    age--;
			}

			formulaire.elements["zt_age"].value = age;
			formulaire.elements["zt_taille"].value = '<?php echo $taille ?>';
			formulaire.elements["zt_poids"].value = '<?php echo $poids ?>';
			
			if ('<?php echo $sexe ?>' == 'femme') {
				formulaire.elements['femme'].checked = true;
				afficher();
			} 
		<?php endif; ?>
	}
</script>