<div class="personas view">
<h2><?php  echo __('Persona');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ci'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['ci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sis'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['sis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enail'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['id']), null, __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Cuentas');?></h3>
	<?php if (!empty($persona['Cuenta'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Rol Id');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['rol_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Persona Id');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['persona_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Nombre De Usuario');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['nombre_de_usuario'];?>
&nbsp;</dd>
		<dt><?php echo __('Password');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['password'];?>
&nbsp;</dd>
		<dt><?php echo __('Fecha Inicio Validez');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['fecha_inicio_validez'];?>
&nbsp;</dd>
		<dt><?php echo __('Fecha Fin Validez');?></dt>
		<dd>
	<?php echo $persona['Cuenta']['fecha_fin_validez'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Cuenta'), array('controller' => 'cuentas', 'action' => 'edit', $persona['Cuenta']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Inscripciones');?></h3>
	<?php if (!empty($persona['Inscripcion'])):?>
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
		foreach ($persona['Inscripcion'] as $inscripcion): ?>
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
<div class="related">
	<h3><?php echo __('Related Grupos');?></h3>
	<?php if (!empty($persona['Grupo'])):?>
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
		foreach ($persona['Grupo'] as $grupo): ?>
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
