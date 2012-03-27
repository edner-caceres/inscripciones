<div class="costos form">
<?php echo $this->Form->create('Costo');?>
	<fieldset>
		<legend><?php echo __('Add Costo'); ?></legend>
	<?php
		echo $this->Form->input('curso_id');
		echo $this->Form->input('nombre_costo');
		echo $this->Form->input('valor_costo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Costos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
