<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">

<h2><?php echo __('Información sobre el Casino'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['address']); ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casino['City']['name'], array('controller' => 'cities', 'action' => 'view', $casino['City']['id'])); ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casino['State']['name'], array('controller' => 'states', 'action' => 'view', $casino['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Télefono principal '); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcional 1'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcional 2'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['phone3']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Creado en'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa asociada al Casino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casino['Company']['name'], array('controller' => 'companies', 'action' => 'view', $casino['Company']['id'])); ?>
			&nbsp;
		</dd>	
		<br><br>
		<h3><font color="#8C8C8C">Información de contácto</font></h3>
		
		
		<dt><u><?php echo __('Contacto técnico'); ?></u></dt>
		<dd>
			<?php echo h($casino['Casino']['technical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['technicaltelephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail de contacto'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['technicalemail']); ?>
			&nbsp;
		</dd>
		
		<br><br>
		<dt><u><?php echo __('Contacto Contabilidad'); ?></u></dt>
		<dd>
			<?php echo h($casino['Casino']['accounting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Télefono'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['accountingphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail de contácto'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['accountingemail']); ?>
			&nbsp;
		</dd>
		<br><br>
		
		<dt><u><?php echo __('Contacto autorización de pagos'); ?></u></dt>
		<dd>
			<?php echo h($casino['Casino']['payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['paymentphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail de contácto'); ?></dt>
		<dd>
			<?php echo h($casino['Casino']['paymentemail']); ?>
			&nbsp;
		</dd>
		
		
	</dl>
</div>
<hr class="featurette-divider">
<div class="related">
	<font color="#d39e00"> 
		<br><br>
		<h1 align="center"><?php echo __('Máquinas relacionadas al Casino'); ?></h1> 
		<br><br>
		<?php if (!empty($casino['Machine'])): ?>
		<div class="table-responsive">
		<table class="table table-striped" cellpadding="0" cellspacing="0">
		<tr>
			
			
			<th><?php echo __('Modelo'); ?></th>
			<th><?php echo __('Serial'); ?></th>
			<th><?php echo __('Instalación'); ?></th>
			<th><?php echo __('Tecnología'); ?></th>
			<th><?php echo __('Año'); ?></th>
			<th><?php echo __('Garantía'); ?></th>
			
			
			<th class="actions"><?php echo __(''); ?></th>
		</tr>
		<?php foreach ($casino['Machine'] as $machine): ?>
			<tr>
				
				
				<td valign="middle"><?php echo $machine['name']; ?></td>
				<td><?php echo $machine['serial']; ?></td>
				<td><?php echo $machine['installed']; ?></td>
				<td><?php echo $machine['tech']; ?></td>
				<td><?php echo $machine['year']; ?></td>		
				<td><?php echo $machine['warranty']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Más detalles'), array('controller' => 'machines', 'action' => 'view', $machine['id'])); ?>
					
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</font>
	</div>
	<hr class="featurette-divider">
<?php endif; ?>

	
</div>
<div class="related">
	<br><br>
	<font color="#909090"> 
	<h1 align="center"><?php echo __('Servicios relacionados al Casino'); ?></h1> 
	<br><br>
	<?php if (!empty($casino['Order'])): ?>

	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<tr>
	    <th><?php echo __('Created'); ?></th>
		<th><?php echo __('Diagnostic'); ?></th>
		<th><?php echo __('Approved'); ?></th>		
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Helisa'); ?></th>
		
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php foreach ($casino['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['diagnostic']; ?></td>
			<td><?php echo $order['approved']; ?></td>
			<td><?php echo $order['priority']; ?></td>
			<td><?php echo $order['helisa']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Más detalles'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</font>
<?php endif; ?>

	
</div>
