<?php $this->layout('layout', ['title' => 'Inscription d\'un nouvel admin !']) ?>

<?php $this->start('main_content') ?>
	<h2>Ajouter un administrateur</h2>

	<p>Veuillez renseigner ci-dessous les informations de connexion du nouvel administrateur.</p>

	<form method="POST">
		<label for="username">Pseudo</label>
		<input type="text" id="username" name="username" value="" />

		<label for="email">Email</label>
		<input type="email" id="email" name="email" value="" />

		<label for="password">Mot de passe</label>
		<input type="password" id="password" name="password" value="" />

		<label for="password_confirm">Confirmez votre mot de passe</label>
		<input type="password" id="password_confirm" name="password_confirm" value="" />

		<input type="submit" value="Go" />
	</form>
	
<?php $this->stop('main_content') ?>