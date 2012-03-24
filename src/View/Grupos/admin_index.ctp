<div class="grupos index">
	<h2><?php echo __('Grupos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('gestion_id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_grupo');?></th>
			<th><?php echo $this->Paginator->sort('hora_inicio');?></th>
			<th><?php echo $this->Paginator->sort('hora_fin');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($grupos as $grupo): ?>
	<tr>
		<td><?php echo h($grupo['Grupo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grupo['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $grupo['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($grupo['Gestion']['nombre_gestion'], array('controller' => 'gestiones', 'action' => 'view', $grupo['Gestion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($grupo['Persona']['ci'], array('controller' => 'personas', 'action' => 'view', $grupo['Persona']['id'])); ?>
		</td>
		<td><?php echo h($grupo['Grupo']['nombre_grupo']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['hora_inicio']); ?>&nbsp;</td>
		<td><?php echo h($grupo['Grupo']['hora_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupo['Grupo']['id']), null, __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grupo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gestiones'), array('controller' => 'gestiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gestion'), array('controller' => 'gestiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
