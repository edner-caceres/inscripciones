<div class="gestiones form">
<?php echo $this->Form->create('Gestion');?>
	<fieldset>
		<legend><?php echo __('Add Gestion'); ?></legend>
	<?php
		echo $this->Form->input('nombre_gestion');
		echo $this->Form->input('descripcion_gestion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gestiones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
