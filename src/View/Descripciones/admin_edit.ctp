<div class="descripciones form">
<?php echo $this->Form->create('Descripcion');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Descripcion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('descripcion_general');
		echo $this->Form->input('afiche');
		echo $this->Form->input('banner');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Descripcion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Descripcion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Descripciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
