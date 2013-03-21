<div id="content">	
	<form method="GET" action="inscription.php?>">
	
	<!--TODO AJOUTER UNE IMAGE -->
	<span> Personnalisez votre profil </span> 
	<div id="bloc1">	
		<fieldset>
		<label for="identifiant"> Identifiant <em> *</em></label>
		<input type="text" id="identifiant" /> <br><br>
		
		<label for="age"> Age <em> *</em></label>
		<input type="text" id="age"/> <br><br> 
		
		<label for="sexe"> Vous êtes <em> *</em></label>
		<input type="radio" name="sexe" id="sexe" value="M" checked="checked"> Homme
		<input type="radio" name="sexe" id="sexe" value="F"> Femme <br><br>
		
		<label for="actPhys"> Activité physique <em> *</em> </label> 
		<select id="actPhys">
			<option value="1">Moins de 30 minutes</option>
			<option value="2">Entre 30 et 60 minutes</option>
			<option value="3">Plus de 60 minutes</option> 
		</select> <br><br>
		
		<label for="taille"> Votre taille </label> 
		<input type="text" value="" id="taille" /> <br><br> 
		
		<label for="poids">  Votre poids </label> 
		<input type="text" value="" id="poids" /> 
		
		<span>* Informations obligatoires </span>
	</fieldset>
	</div>
	
	<span> Enregistrez votre profil </span> 
	<div id="bloc1">	
	<fieldset>
		<label for="mdp"> Mot de passe <em> *</em></label>
		<input type="password" id="mdp" /> <br><br>
		
		<label for="confirmation"> Confirmation <em> *</em></label>
		<input type="password" id="confirmation" /> <br><br>
		
		<label for="email"> Email </label>
		<input type="email" id="email" /> 
		
		<span>* Informations obligatoires </span>
	</fieldset>
	</div>
	
	<div id="bloc2">
	<input type="submit" value="Effacer" />
	<input type="submit" value="Valider" />
	</div>

	

	
</form>
</div>

