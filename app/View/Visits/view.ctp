<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<h2><?php echo __('Gestión de Visita'); ?></h2>
	<dl>
	     <td class="actions">
			<button type="button" class="btn btn-info"><?php echo $this->Html->link(__('pausar o reanudar'), array('controller' => 'times','action' => 'add', $visit['Visit']['id'])); ?> </button>
			<br><br>
			<button type="button" class="btn btn-success"><?php echo $this->Html->link(__('terminar servicio'), array('action' => 'edit', $id_order=$visit['Visit']['id'])); ?> </button>	
		</td>
	     <br> <br> <br> 
		
		<dt><?php echo __('Inicio del servicio'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin del servicio '); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['end']); ?>
			&nbsp;
		</dd>
		