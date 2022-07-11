<div class="codes view">
<h2><?php echo __('Code'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($code['Code']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($code['Code']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($code['Code']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($code['Code']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codeservice'); ?></dt>
		<dd>
			<?php echo h($code['Code']['codeservice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($code['Code']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($code['Code']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($code['Service']['id'], array('controller' => 'services', 'action' => 'view', $code['Service']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Code'), array('action' => 'edit', $code['Code']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Code'), array('action' => 'delete', $code['Code']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $code['Code']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Code'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
