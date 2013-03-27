<div id='bloc1'>
	<h1><?php echo $article['Article']['title'] ?></h1>
	<h2>Catégorie : <?php echo $article['Category']['name'] ?></h2>
	<h5>
		<datesArticles>Date de création : <?php echo $article['Article']['created'] ?></datesArticles>
		<datesArticles>Date de dernière modification : <?php echo $article['Article']['modified'] ?></datesArticles>
	</h5>
	
	<div id='contenuArticle'>
		<?php echo $article['Article']['content'] ?>
	</div>
</div>