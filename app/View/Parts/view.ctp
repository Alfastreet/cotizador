<div class="parts view">
<h2><?php echo __('Part'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($part['Part']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($part['Part']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($part['Part']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spare'); ?></dt>
		<dd>
			<?php echo $this->Html->link($part['Spare']['id'], array('controller' => 'spares', 'action' => 'view', $part['Spare']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($part['Order']['id'], array('controller' => 'orders', 'action' => 'view', $part['Order']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Part'), array('action' => 'edit', $part['Part']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Part'), array('action' => 'delete', $part['Part']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $part['Part']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spares'), array('controller' => 'spares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spare'), array('controller' => 'spares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visit'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($part['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Diagnostic'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('Expense'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Bank'); ?></th>
		<th><?php echo __('Autcode'); ?></th>
		<th><?php echo __('Helisa'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Machine Id'); ?></th>
		<th><?php echo __('Part Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Spending Id'); ?></th>
		<th><?php echo __('Casino Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($part['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['diagnostic']; ?></td>
			<td><?php echo $order['approved']; ?></td>
			<td><?php echo $order['expense']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['priority']; ?></td>
			<td><?php echo $order['bank']; ?></td>
			<td><?php echo $order['autcode']; ?></td>
			<td><?php echo $order['helisa']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td><?php echo $order['machine_id']; ?></td>
			<td><?php echo $order['part_id']; ?></td>
			<td><?php echo $order['service_id']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['spending_id']; ?></td>
			<td><?php echo $order['casino_id']; ?></td>
			<td><?php echo $order['company_id']; ?></td>
			<td><?php echo $order['owner_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Visits'); ?></h3>
	<?php if (!empty($part['Visit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Work Hour'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Signature'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Agenda Id'); ?></th>
		<th><?php echo __('Part Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($part['Visit'] as $visit): ?>
		<tr>
			<td><?php echo $visit['id']; ?></td>
			<td><?php echo $visit['start']; ?></td>
			<td><?php echo $visit['end']; ?></td>
			<td><?php echo $visit['work_hour']; ?></td>
			<td><?php echo $visit['name']; ?></td>
			<td><?php echo $visit['state']; ?></td>
			<td><?php echo $visit['signature']; ?></td>
			<td><?php echo $visit['comment']; ?></td>
			<td><?php echo $visit['created']; ?></td>
			<td><?php echo $visit['modified']; ?></td>
			<td><?php echo $visit['agenda_id']; ?></td>
			<td><?php echo $visit['part_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'visits', 'action' => 'view', $visit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'visits', 'action' => 'edit', $visit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'visits', 'action' => 'delete', $visit['id']), array('confirm' => __('Are you sure you want to delete # %s?', $visit['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Visit'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
