<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('coment'); ?></th>
			<th><?php echo $this->Paginator->sort('diagnostic'); ?></th>
			<th><?php echo $this->Paginator->sort('approved'); ?></th>
			<th><?php echo $this->Paginator->sort('expense'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('bank'); ?></th>
			<th><?php echo $this->Paginator->sort('autcode'); ?></th>
			<th><?php echo $this->Paginator->sort('helisa'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_id'); ?></th>
			<th><?php echo $this->Paginator->sort('part_id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('spending_id'); ?></th>
			<th><?php echo $this->Paginator->sort('casino_id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['coment']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['diagnostic']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['approved']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['expense']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['priority']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['bank']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['autcode']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['helisa']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Machine']['name'], array('controller' => 'machines', 'action' => 'view', $order['Machine']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Part']['id'], array('controller' => 'parts', 'action' => 'view', $order['Part']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Service']['name'], array('controller' => 'services', 'action' => 'view', $order['Service']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Spending']['name'], array('controller' => 'spendings', 'action' => 'view', $order['Spending']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Casino']['name'], array('controller' => 'casinos', 'action' => 'view', $order['Casino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Company']['name'], array('controller' => 'companies', 'action' => 'view', $order['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $order['Owner']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
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
