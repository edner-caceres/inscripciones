<div class="devoluciones index">
	<h2><?php echo __('Devoluciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('inscripcion_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_devolucion');?></th>
			<th><?php echo $this->Paginator->sort('motivo_devolucion');?></th>
			<th><?php echo $this->Paginator->sort('comprobante_devolucion');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($devoluciones as $devolucion): ?>
	<tr>
		<td><?php echo h($devolucion['Devolucion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($devolucion['Inscripcion']['fecha_inscripcion'], array('controller' => 'inscripciones', 'action' => 'view', $devolucion['Inscripcion']['id'])); ?>
		</td>
		<td><?php echo h($devolucion['Devolucion']['fecha_devolucion']); ?>&nbsp;</td>
		<td><?php echo h($devolucion['Devolucion']['motivo_devolucion']); ?>&nbsp;</td>
		<td><?php echo h($devolucion['Devolucion']['comprobante_devolucion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $devolucion['Devolucion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $devolucion['Devolucion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $devolucion['Devolucion']['id']), null, __('Are you sure you want to delete # %s?', $devolucion['Devolucion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Devolucion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
