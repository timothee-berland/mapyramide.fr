<div id="presentation">
	<div id="image">
	</div>
    <div id="texte0">
		<!-- Cette page est accessible depuis le menu situé en haut de page : Cliquez sur "Mon assiette" -> "Fruits" -->
		<span> Fruits </span> 
	</div>
	<div id="texte">
		<h1> Quantité quotidienne conseillée </h1>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
	ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p> 
	</div>
	
	<div id="texte0">
		<table>
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de fruits </h1>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
					</p>
				</td>
				
				<td>
					<br/><br/><br/>
					<!--  Image illustrant le paragraphe "Equivalence pour une coupe de fruits -->
					<p><?php echo $this->Html->image('Fruits.png', array('height' => '200px', 'width' => '260px', 'alt' => 'Fruits')); ?></p>
				</td>
			</tr>
		</table>
	
	</div>

	<div id="texte">
	<h1>  Conseils de consommation </h1>
	</div>
	
	<div id="bloc3">
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p>
	</div>
	
	<div id="texte1">
		<table width=145%;  >
			<tr>
				<td>
					<table width=300%; >
						<tr>
							<td>
								<ul>
									<!-- Liste des fruits : affichage des images des différents fruits à l'aide de zoombox -->
									<!-- #TODO : foreach -->
									<?php
									echo $this->Html->link('<li> Abricot </li>', '../img/Abricot.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Abricot', 'escape' => false));
									echo $this->Html->link('<li> Banane </li>', '../img/Banane.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Banane', 'escape' => false));
									echo $this->Html->link('<li> Cerise </li>', '../img/Cerise.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Cerise', 'escape' => false));
									echo $this->Html->link('<li> Mangue </li>', '../img/Mangue.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Mangue', 'escape' => false));
									echo $this->Html->link('<li> Melon </li>', '../img/Melon.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Melon', 'escape' => false));
									echo $this->Html->link('<li> Papaye </li>', '../img/Papaye.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Papaye', 'escape' => false));
									?>
								</ul>
							</td>
					
							<td style="padding-left: 50px ">
								<ul>
									<li> Poire </li>
									<li> Pomme </li>
									<li> Raisin </li>
									<li> Kiwi </li>
								</ul>
							</td>
						</tr>
					</table>
					
					<td style="padding-right : 130px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
				
					<!-- Informations sur les fruits mixés -->
					<div id="bloc4">
					<p>Fruits mixés <br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac </p>
					</div>
					<br/> 
					
					<!-- Informations sur les jus de fruits -->
					<div id="bloc4">
					<p>Jus de Fruits <br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<!--Script permettant l'affichage des images à l'aide de zoombox -->
<?php echo $this->Html->script('zoombox/zoombox.js'); ?>
<?php echo $this->Html->css('/js/zoombox/zoombox.css'); ?>

<script type="text/javascript">
    jQuery(function($){
        $('a.zoombox').zoombox();

        /**
        * Or You can also use specific options
        $('a.zoombox').zoombox({
            theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
            opacity     : 0.8,              // Black overlay opacity
            duration    : 800,              // Animation duration
            animation   : true,             // Do we have to animate the box ?
            width       : 500,              // Default width
            height      : 500,              // Default height
            gallery     : true,             // Allow gallery thumb view
            autoplay : false                // Autoplay for video
        });
        */
    });
    </script>
<script type="text/javascript">
//<![CDATA[
    $(function(){
        $('a.zoombox').zoombox();
    });
//]]>
</script>


