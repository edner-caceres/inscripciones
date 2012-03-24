<div class="cuentas view">
<h2><?php  echo __('Cuenta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuenta['Rol']['nombre_rol'], array('controller' => 'roles', 'action' => 'view', $cuenta['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuenta['Persona']['ci'], array('controller' => 'personas', 'action' => 'view', $cuenta['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre De Usuario'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['nombre_de_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Validez'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['fecha_inicio_validez']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin Validez'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['fecha_fin_validez']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuenta'), array('action' => 'edit', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuenta'), array('action' => 'delete', $cuenta['Cuenta']['id']), null, __('Are you sure you want to delete # %s?', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscripciones');?></h3>
	<?php if (!empty($cuenta['Inscripcion'])):?>
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
		foreach ($cuenta['Inscripcion'] as $inscripcion): ?>
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
