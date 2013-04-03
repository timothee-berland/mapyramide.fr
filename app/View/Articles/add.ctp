<?php 
	echo $this->html->script('ckeditor/ckeditor.js');
	echo $this->Form->create('Article', array('action' => 'add')); 
	echo $this->Form->input('id', array('type'=>'hidden')); 
?>
<!-- Cette page est accessible dans la partie administration. Cliquez sur : gérer des articles -->
<span2>Informations sur l'article</span2>
<div class="bloc1">
	<!-- Permet à l'utilisateur de saisir le titre de l'article -->
	<label for="ArticleTitle">Titre de l'article</label>
	<div class="input text">
		<input name="data[Article][title]" maxlength="150" type="text" id="ArticleTitle" required="required"/>
	</div>
	<!-- Permet à l'utilisateur de choisir dans quelle catégorie il souhaite ajouter l'article -->
	<div class="input select">
		<label for="ArticleCategoryId">Catégorie</label>
		<select name="data[Article][category_id]" id="ArticleCategoryId">
			<?php foreach ($categories as $categorie) {
				echo "<option value=" . $categorie['Category']['id'] . ">" . $categorie['Category']['name'] . "</option>";
			} ?>
		</select>
	</div>
</div>
<!-- L'utilisateur saisi ici le contenu de l'article -->
<span2>Contenu de l'article</span2>
<div id="bloc-editeur">
	<div class="input textarea">
		<label for="ArticleContent"></label>
		<textarea name="data[Article][content]" cols="160" rows="5" id="ArticleContent"></textarea>
		<?php echo $this->Ck->load('Article.content'); ?>
	</div>
</div>
<div id="bloc11">
    <?php echo $this->Form->end("Enregistrer"); ?> 
</div>
