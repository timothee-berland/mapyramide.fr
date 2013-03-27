<div id="presentation">
	<div id="image">
	</div>
	<div id="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de la page : Cliquez sur "Mon assiette" -> Légumes -->
		<span1> Légumes </span1> 
		<br/>
		<h1> Quantité quotidienne conseillée </h1>
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1> 
		<br/>
	</div> 
	
	<div id="texte4">
		<table>
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de légumes </h1>
					<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
					</p1>
				</td>
				
				<td>
					<br/><br/>
					<!-- Image illustrant le paragraphe n°2 -->
					<p1><?php echo $this->Html->image('Fruits.png', array('height' => '200px', 'width' => '260px', 'alt' => 'Fruits')); ?></p1>
				</td>
			</tr>
		</table>
	
	<div id="texte6">
		<h1>  Conseils de consommation </h1> <br />
		<p1> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
			ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1>
	</div>
	
	<div id="texte1">
		<table width=145%;>
			<tr>
				<td style="padding-right:40px;"></td>
				<td><h3> Légumes verts </h3> </td>
				<td style="padding-right:30px;"></td>
				<td><h3> Légumes féculents </h3></td>
				<td style="padding-right:20px;"></td>
				<td><h3> Autres légumes </h3></td>
			</tr>
		</table>
		
		<table width=145%;>
			<tr>
				<td>
					<table width=200%; >
						<tr>
							<!-- Légumes verts -->
							<td>
								<br/> <br/><ul><li> Brocoli </li>
								<li> Chou vert </li>
								<li> Chou frisé </li>
								<li> Cresson </li>
							</td>
					
							<td style="padding-left: 50px ">
								<br/>
								<ul>
									<?php
									echo $this->Html->link('<li> Epinards </li>', '../img/Epinards.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Epinards', 'escape' => false));
									?>
									<li> Laitue </li>
									<li> Mesclun </li>	
								</ul>
							</td>
						</tr>
					</table>
					
					<td style="padding-right : 100px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
					<table width=200%; >
						<tr>
							<td style="padding-left : 10px">
							</td>
							
							<!-- Légumes féculents -->
							<td>
								<ul>
									<?php
										echo $this->Html->link('<li> Châtaigne </li>', '../img/Châtaigne.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Châtaigne', 'escape' => false));
										echo("<li> Maïs </li>");
										echo("<li> Manioc </li>");
									?>
								</ul>
							</td>
					
							<td style="padding-left: 50px ">
							
								<ul>
								   <?php 
									echo ("<li> Petit pois </li>");
									echo $this->Html->link('<li> Pommes de terre </li>', '../img/Pommes de terre.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Pommes de terre', 'escape' => false)); ?>
								
								</ul>
							</td>
						</tr>
					</table>
					
					<td style="padding-right : 100px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
					<table width=200%; >
						<tr>
							<td style="padding-left : 10px">
							</td>
							
							<!-- Autres légumes -->
							<td>
								<ul>
									<?php
										echo("<br/> <br/><li> Artichaut </li>");
										echo("<li> Asperge </li>");
										echo("<li> Avocat </li>");
									?>
									<li> Betterave </li>
									<li> Chou </li>
									<li> Chou-fleur </li>
								</ul>
							</td>
					
							<td style="padding-left: 50px ">
								<ul>
									<br/><br/>
									<li> Céleri </li>
									<li> Champignon </li>
									<li> Concombre </li>
									<li> Courgette </li>
									<?php echo $this->Html->link('<li> Oignon </li>', '../img/Oignon.jpg', array('class' => 'zoombox zgallery1', 'alt' => 'Oignon', 'escape' => false)); ?>
									<li> Navet </li>
								</ul>
							</td>
						</tr>
					</table>
					
					<td style="padding-right : 130px">
					</td>
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

