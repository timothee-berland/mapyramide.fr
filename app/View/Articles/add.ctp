<?php 
	echo $this->html->script('ckeditor/ckeditor.js');
	echo $this->Form->create('Article', array('action' => 'add')); 
	echo $this->Form->input('id', array('type'=>'hidden')); 
?>

<span2>Informations sur l'article</span2>
<div class="bloc1">
	<label for="ArticleTitle">Titre de l'article</label>
	<div class="input text">
		<input name="data[Article][title]" maxlength="150" type="text" id="ArticleTitle" required="required"/>
	</div>
	<div class="input select">
		<label for="ArticleCategoryId">Catégorie</label>
		<select name="data[Article][category_id]" id="ArticleCategoryId">
			<?php foreach ($categories as $categorie) {
				echo "<option value=" . $categorie['Category']['id'] . ">" . $categorie['Category']['name'] . "</option>";
			} ?>
		</select>
	</div>
</div>
<span2>Contenu de l'article</span2>
<div id="bloc-editeur">
	<div class="input textarea">
		<label for="ArticleContent"></label>
		<textarea name="data[Article][content]" cols="160" rows="5" id="ArticleContent"></textarea>
		<?php echo $this->Ck->load('Article.content'); ?>
	</div>
</div>
<div id="bloc2">
    <?php echo $this->Form->end("Enregistrer"); ?> 
</div>
