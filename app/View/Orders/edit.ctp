<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('coment');
		echo $this->Form->input('diagnostic');
		echo $this->Form->input('approved');
		echo $this->Form->input('expense');
		echo $this->Form->input('priority');
		echo $this->Form->input('bank');
		echo $this->Form->input('autcode');
		echo $this->Form->input('helisa');
		echo $this->Form->input('machine_id');
		echo $this->Form->input('part_id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('spending_id');
		echo $this->Form->input('casino_id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('owner_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Order.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Machines'), array('controller' => 'machines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Machine'), array('controller' => 'machines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spendings'), array('controller' => 'spendings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spending'), array('controller' => 'spendings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casinos'), array('controller' => 'casinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casino'), array('controller' => 'casinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agendas'), array('controller' => 'agendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agenda'), array('controller' => 'agendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Supports'), array('controller' => 'supports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Support'), array('controller' => 'supports', 'action' => 'add')); ?> </li>
	</ul>
</div>
