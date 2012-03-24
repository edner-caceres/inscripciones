<div class="temas view">
<h2><?php  echo __('Tema');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tema['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $tema['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Tema'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['numero_tema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Tema'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['nombre_tema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Tema'); ?></dt>
		<dd>
			<?php echo h($tema['Tema']['descripcion_tema']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tema'), array('action' => 'edit', $tema['Tema']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tema'), array('action' => 'delete', $tema['Tema']['id']), null, __('Are you sure you want to delete # %s?', $tema['Tema']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
