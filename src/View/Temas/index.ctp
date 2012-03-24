<div class="temas index">
	<h2><?php echo __('Temas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_tema');?></th>
			<th><?php echo $this->Paginator->sort('nombre_tema');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_tema');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($temas as $tema): ?>
	<tr>
		<td><?php echo h($tema['Tema']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tema['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $tema['Curso']['id'])); ?>
		</td>
		<td><?php echo h($tema['Tema']['numero_tema']); ?>&nbsp;</td>
		<td><?php echo h($tema['Tema']['nombre_tema']); ?>&nbsp;</td>
		<td><?php echo h($tema['Tema']['descripcion_tema']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tema['Tema']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tema['Tema']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tema['Tema']['id']), null, __('Are you sure you want to delete # %s?', $tema['Tema']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tema'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
