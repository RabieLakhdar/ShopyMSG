<div class="dataUsers view">
<h2><?php echo __('Data User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dataUser['DataUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataUser['User']['id'], array('controller' => 'users', 'action' => 'view', $dataUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AccesToken'); ?></dt>
		<dd>
			<?php echo h($dataUser['DataUser']['accesToken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ExpiresIn'); ?></dt>
		<dd>
			<?php echo h($dataUser['DataUser']['expiresIn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SignedRequest'); ?></dt>
		<dd>
			<?php echo h($dataUser['DataUser']['signedRequest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FbID'); ?></dt>
		<dd>
			<?php echo h($dataUser['DataUser']['fbID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dataUser['DataUser']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data User'), array('action' => 'edit', $dataUser['DataUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Data User'), array('action' => 'delete', $dataUser['DataUser']['id']), array(), __('Are you sure you want to delete # %s?', $dataUser['DataUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
