<?php if (isset($users) && count($users) > 1):
 foreach ($users as $user) : ?>
	<div class="bloc-index">
		<p id="user"><?php echo $user['User']['username']; ?> : <?php echo $user['User']['role']; ?> </p>

		<div class="btns-index">
			<!-- Bouton modifications -->
			<?php echo $this->Html->link('<div class="btn-modifier">Modifier</div>', '/users/edit/' . $user['User']['id'], array('escape' => false)); ?>

			<!-- Bouton suppression -->
			<?php echo $this->Html->link('<div class="btn-supprimer">Supprimer</div>', '/users/delete/' . $user['User']['id'], array('escape' => false)); ?>
		</div>
	</div>
<?php endforeach; ?>

<?php elseif (isset($users)) : ?>

	<div class="bloc-index">
		<p id="user">Compte : <?php echo $users['User']['username']; ?> &nbsp&nbsp&nbsp&nbsp (statut : <?php echo $users['User']['role']; ?>)</p>

		<div class="btns-index">
			<!-- Bouton modifications -->
			<?php echo $this->Html->link('<div class="btn-modifier">Modifier</div>', '/users/edit/' . $users['User']['id'], array('escape' => false)); ?>

			<!-- Bouton suppression -->
			<?php echo $this->Html->link('<div class="btn-supprimer">Supprimer</div>', '/users/delete/' . $users['User']['id'], array('escape' => false)); ?>
		</div>
	</div>
<?php endif; ?>
