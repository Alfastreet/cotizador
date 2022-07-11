<div class="states view">
<h2><?php echo __('State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($state['State']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($state['State']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($state['State']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $state['State']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casinos'), array('controller' => 'casinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casino'), array('controller' => 'casinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Casinos'); ?></h3>
	<?php if (!empty($state['Casino'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modifed'); ?></th>
		<th><?php echo __('Technical'); ?></th>
		<th><?php echo __('Technicaltelephone'); ?></th>
		<th><?php echo __('Technicalemail'); ?></th>
		<th><?php echo __('Accounting'); ?></th>
		<th><?php echo __('Accountingphone'); ?></th>
		<th><?php echo __('Accountingemail'); ?></th>
		<th><?php echo __('Payment'); ?></th>
		<th><?php echo __('Paymentphone'); ?></th>
		<th><?php echo __('Paymentemail'); ?></th>
		<th><?php echo __('Phone1'); ?></th>
		<th><?php echo __('Phone2'); ?></th>
		<th><?php echo __('Phone3'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['Casino'] as $casino): ?>
		<tr>
			<td><?php echo $casino['id']; ?></td>
			<td><?php echo $casino['name']; ?></td>
			<td><?php echo $casino['address']; ?></td>
			<td><?php echo $casino['created']; ?></td>
			<td><?php echo $casino['modifed']; ?></td>
			<td><?php echo $casino['technical']; ?></td>
			<td><?php echo $casino['technicaltelephone']; ?></td>
			<td><?php echo $casino['technicalemail']; ?></td>
			<td><?php echo $casino['accounting']; ?></td>
			<td><?php echo $casino['accountingphone']; ?></td>
			<td><?php echo $casino['accountingemail']; ?></td>
			<td><?php echo $casino['payment']; ?></td>
			<td><?php echo $casino['paymentphone']; ?></td>
			<td><?php echo $casino['paymentemail']; ?></td>
			<td><?php echo $casino['phone1']; ?></td>
			<td><?php echo $casino['phone2']; ?></td>
			<td><?php echo $casino['phone3']; ?></td>
			<td><?php echo $casino['city_id']; ?></td>
			<td><?php echo $casino['company_id']; ?></td>
			<td><?php echo $casino['owner_id']; ?></td>
			<td><?php echo $casino['state_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'casinos', 'action' => 'view', $casino['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'casinos', 'action' => 'edit', $casino['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'casinos', 'action' => 'delete', $casino['id']), array('confirm' => __('Are you sure you want to delete # %s?', $casino['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Casino'), array('controller' => 'casinos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cities'); ?></h3>
	<?php if (!empty($state['City'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['City'] as $city): ?>
		<tr>
			<td><?php echo $city['id']; ?></td>
			<td><?php echo $city['name']; ?></td>
			<td><?php echo $city['created']; ?></td>
			<td><?php echo $city['modified']; ?></td>
			<td><?php echo $city['state_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cities', 'action' => 'view', $city['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cities', 'action' => 'edit', $city['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cities', 'action' => 'delete', $city['id']), array('confirm' => __('Are you sure you want to delete # %s?', $city['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
