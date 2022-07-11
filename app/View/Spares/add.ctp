<div class="spares form">
<?php echo $this->Form->create('Spare'); ?>
	<fieldset>
		<legend><?php echo __('Add Spare'); ?></legend>
	<?php
		echo $this->Form->input('tech');
		echo $this->Form->input('code');
		echo $this->Form->input('reference');
		echo $this->Form->input('serial');
		echo $this->Form->input('value');
		echo $this->Form->input('model');
		echo $this->Form->input('modifed');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Spares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
