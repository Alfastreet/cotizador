<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<h2><?php echo __('Detalles del servicio de '); ?> <?php echo h($service['Service']['name']); ?></h2>
	<dl>
		

		<dt><?php echo __('Costo'); ?></dt>
		<dd>
			$<?php echo h($service['Service']['value']); ?> por Hora
			&nbsp;
		</dd>
		<dt><?php echo __('Comentarios'); ?></dt>
		<dd>
			<?php echo h($service['Service']['coments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado el'); ?></dt>
		<dd>
			<?php echo h($service['Service']['modifed']); ?>
		
	</dl>
</div>

	</div>
</div>
