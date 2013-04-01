<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<?php
if (isset($filePresent)):
	App::uses('ConnectionManager', 'Model');
	try {
		$connected = ConnectionManager::getDataSource('default');
	} catch (Exception $connectionError) {
		$connected = false;
		$errorMsg = $connectionError->getMessage();
		if (method_exists($connectionError, 'getAttributes')) {
			$attributes = $connectionError->getAttributes();
			if (isset($errorMsg['message'])) {
				$errorMsg .= '<br />' . $attributes['message'];
			}
		}
	}
endif;
?>


<fieldset id='derniersArticles'>
  <legend  class='legendCenter'>
    Derniers articles ajoutés
  </legend>
	<div id="accordeon">
		<?php 
			$compteurArticles=0;
			foreach ($derniersArticles as $article): 
				$compteurArticles++;
				if($compteurArticles > 7) {break;}
				echo $this->Text->truncate('<h1>' . $article['Article']['title'] . '</h1>', 
						25,	
						array('ellipsis' => '...', 'html' => true));
				$text = "<p>" . $this->Text->truncate($article['Article']['content'], array('html' => true)) . 
						"</p><p class='suite'>" . $this->Html->link('Lire la suite ...', '/articles/article/' . $article['Article']['id'], 
								array('escape' => false)) . "</p>";
				echo $this->Html->div($class = null, $text , $options = array());
			endforeach; 
		?>
	</div>
	
</fieldset>


<!-- SLIDER -->				
<div id="home-slider" class="lof-slidecontent">
	
	<div class="preload"><div></div></div>
	
	<!-- slider content --> 
	<div class="main-slider-content" >
	<ul class="sliders-wrap-inner">
	    <li>
	          <?php echo $this->Html->image('slider/slide-1.png', array('title' => '', 'alt' => 'alt')); ?>
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <?php echo $this->Html->link('En savoir plus', '#', array('class' => 'link')); ?>
	            </p>
	         </div>
	    </li>
	    
	    <li>
	          <?php echo $this->Html->image('slider/slide-2.png', array('title' => '', 'alt' => 'alt')); ?>
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <?php echo $this->Html->link('En savoir plus', '#', array('class' => 'link')); ?>
	            </p>
	         </div>
	    </li>
	    
	    <li>
	          <?php echo $this->Html->image('slider/slide-3.png', array('title' => '', 'alt' => 'alt')); ?>
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <?php echo $this->Html->link('En savoir plus', '#', array('class' => 'link')); ?>
	            </p>
	         </div>
	    </li>
	    
	    <li>
	          <?php echo $this->Html->image('slider/slide-4.png', array('title' => '', 'alt' => 'alt')); ?>
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <?php echo $this->Html->link('En savoir plus', '#', array('class' => 'link')); ?>
	            </p>
	         </div>
	    </li>

	  </ul>  	
	</div>
	<!-- ENDS slider content --> 
           
	<!-- slider nav -->
	<div class="navigator-content">
	  <div class="navigator-wrapper">
	        <ul class="navigator-wrap-inner">
	           <li><?php echo $this->Html->image('slider/slide-1_thumb.png', array('alt' => 'alt')); ?></li>
	           <li><?php echo $this->Html->image('slider/slide-2_thumb.png', array('alt' => 'alt')); ?></li>
	           <li><?php echo $this->Html->image('slider/slide-3_thumb.png', array('alt' => 'alt')); ?></li>
	           <li><?php echo $this->Html->image('slider/slide-4_thumb.png', array('alt' => 'alt')); ?></li>
	        </ul>
	  </div>
	  <div class="button-next">Next</div>
	  <div  class="button-previous">Previous</div>
	  <!-- REMOVED TILL FIXED <div class="button-control"><span>STOP</span></div> -->
	</div> 
	<!-- slider nav -->
          
</div>
<!-- ENDS SLIDER -->
<!-- Boutons -->
<div id="btns-home">
	<!-- Bouton calcul IMC -->
	<?php echo $this->Html->link('<div id="btn-calcul-imc">Calculer mon IMC</div>', '/imcenfants', array('escape' => false)); ?>

	<!-- Bouton Super Traqueur -->
	<?php echo $this->Html->link('<div id="btn-super-traqueur">Super Traqueur</div>', '/pages/supertracker', array('escape' => false)); ?>
</div>

<script>
  $(function() {
    $( "#accordeon" ).accordion();
  });
</script>