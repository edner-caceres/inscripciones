<div class="grupos form">
<?php echo $this->Form->create('Grupo');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Grupo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('gestion_id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('nombre_grupo');
		echo $this->Form->input('hora_inicio');
		echo $this->Form->input('hora_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grupo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grupo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('action' => 'index'));?></li>
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
