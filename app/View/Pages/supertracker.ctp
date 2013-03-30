<div id="presentation">
	<div id="image">
	</div>
	
    <div id="texte">
		<!-- Cette page est accessible à partir du menu situé en haut de page : Cliquez sur "Ressources" -> "Super Traqueur" -->
		<span1> SuperTracker </span1> 
		
		<p1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim
		ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim. 
		</p1>
	</div>

</div>
<div id="menus">
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page nommée "Encyclopédie". Cette dernière vous permet de comparer en termes de valeurs 
		 nutritionnelles deux aliments -->
    <div id="b1">
		<article class="bloc-menu">
			<h3> <?php echo $this->Html->link('Encyclopédie', '/aliments/index'); ?></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim</p>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigée vers la page nommée "Mon suivi alimentaire". Cette dernière vous permet d'établir une plannification
	     détaillée de votre alimentation -->
	<div id="b1">
		<article class="bloc-menu">
			<h3> <a href="#" onClick="nonImplemente();"> Mon suivi alimentaire </a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim</p>
		</article>
    </div>
	
	<!--En cliquant sur ce lien, vous êtes redirigé vers la page nommée "Mon suivi physique". Cette dernière vous permet d'étbir une plannification 
	    détaillée de votre activité physique (Cette fonctionnalité n'a pas encore été implémentée) -->
    <div id="b1">
		<article class="bloc-menu">
			<h3> <a href="#" onClick="nonImplemente();""> Mon suivi physique </a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim</p>
		</article>
    </div>

	<!-- En cliquant sur ce lien, vous êtes redigéré vers la page nommée "Mon gestionnaire de poids idéal". Cette dernière vous permet de définir le poids
	     idéal que vous devriez peser en fonction de votre taille & vous aide à gérer ce dernier (Cette fonctionnalité n'a pas encore été implémentée) -->
	<div id="b1">
		<article class="bloc-menu">
			<h3> <a href="#" onClick="nonImplemente();""> Mon gestionnaire de poids </a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim</p>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page nommée "Mes 5 objectifs". Cette dernière vous permet de définir clairement les 5 objectifs
	     que vous souhaitez atteindre. Les objectifs peuvent concerner tant l'activité physique que l'alimentation (Cette fonctionnalité n'a pas encore
		 été implémentée) -->
	<div id="b1">
		<article class="bloc-menu">
			<h3> <a href="#" onClick="nonImplemente();""> Mes 5 objectifs </a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim</p>
		</article>
    </div>
	
	<!-- En cliquant sur ce lien, vous êtes redirigé vers la page nommée "mes rapports d'évolution". Cette dernière vous permet de suivre au jour le jour,
	     l'évolution de votre alimentation & de votre activité physique (Cette fonctionnalité n'a pas encore été implémentée) -->
	<div id="b1">
		<article class="bloc-menu">
			<h3> <a href="#" onClick="nonImplemente();""> Mes rapports d'évolution </a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum turpis elit, viverra vitae tempus ac, interdum eu enim</p>
		</article>
    </div>
</div>

<script type="text/javascript">
function nonImplemente() {
    alert('Cette fonctionnalité n\'est pas encore disponible.');
}
</script>