<?php echo $this->Form->create('User'); ?>
	<div class="bloc-index">
		<p id="user"><?php echo $user['User']['username']; ?> (<?php echo $user['User']['role']; ?>) </p>
		<div id="bloc2">
			<input type="submit" value="Je confirme" onClick="return confirmation();"/>
		</div>
	</div>
</form>

<script type="text/javascript">
	function confirmation() {
		return(confirm("Êtes vous sûrs de vouloir supprimer votre compte ? (cette action est irréversible)"));
	}
</script>