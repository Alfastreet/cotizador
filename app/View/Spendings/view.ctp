<div class="spendings view">
<h2><?php echo __('Spending'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spending['Spending']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($spending['Spending']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($spending['Spending']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($spending['Spending']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Spending'), array('action' => 'edit', $spending['Spending']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Spending'), array('action' => 'delete', $spending['Spending']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $spending['Spending']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Spendings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spending'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($spending['Order'])): ?>
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
	<?php foreach ($spending['Order'] as $order): ?>
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
