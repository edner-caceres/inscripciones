<div class="gestiones index">
	<h2><?php echo __('Gestiones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_gestion');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_gestion');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($gestiones as $gestion): ?>
	<tr>
		<td><?php echo h($gestion['Gestion']['id']); ?>&nbsp;</td>
		<td><?php echo h($gestion['Gestion']['nombre_gestion']); ?>&nbsp;</td>
		<td><?php echo h($gestion['Gestion']['descripcion_gestion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gestion['Gestion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gestion['Gestion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gestion['Gestion']['id']), null, __('Are you sure you want to delete # %s?', $gestion['Gestion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Gestion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
