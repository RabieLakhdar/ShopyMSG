<div class="cards index">
	<h2><?php echo __('Cards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('card_name'); ?></th>
			<th><?php echo $this->Paginator->sort('ccv'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cards as $card): ?>
	<tr>
		<td><?php echo h($card['Card']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['User']['id'], array('controller' => 'users', 'action' => 'view', $card['User']['id'])); ?>
		</td>
		<td><?php echo h($card['Card']['number']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['date']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['card_name']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['ccv']); ?>&nbsp;</td>
		<td><?php echo h($card['Card']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $card['Card']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $card['Card']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $card['Card']['id']), array(), __('Are you sure you want to delete # %s?', $card['Card']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Card'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
