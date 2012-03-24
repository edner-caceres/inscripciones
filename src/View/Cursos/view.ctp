<div class="cursos view">
<h2><?php  echo __('Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Del Curso'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['nombre_del_curso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo Del Curso'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['objetivo_del_curso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Auxiliares'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['costo_auxiliares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Estudiantes'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['costo_estudiantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Otros'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['costo_otros']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descripciones'), array('controller' => 'descripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descripcion'), array('controller' => 'descripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Descripciones');?></h3>
	<?php if (!empty($curso['Descripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Descripcion General'); ?></th>
		<th><?php echo __('Afiche'); ?></th>
		<th><?php echo __('Banner'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Descripcion'] as $descripcion): ?>
		<tr>
			<td><?php echo $descripcion['id'];?></td>
			<td><?php echo $descripcion['curso_id'];?></td>
			<td><?php echo $descripcion['descripcion_general'];?></td>
			<td><?php echo $descripcion['afiche'];?></td>
			<td><?php echo $descripcion['banner'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'descripciones', 'action' => 'view', $descripcion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'descripciones', 'action' => 'edit', $descripcion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'descripciones', 'action' => 'delete', $descripcion['id']), null, __('Are you sure you want to delete # %s?', $descripcion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Descripcion'), array('controller' => 'descripciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Inscripciones');?></h3>
	<?php if (!empty($curso['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cuenta Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Fecha Inscripcion'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id'];?></td>
			<td><?php echo $inscripcion['cuenta_id'];?></td>
			<td><?php echo $inscripcion['grupo_id'];?></td>
			<td><?php echo $inscripcion['persona_id'];?></td>
			<td><?php echo $inscripcion['fecha_inscripcion'];?></td>
			<td><?php echo $inscripcion['observaciones'];?></td>
			<td><?php echo $inscripcion['curso_id'];?></td>
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
	<?php if (!empty($curso['Grupo'])):?>
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
		foreach ($curso['Grupo'] as $grupo): ?>
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
<div class="related">
	<h3><?php echo __('Related Temas');?></h3>
	<?php if (!empty($curso['Tema'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Numero Tema'); ?></th>
		<th><?php echo __('Nombre Tema'); ?></th>
		<th><?php echo __('Descripcion Tema'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Tema'] as $tema): ?>
		<tr>
			<td><?php echo $tema['id'];?></td>
			<td><?php echo $tema['curso_id'];?></td>
			<td><?php echo $tema['numero_tema'];?></td>
			<td><?php echo $tema['nombre_tema'];?></td>
			<td><?php echo $tema['descripcion_tema'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'temas', 'action' => 'view', $tema['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'temas', 'action' => 'edit', $tema['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'temas', 'action' => 'delete', $tema['id']), null, __('Are you sure you want to delete # %s?', $tema['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
