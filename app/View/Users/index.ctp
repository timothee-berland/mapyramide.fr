<?php if (isset($users) && count($users) > 1):
 foreach ($users as $user) : ?>
	<div class="bloc-index">
		<p id="user"><?php echo $user['User']['username']; ?> : <?php echo $user['User']['role']; ?> </p>

		<div id="btns-index">
			<!-- Bouton modifications -->
			<a href="users/edit/<?php echo $user['User']['id']; ?>"><div class="btn-modifier"> Modifier </div></a>

			<!-- Bouton suppression -->
			<a href="users/delete/<?php echo $user['User']['id'];?>"><div class="btn-supprimer"> Supprimer </div></a>
		</div>
	</div>
<?php endforeach; ?>

<?php elseif (isset($users)) : ?>

	<div class="bloc-index">
		<p1 id="user">Compte : <?php echo $users['User']['username']; ?> &nbsp&nbsp&nbsp&nbsp (statut : <?php echo $users['User']['role']; ?>) </p1>

		<div id="btns-index2">
			<!-- Bouton modifications -->
			<a href="users/edit/<?php echo $users['User']['id']; ?>"><div class="btn-modifier"> Modifier </div></a>

			<!-- Bouton suppression -->
			<a href="users/delete/<?php echo $users['User']['id'];?>"><div class="btn-supprimer"> Supprimer </div></a>
		</div>
	</div>
<?php endif; ?>
