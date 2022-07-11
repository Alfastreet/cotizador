<div class="parts form">
<?php echo $this->Form->create('Part'); ?>
	<fieldset>
		<legend><?php echo __('Edit Part'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('spare_id');
		echo $this->Form->input('order_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Part.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Part.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Parts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Spares'), array('controller' => 'spares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spare'), array('controller' => 'spares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visit'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
	</ul>
</div>
