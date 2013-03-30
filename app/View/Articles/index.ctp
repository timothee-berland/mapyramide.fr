<!-- Cette page est accessible dans la partie administration. Cliquez sur : gérer des articles -->
<div class="bloc-index">
		<p id="article">
			Ajouter un nouvel article
		</p>

		<div id="btns-index">
			<!-- Bouton ajout : pour ajouter un nouvel artcile cliquez sur la croix verte-->
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
			<!-- Bouton modifications : pour effectuer des modifications concernant un article, l'administrateur doit cliquez sur le bouton symbolisé par un engrenage correspondant
				 à l'article qu'il souhaite modifier -->
			<?php echo $this->Html->link('<div id="btn-modifier">Modifier</div>', '/articles/edit/' . $article['Article']['id'], array('escape' => false)); ?>

			<!-- Bouton suppression : pour supprimer un article, l'administrateur doit cliquez sur le bouton symbolisé par une croix rouge correspondant
				 à l'article qu'il souhaite modifier -->
			<?php echo $this->Html->link('<div id="btn-supprimer">Supprimer</div>', '/articles/delete/' . $article['Article']['id'], array('onClick' => 'return (confirmation())', 'escape' => false)); ?>
			
		</div>
	</div>
	<!-- Catégorie : <?php echo $article['Category']['name']; ?> -->
<?php endforeach; ?>

<!-- Si l'administrateur décide de supprimer un article, avant de faire la suppression, on s'assure qu'il n'a pas commis d'erreur -->
<script type="text/javascript">
function confirmation() {
	return(confirm("Êtes vous sûrs de vouloir supprimer cet article ?"));
}

</script>