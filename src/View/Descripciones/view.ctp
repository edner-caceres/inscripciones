<div class="descripciones view">
<h2><?php  echo __('Descripcion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($descripcion['Descripcion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($descripcion['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $descripcion['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion General'); ?></dt>
		<dd>
			<?php echo h($descripcion['Descripcion']['descripcion_general']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Afiche'); ?></dt>
		<dd>
			<?php echo h($descripcion['Descripcion']['afiche']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banner'); ?></dt>
		<dd>
			<?php echo h($descripcion['Descripcion']['banner']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Descripcion'), array('action' => 'edit', $descripcion['Descripcion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Descripcion'), array('action' => 'delete', $descripcion['Descripcion']['id']), null, __('Are you sure you want to delete # %s?', $descripcion['Descripcion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Descripciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descripcion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
