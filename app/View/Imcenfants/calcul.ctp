<div id="bloc7">
	<br/>
	<p style="text-indent:80px;">
		<div id="bloc5">
			<table width=820px;>
				<tr>
					<td>
						<h2>Résultat</h2>
						<br/><br/>
						<p>Mon IMC est : <?php echo round($imc,2);?></p>
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
							<?php echo("Vous êtes en surcharge pondérale <br/> Souhaitez-vous perdre du poids ?");
								  echo("<br/> <br/><a onClick=\"popup('IMC.php')\"><input type=\"submit\" value=\"Oui\"></a>
									<input type=\"submit\" value=\"Non\" />");?>
							
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
	</p>
</div>