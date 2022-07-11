<?php echo $this->element('menu'); ?>
<div class="container">
<font size="6" color="#fff">Visitas</font>
</div>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('agenda_id','Agenda'); ?></th>
			<th><?php echo $this->Paginator->sort('start','Inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('end','Fin'); ?></th>
			
			<th><?php echo $this->Paginator->sort('name','Recibio el servicio'); ?></th>
			<th><?php echo $this->Paginator->sort('state','Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('comment','Comentario'); ?></th>
			
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($visits as $visit): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($visit['Agenda']['id'], array('controller' => 'agendas', 'action' => 'view', $visit['Agenda']['id'])); ?>
		</td>
		
		<td><?php echo h($visit['Visit']['start']); ?>&nbsp;</td>
		<td><?php

		
		
		$estado_fin=$visit['Visit']['end'];
		if( $estado_fin == "0000-00-00 00:00:00"){
			echo "En proceso";
		}else{
			echo $visit['Visit']['end'];
			} 
		
		?>&nbsp;</td>

		<td><?php echo h($visit['Visit']['name']); ?>&nbsp;</td>
		<td><?php  
		$estado_visita=$visit['Visit']['state'];
		if( $estado_visita == ""){
			echo "En proceso";
		}else{
			echo $visit['Visit']['state'];
			} 
		
		?>&nbsp;</td>
		<td><?php echo h($visit['Visit']['comment']); ?>&nbsp;</td>
		
		
		<td class="actions">
		<?php
		if( $estado_fin == "0000-00-00 00:00:00"){
			echo $this->Html->link(__('Gestionar La visita'), array('action' => 'view', $visit['Visit']['id']));
		}else{
			echo $this->Html->link(__('Detalles de la visita'), array('action' => 'details', $visit['Visit']['id'])); 	
			} 
			?> 		
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, Mostrando {:current} resultados  {:count} total, comenzando en  {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior | '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' | '));
		echo $this->Paginator->next(__(' | Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

