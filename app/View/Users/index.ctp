<?php if (isset($users) && count($users) > 1):
 foreach ($users as $user) : ?>
	<div class="bloc-index">
		<p id="user"><?php echo $user['User']['username']; ?> : <?php echo $user['User']['role']; ?> </p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<a href="users/edit/<?php echo $user['User']['id']; ?>"><div id="btn-modifier">Modifier</div></a>

			<!-- Bouton suppression -->
			<a href="users/delete/<?php echo $user['User']['id'];?>" onClick="return(confirmation())"><div id="btn-supprimer">Supprimer</div></a>
		</div>
	</div>
<?php endforeach; ?>

	<script type="text/javascript">
		function confirmation() {
			return(confirm("Êtes vous sûrs de vouloir supprimer cet utilisateur ?"));
		}
	</script>

<?php else : ?>

	<div class="bloc-index">
		<p id="user"><?php echo $users['User']['username']; ?> : <?php echo $users['User']['role']; ?> </p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<a href="users/edit/<?php echo $users['User']['id']; ?>"><div id="btn-modifier">Modifier</div></a>

			<!-- Bouton suppression -->
			<a href="users/delete/<?php echo $users['User']['id'];?>"><div id="btn-supprimer">Supprimer</div></a>
		</div>
	</div>
<?php endif; ?>
