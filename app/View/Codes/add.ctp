<div class="codes form">
<?php echo $this->Form->create('Code'); ?>
	<fieldset>
		<legend><?php echo __('Add Code'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Codes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
