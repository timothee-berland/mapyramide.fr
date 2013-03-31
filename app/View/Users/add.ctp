<div id="content">	

	<?php echo $this->Form->create('User'); ?>
	
	<!-- Cette page est accessible depuis le bouton "Créer mon profil" situé en haut à droite de chaque page -->
	<!--TODO AJOUTER UNE IMAGE -->
	<span2> Personnalisez votre profil </span2> 
	<!-- Pour créer son profil, l'utilisateur doit fournir obligatoirement un identifiant, sa date de naissance au fomat aaaa/mm/jj (un calendrier est là pour
		l'aider) et doit préciser son sexe --> 
	<div class="bloc1">	

		<label for="UserUsername"> Identifiant <em> *</em></label>
		<input type="text" name="data[User][username]" maxlength="50" type="text" id="UserUsername" required="required" title="Votre nom d'utilisateur doit faire entre 5 et 20 caractètres"/> <br><br>
		
		<label for="UserDatenaissance"> Date de naissance (aaaa-mm-jj) <em> *</em></label>
		<input type="text" name="data[User][datenaissance]" id="UserDatenaissance" required="required"/> <br><br><br>
		
		<label for="UserSexe"> Vous êtes <em> *</em></label>
		<input type="radio" name="data[User][sexe]" id="homme" value="homme" checked="checked" onClick="masquer(this)" /><a class='labelInscription'> Homme</a>
		<input type="radio" name="data[User][sexe]" id="femme" value="femme" onClick="afficher();" /><a class='labelInscription'> Femme</a><br><br>
		
		<!-- Si l'internaute est une femme et a entre 18 et 48ans, nous lui demandons si elle est actuellement enceinte ou allaitante -->
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
		
		<!-- L'utilisateur peut égalment préciser de manière optionnelle sa taille et son poids -->
		<label for="UserTaille"> Votre taille </label> 
		<input type="text" name="data[User][taille]" value="" id="UserTaille" /> <br><br>
		
		<label for="UserPoids">  Votre poids </label> 
		<input type="text" name="data[User][poids]" value="" id="UserPoids" /> 
		
		<span>* Informations obligatoires </span>
	</div>
			
	<span2> Enregistrez votre profil </span2> 
	<div class="bloc1">	
		<!--L'utilisateur doit préciser son mot de passe -->
		<label for="UserPassword"> Mot de passe <em> *</em></label>
		<input type="password" name="data[User][password]" id="UserPassword" required="required" title="Votre mot de passe doit faire plus de 7 caractètres"/> <br><br>
		
		<label for="UserPasswordConfirmation"> Confirmation <em> *</em></label>
		<input type="password" name="UserPasswordConfirmation" id="UserPasswordConfirmation" required="required"/> <br><br>
		
		<!-- S'il le souhaite, il peut préciser son adresse email -->
		<label for="UserEmail"> Email </label>
		<input type="email" name="data[User][email]" id="UserEmail" /> 
		
		<span>* Informations obligatoires </span>
	</div>
	
	<!-- L'utilisateur peut valider son profil ou remettre le formulaire à 0 -->
	<div id="bloc2">
	    <input type="button" value="Effacer" onClick="raz()"/>
	    <input type="submit" value="Valider" onClick="return validerForm()"/>
	</div>
</form>
</div>

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
	var formulaire =  document.forms['UserAddForm'];
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
    var formulaire =  document.forms['UserAddForm'];

	if (formulaire.elements['homme'].checked) {
		formulaire.elements['pas_allaitante'].checked = true;
		formulaire.elements['pas_enceinte'].checked = true;
	}

	if (formulaire.elements['UserPasswordConfirmation'].value == 
		formulaire.elements['UserPassword'].value) {
		if (formulaire.elements['UserPassword'].value.length >= 7) {
			return true;
		} else {
			alert('Le mot de passe saisi est trop court. Il doit faire au moins 7 caractères.');
		}
	} else {
		alert('Le mot de passe ne correspond pas');
	}
	
	return false;
}	

function postData() {
	var formulaire =  document.forms['UserAddForm'];
    formulaire.elements["UserUsername"].value = '<?php echo $username ?>';
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

