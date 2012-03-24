<div class="personas form">
<?php echo $this->Form->create('Persona');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ci');
		echo $this->Form->input('sis');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
