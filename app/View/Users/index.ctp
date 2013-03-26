<?php if (isset($users)):
 foreach ($users as $user) : ?>
	<div id="bloc-index">
		<p id="user"><?php echo $user['User']['username']; ?> : <?php echo $user['User']['role']; ?> </p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<a href="users/edit/<?php echo $user['User']['id']; ?>"><div id="btn-modifier">Modifier</div></a>

			<!-- Bouton suppression -->
			<a href="users/delete/<?php echo $user['User']['id'];?>" onClick="return(confirmation())"><div id="btn-supprimer">Supprimer</div></a>
		</div>
	</div>
<?php endforeach; endif;?>

<script type="text/javascript">
function confirmation() {
	return(confirm("Êtes vous sûrs de vouloir supprimer cet utilisateur ?"));
}
</script>