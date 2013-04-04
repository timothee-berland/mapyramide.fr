<div id="bloc-editeur">
	<h1><?php echo $article['Article']['title'] ?></h1>
	<h2 id="titreCategorie"> (Catégorie : <?php echo $article['Category']['name'] ?>)</h2>
	<!-- Permet de préciser les dates de création et de modification de l'article ainsi que le contenu de ce dernier-->
	<h5>
		<?php 
			$temp = explode("-", $article['Article']['created']); 
			$heure = explode(" ", $temp[2])[1];
			$date = explode(" ", $temp[2])[0] . '-' . $temp[1] . '-' . $temp[0];
		?>
		<div id="datesArticles">Création : <?php echo $date . ' à ' . $heure ?></div>
		<?php 
			$temp = explode("-", $article['Article']['created']); 
			$heure = explode(" ", $temp[2])[1];
			$date = explode(" ", $temp[2])[0] . '-' . $temp[1] . '-' . $temp[0];
		?>
		<?php if (!empty ($article['Article']['modified'])) 
			echo "<div id=\"datesArticles\">Dernière modification : ". $date . ' à ' . $heure ."</div>"
		?>
	</h5>

	<div id='no-format'>
		<?php echo "<div class='p1'>".$article['Article']['content']."</div>" ?>
	</div>
</div>