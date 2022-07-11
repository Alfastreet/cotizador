<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">



<h2><?php echo __('Orden de servicio número '); ?> <?php echo h($order['Order']['id']); ?></h2>
	<dl>
	<h3><font color="#8C8C8C">Detalles de la compañía</font></h3>
	    <dt><?php echo __('Dueño'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $order['Owner']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Compañía'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Company']['name'], array('controller' => 'companies', 'action' => 'view', $order['Company']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Casino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Casino']['name'], array('controller' => 'casinos', 'action' => 'view', $order['Casino']['id'])); ?>
			&nbsp;
		</dd>
		<br><br>
		<h3><font color="#8C8C8C">Detalles del servicio</font></h3>
		<dt><?php echo __('Fecha de solicitud'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Máquina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Machine']['name'], array('controller' => 'machines', 'action' => 'view', $order['Machine']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Tipo de Servicio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Service']['name'], array('controller' => 'services', 'action' => 'view', $order['Service']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Comentario del cliente'); ?></dt>
		<dd>
			<?php echo h($order['Order']['coment']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Diagnostico'); ?></dt>
		<dd>
			<?php echo h($order['Order']['diagnostic']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Aprobación de servicio'); ?></dt>
		<dd>
			<?php echo h($order['Order']['approved']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Gastos'); ?></dt>
		<dd>
			<?php echo h($order['Order']['expense']); ?>
			&nbsp;
		</dd>
		

		
		<dt><?php echo __('Prioridad'); ?></dt>
		<dd>
			<?php echo h($order['Order']['priority']); ?>
			&nbsp;
		</dd>
		
		<h3><font color="#8C8C8C">Detalles de pago del servicio</font></h3>
		<dt><?php echo __('Código de autorización de pago'); ?></dt>
		<dd>
			<?php echo h($order['Order']['autcode']); ?>
			&nbsp;
		</dd> 
		
		<dt><?php echo __('Banco'); ?></dt>
		<dd>
			<?php echo h($order['Order']['bank']); ?>
			&nbsp;
		</dd>
		

		
		<dt><?php echo __('Factura Helisa'); ?></dt>
		<dd>
			<?php echo h($order['Order']['helisa']); ?>
			&nbsp;
		</dd>
		

		
		<!-- <dt><?php //echo __('Part'); ?></dt> -->
		<!-- <dd> -->
			<?php // echo $this->Html->link($order['Part']['id'], array('controller' => 'parts', 'action' => 'view', $order['Part']['id'])); ?>
			&nbsp;
		<!-- </dd> -->

		
		
		

		

		

		
	</dl>
	</div>
</div>


