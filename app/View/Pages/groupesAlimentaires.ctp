<div id="presentation">
	<div id="image">
	</div>
    <div class="texte">
		<!-- Cette page est accessible depuis le menu situé en haut de page : Cliquez sur "Mon assiette" -->
		<span3> Groupes alimentaires </span3> 
	</div>
	<div class="texte">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p> 			
	</div>
</div>

<div id="menus">
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page contenant la description des fruits ainsi qu'une liste non exhaustive de ces derniers -->
    <div class="b1">
		<article id="fruits" class="bloc-menu">
			<h3> Fruits </h3>
			<a href="fruits" ><p><?php echo $this->Html->image('Fruits.png', array('height' => '180', 'width' => '250', 'alt' => 'Fruits')); ?></p></a>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page contenant la description des légumes ainsi qu'une liste non exhaustive de ces derniers -->
	<div class="b1">
		<article id="legumes" class="bloc-menu">
			<h3> Légumes </h3>
			<a href="legumes" ><p><?php echo $this->Html->image('Légumes.jpg', array('height' => '180', 'width' => '250', 'alt' => 'Légumes')); ?></p></a>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page contenant la description des céréeales ainsi qu'une liste non exhaustive de ces dernières -->
    <div class="b1">
		<article id="cereales" class="bloc-menu">
			<h3> Céréales </h3>
			<a href="cereales" ><p><?php echo $this->Html->image('Céréales.jpg', array('height' => '180', 'width' => '250', 'alt' => 'Céréales')); ?></p></a>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page contenant la description des eliments protéinés ainsi qu'une liste non exhaustive
		de ces derniers -->	    
	<div class="b1">
		<article id="proteines" class="bloc-menu">
			<h3> Produits protéinés </h3>
			<a href="proteines" ><p><?php echo $this->Html->image('AlimentsProtéinés.jpg', array('height' => '180', 'width' => '250', 'alt' => 'AlimentsProtéinés')); ?></p></a>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page contenant la description des produits laitiers ainsi qu'une liste non exhaustive
		de ces derniers -->
	<div class="b1">
		<article id="produitsLaitiers" class="bloc-menu">
			<h3> Produits laitiers </h3>
			<a href="produitslaitiers" ><p><?php echo $this->Html->image('ProduitsLaitiers.jpg', array('height' => '180', 'width' => '250', 'alt' => 'ProduitsLaitiers')); ?></p></a>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page contenant la description des matières grasses ainsi qu'une liste non exhaustive
		de ces derniers -->
	<div class="b1">
		<article matieresGrasses class="bloc-menu">
			<h3> Matières grasses </h3>
			<a href="matieresgrasses" ><p><?php echo $this->Html->image('Huiles.jpg', array('height' => '180', 'width' => '250', 'alt' => 'MatieresGrasses')); ?></p></a>
		</article>
    </div>
</div>