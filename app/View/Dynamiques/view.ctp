<div class="dynamiques view">
<h2><?php echo __('Dynamique'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dynamique['Dynamique']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titile'); ?></dt>
		<dd>
			<?php echo h($dynamique['Dynamique']['titile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dynamique['Dynamique']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dynamique['Dynamique']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dynamique'), array('action' => 'edit', $dynamique['Dynamique']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dynamique'), array('action' => 'delete', $dynamique['Dynamique']['id']), array(), __('Are you sure you want to delete # %s?', $dynamique['Dynamique']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dynamiques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dynamique'), array('action' => 'add')); ?> </li>
	</ul>
</div>
