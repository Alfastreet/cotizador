<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<h2><?php echo __('Datos del propietario'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto principal'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección '); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email de contacto'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Género'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['genere']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
</div>
