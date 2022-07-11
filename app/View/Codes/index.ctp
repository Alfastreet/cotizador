<div class="codes index">
	<h2><?php echo __('Codes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('codeservice'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($codes as $code): ?>
	<tr>
		<td><?php echo h($code['Code']['id']); ?>&nbsp;</td>
		<td><?php echo h($code['Code']['created']); ?>&nbsp;</td>
		<td><?php echo h($code['Code']['modified']); ?>&nbsp;</td>
		<td><?php echo h($code['Code']['name']); ?>&nbsp;</td>
		<td><?php echo h($code['Code']['codeservice']); ?>&nbsp;</td>
		<td><?php echo h($code['Code']['description']); ?>&nbsp;</td>
		<td><?php echo h($code['Code']['category']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($code['Service']['id'], array('controller' => 'services', 'action' => 'view', $code['Service']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $code['Code']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $code['Code']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $code['Code']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $code['Code']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Code'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
