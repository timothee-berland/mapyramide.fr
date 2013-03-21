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
  <legend align="center" id='daj'>
    Derniers articles ajoutés
  </legend>
	Coucou
	<?php
	echo AuthComponent::user('id');
	?>
	coucou
</fieldset>


<!-- SLIDER -->				
<div id="home-slider" class="lof-slidecontent">
	
	<div class="preload"><div></div></div>
	
	<!-- slider content --> 
	<div class="main-slider-content" >
	<ul class="sliders-wrap-inner">
	    <li>
	          <img  src="/mapyramide/img/slider/slide-1.png" title="" alt="alt" />           
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <a class="link" href="#">Read more </a>
	            </p>
	         </div>
	    </li>
	    
	    <li>
	          <img  src="/mapyramide/img/slider/slide-2.png" title="" alt="alt" />           
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <a class="link" href="#">Read more </a>
	            </p>
	         </div>
	    </li>
	    
	    <li>
	          <img  src="/mapyramide/img/slider/slide-3.png" title="" alt="alt" />           
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <a class="link" href="#">Read more </a>
	            </p>
	         </div>
	    </li>
	    
	    <li>
	          <img  src="/mapyramide/img/slider/slide-4.png" title="" alt="alt" />           
	          <div class="slider-description">
	            <h4>Lorem ipsum dolor</h4>
	            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
	            <a class="link" href="#">Read more </a>
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
	           <li><img  src="/mapyramide/img/slider/slide-1_thumb.png" alt="alt" /></li>
	           <li><img  src="/mapyramide/img/slider/slide-2_thumb.png" alt="alt" /></li>
	           <li><img  src="/mapyramide/img/slider/slide-3_thumb.png" alt="alt" /></li>
	           <li><img  src="/mapyramide/img/slider/slide-4_thumb.png" alt="alt" /></li>
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
	<div id="btn-calcul-imc">Calculer mon IMC</div>

	<!-- Bouton Super Traqueur -->
	<div id="btn-super-traqueur">Super Traqueur</div>
</div>
