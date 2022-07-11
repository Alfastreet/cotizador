<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">

<h2><?php echo __('Datos de la Empresa'); ?></h2>
	<dl>
	    		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto pincipal'); ?></dt>
		<dd>
			<?php echo h($company['Company']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($company['Company']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email de contacto'); ?></dt>
		<dd>
			<?php echo h($company['Company']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de creación'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dueño'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $company['Owner']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

</div>
