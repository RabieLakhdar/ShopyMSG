<div class="dataUsers form">
<?php echo $this->Form->create('DataUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Data User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('accesToken');
		echo $this->Form->input('expiresIn');
		echo $this->Form->input('signedRequest');
		echo $this->Form->input('fbID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DataUser.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DataUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Data Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
