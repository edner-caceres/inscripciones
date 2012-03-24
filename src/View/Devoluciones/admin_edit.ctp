<div class="devoluciones form">
<?php echo $this->Form->create('Devolucion');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Devolucion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('inscripcion_id');
		echo $this->Form->input('fecha_devolucion');
		echo $this->Form->input('motivo_devolucion');
		echo $this->Form->input('comprobante_devolucion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Devolucion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Devolucion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Devoluciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
