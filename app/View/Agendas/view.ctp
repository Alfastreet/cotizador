<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<h2><?php echo __('Agenda'); ?></h2>
	<dl>
		<dt><?php echo __('Número de servicio'); ?></dt>
		<dd>
	        	
			<?php echo h($agenda['Agenda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jornada'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['timezone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentarios del cliente'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['comentsclient']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentarios del técnico'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['comentstechnical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orden'); ?></dt>
		<dd>
			<?php echo $agenda['Order']['id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>


</div>
