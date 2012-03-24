<div class="inscripciones index">
	<h2><?php echo __('Inscripciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('cuenta_id');?></th>
			<th><?php echo $this->Paginator->sort('grupo_id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inscripcion');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($inscripciones as $inscripcion): ?>
	<tr>
		<td><?php echo h($inscripcion['Inscripcion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Cuenta']['nombre_de_usuario'], array('controller' => 'cuentas', 'action' => 'view', $inscripcion['Cuenta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Grupo']['nombre_grupo'], array('controller' => 'grupos', 'action' => 'view', $inscripcion['Grupo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Persona']['ci'], array('controller' => 'personas', 'action' => 'view', $inscripcion['Persona']['id'])); ?>
		</td>
		<td><?php echo h($inscripcion['Inscripcion']['fecha_inscripcion']); ?>&nbsp;</td>
		<td><?php echo h($inscripcion['Inscripcion']['observaciones']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['Curso']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscripcion['Inscripcion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devoluciones'), array('controller' => 'devoluciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolucion'), array('controller' => 'devoluciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
