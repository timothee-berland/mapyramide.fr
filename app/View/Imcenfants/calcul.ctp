<div id="bloc2">
	<br/>
	<p1>
		<div id="bloc5">
			<table>
				<tr>
					<td>
						<h2>Résultat</h2>
						<br/><br/>
						<p>Mon IMC est : <?php echo round($imc,2);?></p>
						<p id='besoinsEnergetiques'>Mes besoins énergétiques estimés sont de <?php echo $BEE ?> calories par jour.</p>
						<br/><br/>
						<!--Si la personne a plus de 18 ans, on calcule son IMC avec l'équation suivante poids/ taille² -->
						<?php if ($_POST['zt_age'] > 18): ?>
							<?php if ($imc<$imcMin): ?>
							<!-- IMC<16.5 -> Insuffisance pondérale -->
							Vous êtes en insuffisance pondérale. Ce site ne peut pas vous prendre en charge, consultez un médecin ou un diététicien.
							<?php elseif ($imc>=$imcMin && $imc<=$imcMax) : ?>
							<!--IMC>=18.5 && IMC <=25 -> Corpulence normale -->
							<?php $categorie="Corpulence normale";
							echo("<p>"."Je suis dans la catégorie :<br/> ".$categorie."</p>"); ?>
							<?php elseif ($imc>$imcMax): ?>
							<!-- IMC >25 -> Surpoids 
							   On demande alors à l'utilisateur s'il souhaite perdre du poids : deux possibilités s'offrent à lui "Oui" et "Non". 
							   S'il clique sur "Oui", on ouvre une popup, lui demandant s'il souhaite effectuer une perte pondérale modérée sur 6 mois
							   ou une perte pondérale plus contraignante
							   Dans tous les cas (même si le calcul n'est pas identique dans tous les cas, nous calculons le nombre de calories qu'il doit consommer
							   en fonction de sa taille, de son poids & de la décision qu'il en prise concernant la perte de poids-->
							
							<!-- #TODO : mettre dans une balise <form> sinon le input ne sert à rien -->
						  	<div id='choixPertePoids'>
							Vous êtes en surcharge pondérale <br/> Souhaitez-vous perdre du poids ?
						  	<br/> <br/>
						  		<a id='oui'><input type="submit" value="Oui"/></a>
								<a id='non'><input type="submit" value="Non"/></a>
							</div>
							<!-- Si l'utilisateur est un enfant (age<=18 ans), nous lui indiquons seulement, si sa corpulence est "normale" ou non -->
							<?php endif; ?>
						<?php else : 
							if($imc >= $imcMin && $imc <= $imcMax) {
								echo("Corpulence normale");
							} else {
								echo("Vos paramètres corporels font que ce site ne peut pas vous prendre en charge et vous demande de consulter un médecin ou un diététicien");
							}
							endif;?>
					</td>
					<td><span></span></td>
					<td>
						<!-- On récupère l'age de la personne. Si c'est un adulte, on affiche l'interprétation suivante -->
						<?php 
							if($_POST['zt_age']>=18): ?>
							<h2>Interprétation</h2>
							<br/><br/>
							<table cellpadding =20px; width=310px; >
								<tr>
									<td><b>IMC kg.m-2</b></td>
									<td><div id=\"span1\"></div></td>
									<td><b>Interprétation</b></td>
								</tr>
								
								<tr>
									<td> <16.5</td>
									<td><div id=\"span1\"></div></td>
									<td>Dénutrition</td>
								</tr>
								
								<tr>
									<td> Entre 16.5 et 18.5</td>
									<td><div id=\"span1\"></div></td>
									<td>Maigreur</td>
								</tr>
								
								<tr>
									<td>Entre 18.5 et 25</td>
									<td><div id=\"span1\"></div></td>
									<td>Corpulence normale</td>
								</tr>
								
								<tr>
									<td>Entre 25 et 30</td>
									<td><div id=\"span1\"></div></td>
									<td>Surpoids</td>
								</tr>
								
								<tr>
									<td>Entre 30 et 35</td>
									<td><div id=\"span1\"></div></td>
									<td>Obésité modérée</td>
								</tr>
								
								<tr>
									<td>Entre 35 et 40</td>
									<td><div id=\"span1\"></div></td>
									<td>Obésité élevée</td>

								</tr>
								
								<tr>
									<td>>40</td>
									<td><div id=\"span1\"></div></td>
									<td>Obésité morbide</td>
								</tr>
							</table>
						<?php endif; ?>
					</td>
				</tr>
			</table>
		</div>
	</p1>
</div>

<div id="blocIMC">
</div>

<div id="blocQuestion">
	<br/>
	<p>
		Perdre du poids et après maintenir ce poids stable ne peut réussir que si deux impératifs sont remplis :<br/>
		<ul>
			<li> une réduction des apports alimentaires (nous allons vous aider)</li>
			<li> et la pratique d'une activité physique continue (nous allons vous aider aussi).</li>
		</ul> 
	</p>
	<br/>

	<p>Souhaitez-vous, effectuer une : </p>

	<p1><input type="radio" name="radio" value="250" id='m' /> Perte pondérale modérée dans six mois (Conseillée)</p1>
	<br/>
	<p1><input type="radio" name="radio" value="500" id='c' /> Perte pondérale plus contraignante </p1>
	<br/><br/>
	<input type="submit" name="valider" value="Valider" id='v'>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
	    // SHOW/HIDE
	    $('#blocIMC').hide();
	    $('#blocQuestion').hide();
	    $('#bloc2 #oui').click(function(e){
	    	$('#bloc2 #choixPertePoids').fadeOut();
	        $('#blocQuestion').fadeIn();
	        $('#blocIMC').fadeIn();
	    });
	    $('#bloc2 #non').click(function(e){
	        $('#bloc2 #choixPertePoids').fadeOut();
	    });
	    $('#blocQuestion #m').click(function(e){
	        var newBEE = <?php echo $BEE ?> - 250;
	        document.getElementById('besoinsEnergetiques').innerHTML = "Mes nouveaux besoins énergétiques conseillés</p><p>sont de " + newBEE + " calories par jour.";
	    });
		$('#blocQuestion #c').click(function(e){
	        var newBEE = <?php echo $BEE ?> - 500;
	        document.getElementById('besoinsEnergetiques').innerHTML = "Mes nouveaux besoins énergétiques conseillés</p><p>sont de " + newBEE + " calories par jour.";
	    });
	    $('#blocQuestion #v').click(function(e){
	        $('#blocQuestion').fadeOut();
	        $('#blocIMC').fadeOut();
	    });
	    

	});
	
</script>