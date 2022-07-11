<div class="supports form">
<?php echo $this->Form->create('Support'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Support'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
		echo $this->Form->input('order_id');
		echo $this->Form->input('time');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Support.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Support.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Supports'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
