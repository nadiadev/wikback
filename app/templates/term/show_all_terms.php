<?php $this->layout('layout', ['title' => 'Tous les termes !']) ?>

<?php $this->start('main_content') ?>
	<h2>Tous les termes.</h2>

	<table>
	<?php foreach($terms as $term): ?>
	<tr <?php if ($term['is_wotd']) echo 'class="wotd"'; ?>>
	<td><?= $this->e($term['id']) ?></td>
	<td><?= $this->e($term['name']) ?></td>
	<td><?= $this->e($term['modifiedDate']) ?></td>
	<td>
		<a href="<?php echo $this->url('delete', ["id" => $term['id']]) ?>"><i class="fa fa-trash-o"></i>Effacer</a>
		<a href="<?php echo $this->url('edit_term', ["id" => $term['id']]) ?>"><i class="fa fa-pencil"></i>Modifier ce term</a>
		<a href="<?php echo $this->url('change_wotd', ["id" => $term['id']]) ?>"><i class="fa fa-star"></i>Choisir ce terme comme MDJ</a></td>
	</tr>
	<?php endforeach; ?> 
	</table>

	**Afficher les termes ici **
	
<?php $this->stop('main_content') ?>
