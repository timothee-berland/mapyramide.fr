<div class="bloc1">
	<h1><?php echo $article['Article']['title'] ?></h1>
	<h2 id="titreCategorie"> (Catégorie : <?php echo $article['Category']['name'] ?>)</h2>
	<!-- Permet de préciser les dates de création et de modification de l'article ainsi que le contenu de ce dernier-->
	<h5>
		<datesArticles>Date de création : <?php echo $article['Article']['created'] ?></datesArticles>
		<?php if (!empty ($article['Article']['modified'])) 
			echo "<datesArticles>Date de dernière modification : ".$article['Article']['modified']."</datesArticles>"
		?>
	</h5>

	<div id='contenuArticle'>
		<?php echo "<p1>".$article['Article']['content']."<p1>" ?>
	</div>
</div>