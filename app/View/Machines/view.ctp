<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<h2><?php echo __('Información sobre la máquina'); ?></h2>

<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
     <img src="<?php echo h($machine['Machine']['image']); ?>" border="1" alt="" width="" height="400">
    </div>
    <div class="col-sm">
	<h3><font color="#8C8C8C">Información básica</font></h3>
	<br>
     	<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['name']); ?>
			&nbsp;
		</dd>
	<dl>
		
		
		<dt><?php echo __('Serial'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['serial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['client']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Instalada en'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['installed']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Tecnología'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['tech']); ?>
			&nbsp;
		</dd>
		


		
		<dt><?php echo __('Garantía hasta'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['warranty']); 
			$fecha = $machine['Machine']['installed'];
			$nuevafecha = strtotime ( '+1 year' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
			echo $nuevafecha;
			?>		
		</dd>
		
    </div>
	<div class="col-sm">
	<h3><font color="#8C8C8C">Medidas</font></h3>
	
		<dd>
			<?php echo h($machine['Machine']['monitor']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Alto'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['high']); ?>  Cm.
			&nbsp;
		</dd>
		<dt><?php echo __('Ancho'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['width']); ?>  Cm.
			&nbsp;
		</dd>
		<dt><?php echo __('Largo'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['length']); ?>  Cm.
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['weight']); ?> Kg.
			&nbsp;
		</dd>
	
	</div>
    
  </div>
</div>

		
		
	<hr class="featurette-divider">

		<h3><font color="#8C8C8C">Datos de contacto</font></h3>
		<div class="container">
<div class="row">
    <div class="col-sm">
     <dt><u><?php echo __('Nombre'); ?></u></dt>
		<dd>
			<?php echo h($machine['Machine']['response1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['response1position']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['response1tel']); ?>
			&nbsp;
		</dd>

		
    </div>
    <div class="col-sm">
     <dt><u><?php echo __('Nombre'); ?></u></dt>
		<dd>
			<?php echo h($machine['Machine']['response2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['response2position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['response2tel']); ?>
			&nbsp;
		</dd>
		
    </div>
    <div class="col-sm">
     <dt><?php echo __('Dueño'); ?></dt>
		<dd>
			<?php echo $this->Html->link($machine['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $machine['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($machine['Company']['name'], array('controller' => 'companies', 'action' => 'view', $machine['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Casino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($machine['Casino']['name'], array('controller' => 'casinos', 'action' => 'view', $machine['Casino']['id'])); ?>
			&nbsp;
		</dd> 
    </div>
  </div>
</div>
		
		
		<br><br>
		
		
		<br><br>
		
		
		<dt><?php echo __('Regístro creado el'); ?></dt>
		<dd>
			<?php echo h($machine['Machine']['created']); ?>
			&nbsp;
		</dd>
		
		
	</dl>
</div>
</div>
<hr class="featurette-divider">
<br><br>
<div class="related">
    <h3 align="center"><?php echo __('Hoja de Vida de la máquina'); ?></h3> 
	<br><br>
	<?php if (!empty($machine['Order'])): ?>
		<table class="table table-striped" cellpadding="0" cellspacing="0">
	<tr>
				<th><?php echo __('Fecha de solicitud'); ?></th>
		<th><?php echo __('Diagnóstico'); ?></th>
		<th><?php echo __('Aprobación'); ?></th>
			
		<th><?php echo __('Prioridad'); ?></th>
		<th><?php echo __('Factura'); ?></th>
		<th><?php echo __('Servicio'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Gastos'); ?></th>	

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($machine['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['diagnostic']; ?></td>
			<td><?php echo $order['approved']; ?></td>
			
			
			<td><?php echo $order['priority']; ?></td>

			<td><?php echo $order['helisa']; ?></td>
			<td><?php echo $order['service_id']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['spending_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle del servicio'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
