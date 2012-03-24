<div class="gestiones view">
<h2><?php  echo __('Gestion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gestion['Gestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Gestion'); ?></dt>
		<dd>
			<?php echo h($gestion['Gestion']['nombre_gestion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Gestion'); ?></dt>
		<dd>
			<?php echo h($gestion['Gestion']['descripcion_gestion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gestion'), array('action' => 'edit', $gestion['Gestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gestion'), array('action' => 'delete', $gestion['Gestion']['id']), null, __('Are you sure you want to delete # %s?', $gestion['Gestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gestiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gestion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grupos');?></h3>
	<?php if (!empty($gestion['Grupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Gestion Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Nombre Grupo'); ?></th>
		<th><?php echo __('Hora Inicio'); ?></th>
		<th><?php echo __('Hora Fin'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gestion['Grupo'] as $grupo): ?>
		<tr>
			<td><?php echo $grupo['id'];?></td>
			<td><?php echo $grupo['curso_id'];?></td>
			<td><?php echo $grupo['gestion_id'];?></td>
			<td><?php echo $grupo['persona_id'];?></td>
			<td><?php echo $grupo['nombre_grupo'];?></td>
			<td><?php echo $grupo['hora_inicio'];?></td>
			<td><?php echo $grupo['hora_fin'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), null, __('Are you sure you want to delete # %s?', $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
