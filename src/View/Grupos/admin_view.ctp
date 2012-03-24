<div class="grupos view">
<h2><?php  echo __('Grupo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupo['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $grupo['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupo['Gestion']['nombre_gestion'], array('controller' => 'gestiones', 'action' => 'view', $grupo['Gestion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grupo['Persona']['ci'], array('controller' => 'personas', 'action' => 'view', $grupo['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Grupo'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['nombre_grupo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicio'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['hora_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Fin'); ?></dt>
		<dd>
			<?php echo h($grupo['Grupo']['hora_fin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo'), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupo'), array('action' => 'delete', $grupo['Grupo']['id']), null, __('Are you sure you want to delete # %s?', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Inscripciones');?></h3>
	<?php if (!empty($grupo['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cuenta Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Fecha Inscripcion'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id'];?></td>
			<td><?php echo $inscripcion['cuenta_id'];?></td>
			<td><?php echo $inscripcion['grupo_id'];?></td>
			<td><?php echo $inscripcion['persona_id'];?></td>
			<td><?php echo $inscripcion['fecha_inscripcion'];?></td>
			<td><?php echo $inscripcion['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscripciones', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscripciones', 'action' => 'edit', $inscripcion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscripciones', 'action' => 'delete', $inscripcion['id']), null, __('Are you sure you want to delete # %s?', $inscripcion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
