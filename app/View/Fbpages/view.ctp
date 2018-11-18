<div class="fbpages view">
<h2><?php echo __('Fbpage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fbpage['Fbpage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fbpage['User']['id'], array('controller' => 'users', 'action' => 'view', $fbpage['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pageid'); ?></dt>
		<dd>
			<?php echo h($fbpage['Fbpage']['pageid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagename'); ?></dt>
		<dd>
			<?php echo h($fbpage['Fbpage']['pagename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fbpage['Fbpage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fbpage'), array('action' => 'edit', $fbpage['Fbpage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fbpage'), array('action' => 'delete', $fbpage['Fbpage']['id']), array(), __('Are you sure you want to delete # %s?', $fbpage['Fbpage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fbpages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fbpage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
