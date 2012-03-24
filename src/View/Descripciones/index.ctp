<div class="descripciones index">
	<h2><?php echo __('Descripciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_general');?></th>
			<th><?php echo $this->Paginator->sort('afiche');?></th>
			<th><?php echo $this->Paginator->sort('banner');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($descripciones as $descripcion): ?>
	<tr>
		<td><?php echo h($descripcion['Descripcion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($descripcion['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $descripcion['Curso']['id'])); ?>
		</td>
		<td><?php echo h($descripcion['Descripcion']['descripcion_general']); ?>&nbsp;</td>
		<td><?php echo h($descripcion['Descripcion']['afiche']); ?>&nbsp;</td>
		<td><?php echo h($descripcion['Descripcion']['banner']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $descripcion['Descripcion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $descripcion['Descripcion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $descripcion['Descripcion']['id']), null, __('Are you sure you want to delete # %s?', $descripcion['Descripcion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Descripcion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
