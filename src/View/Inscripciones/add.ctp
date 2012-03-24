<div class="inscripciones form">
<?php echo $this->Form->create('Inscripcion');?>
	<fieldset>
		<legend><?php echo __('Add Inscripcion'); ?></legend>
	<?php
		echo $this->Form->input('cuenta_id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('fecha_inscripcion');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('curso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inscripciones'), array('action' => 'index'));?></li>
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
