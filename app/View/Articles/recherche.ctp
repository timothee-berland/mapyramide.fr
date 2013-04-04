<div id="bloc-editeur">
	<div id="accordeon">
		<?php
		if (!empty($articles)) {
			foreach ($articles as $article): 
				echo $this->Text->truncate('<h1>' . $article['Article']['title'] . '</h1>', 
						25,	
						array('ellipsis' => '...', 'html' => true));
				$text = "<p>" . $this->Text->truncate($article['Article']['content'],1500, array('html' => true)) . 
						"</p><p class='suite'>" . $this->Html->link('Lire la suite ...', '/articles/article/' . $article['Article']['id'], 
								array('escape' => false)) . "</p>";
				echo $this->Html->div($class = null, $text , $options = array());
			endforeach; 
		} else  {
			echo "Désolé mais aucun résultat n'a été renvoyé avec ces mots clés...<br><br>";
		}

		?>
	</div>
</div>

<script>
  $(function() {
    $( "#accordeon" ).accordion();
  });
</script>