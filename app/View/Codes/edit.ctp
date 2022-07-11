<div class="codes form">
<?php echo $this->Form->create('Code'); ?>
	<fieldset>
		<legend><?php echo __('Edit Code'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('codeservice');
		echo $this->Form->input('description');
		echo $this->Form->input('category');
		echo $this->Form->input('service_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Code.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Code.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Codes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
