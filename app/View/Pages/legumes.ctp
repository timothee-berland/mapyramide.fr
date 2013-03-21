<div id="presentation">
	<div id="image">
	</div>
	<div id="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de la page : Cliquez sur "Mon assiette" -> Légumes -->
		<span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
		<span></span><span></span><span></span> Légumes </span> 
		<br/><br/><br/><br/><br/><br/>
		
		<h1> Quantité quotidienne conseillée </h1>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, 
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p> 
		<br/><br/><br/><br/><br/><br/>
	</div> 
	
	<div id="texte">
		<table  width=145%; >
			<tr>
				<td >
					<!-- class = "images"-->
					<h1>  Equivalence pour une coupe de légumes </h1>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae,
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
					ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
					</p>
				</td>
				
				<td>
					<br/><br/><br/>
					<!-- Image illustrant le paragraphe n°2 -->
					<p><img height="200px" width="260px" src="../img/Fruits.png" alt="Fruits"/></p>
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
		<table width=145%;>
			<tr>
				<td style="padding-right:50px;"></td>
				<td><b> Légumes verts </b> </td>
				<td style="padding-right:110px;"></td>
				<td><b> Légumes féculents </b></td>
				<td style="padding-right:100px;"></td>
				<td><b> Autres légumes </b></td>
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
					
							<td style="padding-left: 20px ">
								<br/>
								<?php
								echo("<A class='zoombox zgallery1' href='../img/epinards.jpg'  ><ul><li> Epinards </li></A>");
								?>
								<li> Laitue </li>
								<li> Mesclun </li>	
							</ul>
							</td>
						</tr>
					</table>
					
					<td style="padding-right : 130px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
					<table width=200%; >
						<tr>
							<td style="padding-left : 10px">
							</td>
							
							<!-- Légumes féculents -->
							<td>
								<?php
									echo("<A class='zoombox zgallery2' href='../img/chataigne.jpg'  ><ul><li> Châtaigne </li></A>");
									echo("<li> Maïs </li>");
									echo("<li> Manioc </li>");
								?>
							</td>
					
							<td style="padding-left: 20px ">
							<br/>
								<li> Petit pois </li>
								<?php
								echo("<A class='zoombox zgallery2' href='../img/pommesDeTerre.jpg'  ><ul><li> Pommes de terre </li></ul></A>");
								?>	
							</td>
						</tr>
					</table>
					
					<td style="padding-right : 130px">
					</td>
				</td>
				
				<td style="padding-left: 0px ; border-left: medium solid #4D2B08" >
					<table width=200%; >
						<tr>
							<td style="padding-left : 10px">
							</td>
							
							<!-- Autres légumes -->
							<td>
								<?php
									echo("<br/> <br/><li> Artichaut </li>");
									echo("<li> Asperge </li>");
									echo("<li> Avocat </li>");
								?>
								<li> Betterave </li>
								<li> Chou </li>
								<li> Chou-fleur </li>
							</td>
					
							<td style="padding-left: 20px ">
								<br/><br/>
								<li> Céleri </li>
								<li> Champignon </li>
								<li> Concombre </li>
								<li> Courgette </li>
								<?php
									echo("<A class='zoombox zgallery3' href='../img/oignon.jpg'  ><ul><li> Oignon </li></A>");
								?>
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
<script type="text/javascript" src="../js/zoombox/zoombox.js"></script>
<link href="../js/zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />

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

