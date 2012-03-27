<div class="cursos form">
<?php echo $this->Form->create('Curso');?>
	<fieldset>
		<legend><?php echo __('Edit Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_del_curso');
		echo $this->Form->input('objetivo_del_curso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Curso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Curso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Descripciones'), array('controller' => 'descripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descripcion'), array('controller' => 'descripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Costos'), array('controller' => 'costos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Costo'), array('controller' => 'costos', 'action' => 'add')); ?> </li>
	</ul>
</div>
