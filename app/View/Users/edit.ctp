<?php echo $this->Form->create('User'); ?>

	<?php if (! (AuthComponent::user('role') == 'administrateur' && AuthComponent::user('id') != $this->request->data['User']['id'])) : ?>
		<!--TODO AJOUTER UNE IMAGE -->
		<!-- Cette page permet à un administrateur de modifier le profil d'un utilisateur ou d'un administrateur. Elle est accessible depuis l'administration.
		     Cliquez sur "gérer les utilisateur" puis sur le bouton représenté par un engrenage pour modifier le profil concerné -->
		<span2> Personnalisez votre profil </span2> 
		<div class="bloc1">	
			
			<!-- Les informations saisies lors de l'inscription sont déjà préremplies -->
			<label for="UserDatenaissance"> Date de naissance (aaaa-mm-jj) <em> *</em></label>
			<input type="text" name="data[User][datenaissance]" id="UserDatenaissance" required="required" title="Votre nom d'utilisateur doit faire entre 5 et 20 caractètres"/> <br><br><br>
			
			<label for="UserSexe"> Vous êtes <em> *</em></label>
			<input type="radio" name="data[User][sexe]" id="homme" value="homme" checked="checked" onClick="masquer(this)" /><a class='labelInscription'> Homme</a>
			<input type="radio" name="data[User][sexe]" id="femme" value="femme" onClick="afficher();" /><a class='labelInscription'> Femme</a><br><br>
			
			<div id="cache">
			    <label for="UserEnceinte"> Enceinte  <em> *</em> </label>
			    <input type="radio" name="data[User][enceinte]" id="enceinte" value="O"/><a class='labelInscription'> Oui 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
				<input type="radio" name="data[User][enceinte]" id="pas_enceinte" value="N" checked/><a class='labelInscription'> Non </a><br><br>
				
				<label for="UserAllaitante"> Allaitante <em> *</em> </label>
				<input type="radio" name="data[User][allaitante]" id="allaitante" value="O"/><a class='labelInscription'> Oui 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
				<input type="radio" name="data[User][allaitante]" id="pas_allaitante" value="N" checked/><a class='labelInscription'> Non</a><br><br><br>
				
			</div>
			
			<label for="UserTaille"> Votre taille </label> 
			<input type="text" name="data[User][taille]" value="" id="UserTaille" /> <br><br>
			
			<label for="UserPoids">  Votre poids </label> 
			<input type="text" name="data[User][poids]" value="" id="UserPoids" /> 
			
			<span>* Informations obligatoires </span>
		</div>
				
		<span2> Enregistrez votre profil </span2> 
		<div class="bloc1">	
			<label for="UserPassword"> Mot de passe <em> *</em></label>
			<input type="password" name="data[User][password]" id="UserPassword" required="required"/> <br><br>
			
			<label for="UserPasswordConfirmation"> Confirmation <em> *</em></label>
			<input type="password" name="UserPasswordConfirmation" id="UserPasswordConfirmation" required="required" title="Votre mot de passe doit faire plus de 7 caractètres"/> <br><br>
			
			<label for="UserEmail"> Email </label>
			<input type="email" name="data[User][email]" id="UserEmail" /> 
	
			<span>* Informations obligatoires </span>
		</div>
	
	<?php else : ?>
		<span2> Type de profil </span2> 
		<div class="bloc1">	
			<label for="UserRole"> Type d'utilisateur <em> *</em></label>
				<?php if ($this->request->data['User']['role'] == 'administrateur') : ?>
					<div class="input select">
						<select name="data[User][role]" id="UserRole">
							<option value="administrateur" selected='selected'>Administrateur</option>
							<option value="utilisateur">Utilisateur</option>
						</select>
					</div>
				<?php else : ?>
					<div class="input select">
						<select name="data[User][role]" id="UserRole">
							<option value="administrateur">Administrateur</option>
							<option value="utilisateur" selected='selected'>Utilisateur</option>
						</select>
					</div>
				<?php endif; ?>
	<?php endif; ?>

	<!-- Ce bouton vous permet de valider les modifications effectuées -->
	<div id="bloc12">
	    <input type="submit" value="Valider" onClick="return validerForm()"/>
	</div>
</form>

<script>
	$(function() {
		$( "#UserDatenaissance" ).datepicker({
			dateFormat: "yy-mm-dd", 
			changeMonth: true, 
			changeYear: true,
			minDate: "-100Y", 
			maxDate: "-1",
			showOtherMonths: true,
      		selectOtherMonths: true,
      		defaultDate: "-20Y",
      		yearRange: "c-101:c"
		});
	});
</script>

<script type="text/javascript">
function afficher() {

    var birthday = new Date(document.getElementById("UserDatenaissance").value);
	var today = new Date();
	var age = today.getFullYear() - birthday.getFullYear();

	// Reset birthday to the current year.
	birthday.setFullYear(today.getFullYear());

	// If the user's birthday has not occurred yet this year, subtract 1.
	if (today < birthday)
	{
	    age--;
	}

    if (age >= 18 && age <= 48) {
	    document.getElementById("cache").style.display = "block";
    }
}

function masquer(btn) {
    if (btn.checked) {
        document.getElementById("cache").style.display = "none";
    } 
}

function raz() {
	var formulaire =  document.forms['UserEditForm'];
    document.getElementById("UserUsername").value = "";  
	document.getElementById("UserDatenaissance").value = "";
	document.getElementById("UserTaille").value = "";
	document.getElementById("UserPoids").value = "";
    document.getElementById("UserPassword").value = "";
    document.getElementById("UserPasswordConfirmation").value = "";
    document.getElementById("UserEmail").value = "";
}

// #TODO fonction onLoad qui renseigne les données post s'il y en a

function validerForm() {
    var formulaire =  document.forms['UserEditForm'];

	if (formulaire.elements['homme'].checked) {
		formulaire.elements['pas_allaitante'].checked = true;
		formulaire.elements['pas_enceinte'].checked = true;
	}

	if (formulaire.elements['UserPasswordConfirmation'].value == 
		formulaire.elements['UserPassword'].value) {
		return true;
	} else {
		alert ('Le mot de passe ne correspond pas');
	}
	
	return false;
}	

function postData() {
	var formulaire =  document.forms['UserEditForm'];
	formulaire.elements["UserDatenaissance"].value = '<?php echo $datenaissance ?>';
	formulaire.elements["UserTaille"].value = '<?php echo $taille ?>';
	formulaire.elements["UserPoids"].value = '<?php echo $poids ?>';
	formulaire.elements["UserEmail"].value = '<?php echo $email ?>';
	
	if ('<?php echo $sexe ?>' == 'femme') {
		formulaire.elements['femme'].checked = true;
		afficher();
	} 

	if ('<?php echo $enceinte ?>' == 'O') {
		formulaire.elements['enceinte'].checked = true;
	}
	
	if ('<?php echo $allaitante ?>' == 'O') {
		formulaire.elements['allaitante'].checked = true;
	}
}

</script>

