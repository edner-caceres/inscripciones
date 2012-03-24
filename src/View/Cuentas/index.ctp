<div class="cuentas index">
	<h2><?php echo __('Cuentas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('rol_id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_de_usuario');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_validez');?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin_validez');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cuentas as $cuenta): ?>
	<tr>
		<td><?php echo h($cuenta['Cuenta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cuenta['Rol']['nombre_rol'], array('controller' => 'roles', 'action' => 'view', $cuenta['Rol']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cuenta['Persona']['ci'], array('controller' => 'personas', 'action' => 'view', $cuenta['Persona']['id'])); ?>
		</td>
		<td><?php echo h($cuenta['Cuenta']['nombre_de_usuario']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['password']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['fecha_inicio_validez']); ?>&nbsp;</td>
		<td><?php echo h($cuenta['Cuenta']['fecha_fin_validez']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cuenta['Cuenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cuenta['Cuenta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cuenta['Cuenta']['id']), null, __('Are you sure you want to delete # %s?', $cuenta['Cuenta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cuenta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
