<?php foreach ($articles[0]['Article'] as $article) : ?>
	<div id="bloc-index">
		<p id="article">
			Titre : <?php echo $article['title'] . ' Catégorie : ' . $article['category_id']; ?>
		</p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<div id="btn-modifier"><?php echo $this->Html->link('Modifier', 'articles/edit/' . $article['id']) ?></div>

			<!-- Bouton suppression -->
			<?php echo $this->Html->link('<div id="btn-supprimer">Supprimer</div>', 'articles/delete/' . $article['id'], array('onClick' => 'return (confirmation())', 'escape' => false)); ?>
			
		</div>
	</div>
	<!-- Catégorie : <?php echo $article['Category']['name']; ?> -->
<?php endforeach; ?>

<script type="text/javascript">
function confirmation() {
	return(confirm("Êtes vous sûrs de vouloir supprimer cet article ?"));
}

</script>