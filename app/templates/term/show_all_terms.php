<?php $this->layout('layout', ['title' => 'Tous les termes !']) ?>

<?php $this->start('main_content') ?>
	<h2>Tous les termes.</h2>

	<table>
	<?php foreach($terms as $term): ?>
	<tr>
	<td><?= $this->e($term['id']) ?></td>
	<td><?= $this->e($term['name']) ?></td>
	<td><?= $this->e($term['modifiedDate']) ?></td>
	<td><a href="<?php echo $this->url('delete', ["id" => $term['id']]) ?>">Effacer</a></td>
	</tr>
	<?php endforeach; ?> 
	</table>

	**Afficher les termes ici **
	
<?php $this->stop('main_content') ?>
