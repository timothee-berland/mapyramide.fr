<div class="bloc-index">
		<p id="article">
			Ajouter un nouvel article
		</p>

		<div id="btns-index">
			<!-- Bouton ajout -->
			<?php echo $this->Html->link('<div id="btn-ajouter">Ajouter</div>', '/articles/add/', array('escape' => false)); ?>
		</div>
	</div>

<?php foreach ($articles as $article) : ?>
	<div class="bloc-index">
		<p id="article">
			<?php 
				echo $this->Html->link('<div class="titreArticle">' . $article['Article']['title'] . '</div>', '/articles/article/' . $article['Article']['id'] , array('escape' => false));
			  	echo' (Catégorie : ' . $article['Category']['name'] . ') '; 
		  	?>
		</p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<?php echo $this->Html->link('<div id="btn-modifier">Modifier</div>', '/articles/edit/' . $article['Article']['id'], array('escape' => false)); ?>

			<!-- Bouton suppression -->
			<?php echo $this->Html->link('<div id="btn-supprimer">Supprimer</div>', '/articles/delete/' . $article['Article']['id'], array('onClick' => 'return (confirmation())', 'escape' => false)); ?>
			
		</div>
	</div>
	<!-- Catégorie : <?php echo $article['Category']['name']; ?> -->
<?php endforeach; ?>

<script type="text/javascript">
function confirmation() {
	return(confirm("Êtes vous sûrs de vouloir supprimer cet article ?"));
}

</script>