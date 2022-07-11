<?php echo $this->element('menu'); ?>
<div class="container">
<font size="6" color="#fff">Agendas de servicio</font>
</div>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
</div>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">

	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th style="text-align:center;"><?php echo $this->Paginator->sort('date','Fecha de servicio'); ?></th>
			<th valign="middle"><?php echo $this->Paginator->sort('timezone','Franja horaria'); ?></th>
			<th><?php echo $this->Paginator->sort('comentsclient','Comentarios del cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('comentstechnical','Comentarios del técnico'); ?></th>
			<th><?php echo $this->Paginator->sort('visit_id','Visita'); ?></th>
			<th><?php echo $this->Paginator->sort('order_id','Orden'); ?></th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agendas as $agenda): ?>
	<tr>
		<td align="center"><?php echo h($agenda['Agenda']['date']); ?>&nbsp;</td>
		<td align="center"><?php echo h($agenda['Agenda']['timezone']); ?>&nbsp;</td>
		<td align="center"><?php echo h($agenda['Agenda']['comentsclient']); ?>&nbsp;</td>
		<td align="center"><?php echo h($agenda['Agenda']['comentstechnical']); ?>&nbsp;</td>
		<td align="center">
		
		<?php if($agenda['Agenda']['visit_id'] == 0){ ?>
		<?php echo $this->Html->link("Iniciar Visita", array('controller' => 'visits', 'action' => 'add', $agenda['Agenda']['id'])); ?>
		<?php }else{ ?>
		<?php echo $this->Html->link($agenda['Agenda']['visit_id'], array('controller' => 'visits', 'action' => 'details', $agenda['Agenda']['visit_id'])); ?>
		<?php } ?>
		<td>
			<?php echo $this->Html->link($agenda['Order']['id'], array('controller' => 'orders', 'action' => 'view', $agenda['Order']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $agenda['Agenda']['id'])); ?>
			
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

