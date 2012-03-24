<div class="gestiones form">
<?php echo $this->Form->create('Gestion');?>
	<fieldset>
		<legend><?php echo __('Edit Gestion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_gestion');
		echo $this->Form->input('descripcion_gestion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Gestion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Gestion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Gestiones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
