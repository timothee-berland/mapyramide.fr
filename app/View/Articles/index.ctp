<?php foreach ($articles[0]['Article'] as $article) : ?>
	<div id="bloc-index">
		<p id="article">
			Titre : <?php echo $article['title']; ?> Catégorie : <?php echo $article['category_id']; ?>
		</p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<a href="articles/edit/<?php echo $article['id']; ?>"><div id="btn-modifier">Modifier</div></a>

			<!-- Bouton suppression -->
			<a href="articles/delete/<?php echo $article['id'];?>" onClick="return(confirmation())"><div id="btn-supprimer">Supprimer</div></a>
			
		</div>
	</div>
	<!-- Catégorie : <?php echo $article['Category']['name']; ?> -->
<?php endforeach; ?>

<script type="text/javascript">
function confirmation() {
	return(confirm("Êtes vous sûrs de vouloir supprimer cet article ?"));
}

</script>