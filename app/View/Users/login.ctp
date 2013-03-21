<form action="/mapyramide/users/login" id="UserLoginForm" method="post" accept-charset="utf-8">

	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User'); ?>

<span> Connexion </span> 
<div id="bloc1">
    <label for="UserUsername"> Identifiant</label>
	<input type="text" name="data[User][username]" id="UserUsername" required="required"/> <br><br>
	
	<label for="UserPassword"> Mot de passe</label>
	<input type="password" name="data[User][password]" id="UserPassword" required="required"/> <br><br>

	<input type="submit" value="Me connecter" />
</div>
</form>


<!-- Div de connexion par défaut -->
<!-- <div class="users form">
	<fieldset>
		<legend><?php echo __('Please enter your username and password'); ?></legend>
		<?php 
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Login')); ?>
</div> -->