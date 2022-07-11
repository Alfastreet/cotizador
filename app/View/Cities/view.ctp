<div class="cities view">
<h2><?php echo __('City'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($city['City']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($city['City']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($city['State']['name'], array('controller' => 'states', 'action' => 'view', $city['State']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $city['City']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casinos'), array('controller' => 'casinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casino'), array('controller' => 'casinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Casinos'); ?></h3>
	<?php if (!empty($city['Casino'])): ?>
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
	<?php foreach ($city['Casino'] as $casino): ?>
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
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($city['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Genere'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Phone1'); ?></th>
		<th><?php echo __('Phone2'); ?></th>
		<th><?php echo __('Phone3'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modifed'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($city['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['address']; ?></td>
			<td><?php echo $user['genere']; ?></td>
			<td><?php echo $user['telephone']; ?></td>
			<td><?php echo $user['phone1']; ?></td>
			<td><?php echo $user['phone2']; ?></td>
			<td><?php echo $user['phone3']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modifed']; ?></td>
			<td><?php echo $user['rol_id']; ?></td>
			<td><?php echo $user['city_id']; ?></td>
			<td><?php echo $user['owner_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
