<div class="inscripciones view">
<h2><?php  echo __('Inscripcion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscripcion['Inscripcion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuenta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Cuenta']['nombre_de_usuario'], array('controller' => 'cuentas', 'action' => 'view', $inscripcion['Cuenta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Grupo']['nombre_grupo'], array('controller' => 'grupos', 'action' => 'view', $inscripcion['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Persona']['ci'], array('controller' => 'personas', 'action' => 'view', $inscripcion['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inscripcion'); ?></dt>
		<dd>
			<?php echo h($inscripcion['Inscripcion']['fecha_inscripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($inscripcion['Inscripcion']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['Curso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscripcion'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscripcion'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Devoluciones');?></h3>
	<?php if (!empty($inscripcion['Devolucion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscripcion Id'); ?></th>
		<th><?php echo __('Fecha Devolucion'); ?></th>
		<th><?php echo __('Motivo Devolucion'); ?></th>
		<th><?php echo __('Comprobante Devolucion'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inscripcion['Devolucion'] as $devolucion): ?>
		<tr>
			<td><?php echo $devolucion['id'];?></td>
			<td><?php echo $devolucion['inscripcion_id'];?></td>
			<td><?php echo $devolucion['fecha_devolucion'];?></td>
			<td><?php echo $devolucion['motivo_devolucion'];?></td>
			<td><?php echo $devolucion['comprobante_devolucion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devoluciones', 'action' => 'view', $devolucion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devoluciones', 'action' => 'edit', $devolucion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devoluciones', 'action' => 'delete', $devolucion['id']), null, __('Are you sure you want to delete # %s?', $devolucion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Devolucion'), array('controller' => 'devoluciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
