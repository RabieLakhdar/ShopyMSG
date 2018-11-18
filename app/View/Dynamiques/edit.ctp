<div class="dynamiques form">
<?php echo $this->Form->create('Dynamique'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dynamique'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titile');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dynamique.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Dynamique.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dynamiques'), array('action' => 'index')); ?></li>
	</ul>
</div>
