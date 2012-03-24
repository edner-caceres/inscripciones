<div class="devoluciones view">
<h2><?php  echo __('Devolucion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($devolucion['Devolucion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inscripcion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($devolucion['Inscripcion']['fecha_inscripcion'], array('controller' => 'inscripciones', 'action' => 'view', $devolucion['Inscripcion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Devolucion'); ?></dt>
		<dd>
			<?php echo h($devolucion['Devolucion']['fecha_devolucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo Devolucion'); ?></dt>
		<dd>
			<?php echo h($devolucion['Devolucion']['motivo_devolucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comprobante Devolucion'); ?></dt>
		<dd>
			<?php echo h($devolucion['Devolucion']['comprobante_devolucion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Devolucion'), array('action' => 'edit', $devolucion['Devolucion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Devolucion'), array('action' => 'delete', $devolucion['Devolucion']['id']), null, __('Are you sure you want to delete # %s?', $devolucion['Devolucion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devoluciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devolucion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
