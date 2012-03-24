<div class="temas form">
<?php echo $this->Form->create('Tema');?>
	<fieldset>
		<legend><?php echo __('Add Tema'); ?></legend>
	<?php
		echo $this->Form->input('curso_id');
		echo $this->Form->input('numero_tema');
		echo $this->Form->input('nombre_tema');
		echo $this->Form->input('descripcion_tema');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Temas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
