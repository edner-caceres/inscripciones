<div class="costos view">
<h2><?php  echo __('Costo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($costo['Costo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($costo['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $costo['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Costo'); ?></dt>
		<dd>
			<?php echo h($costo['Costo']['nombre_costo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Costo'); ?></dt>
		<dd>
			<?php echo h($costo['Costo']['valor_costo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Costo'), array('action' => 'edit', $costo['Costo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Costo'), array('action' => 'delete', $costo['Costo']['id']), null, __('Are you sure you want to delete # %s?', $costo['Costo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Costos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Costo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
