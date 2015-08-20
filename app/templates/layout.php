<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Wikébec Admin :: <?= $this->e($title) ?></h1>

			<a href="<?= $this->url('change_wotd') ?>" title="Modifier le mot du jour actuel">Nouveau mot du jour</a>
			<a href="<?= $this->url('register_administrator') ?>" title="Nouvel administrateur">Ajouter un nouvel administrateur</a>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>