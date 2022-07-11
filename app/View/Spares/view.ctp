<div class="spares view">
<h2><?php echo __('Spare'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tech'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['tech']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['serial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifed'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['modifed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($spare['Spare']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Spare'), array('action' => 'edit', $spare['Spare']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Spare'), array('action' => 'delete', $spare['Spare']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $spare['Spare']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Spares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spare'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Parts'); ?></h3>
	<?php if (!empty($spare['Part'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Spare Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($spare['Part'] as $part): ?>
		<tr>
			<td><?php echo $part['id']; ?></td>
			<td><?php echo $part['created']; ?></td>
			<td><?php echo $part['modified']; ?></td>
			<td><?php echo $part['spare_id']; ?></td>
			<td><?php echo $part['order_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'parts', 'action' => 'view', $part['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parts', 'action' => 'edit', $part['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parts', 'action' => 'delete', $part['id']), array('confirm' => __('Are you sure you want to delete # %s?', $part['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
