<div class="firststeps view">
<h2><?php echo __('Firststep'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($firststep['Firststep']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($firststep['User']['id'], array('controller' => 'users', 'action' => 'view', $firststep['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statut'); ?></dt>
		<dd>
			<?php echo h($firststep['Firststep']['statut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($firststep['Firststep']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Firststep'), array('action' => 'edit', $firststep['Firststep']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Firststep'), array('action' => 'delete', $firststep['Firststep']['id']), array(), __('Are you sure you want to delete # %s?', $firststep['Firststep']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Firststeps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Firststep'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
