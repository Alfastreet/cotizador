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
		<dd>
			Total tiempo visita:
			<br>
			<dd>
			<?php $hoy = date("Y-m-d H:i:s"); ?>
			<?php $inicio_visit=$visit['Visit']['start']; ?>
			<?php 
			$fin_visit=$visit['Visit']['end']; 
			if($fin_visit=='0000-00-00 00:00:00')
			{
				$fin_visit=$hoy;
			}else
				{}
				
			$date1=$inicio_visit;
			$date2=$fin_visit; 

			$timestamp1 = strtotime($date1);
			$timestamp2 = strtotime($date2);

			$timestamp=$timestamp2-$timestamp1;
			$total=$timestamp/3600;
			$decimales = explode('.',$total);
			echo $decimales[0]." Horas";
			echo  " - ";
			$decimales_entero=$decimales[1];
			$minutos =substr($decimales_entero, 0, 1)*6;
			
			echo  substr($minutos, 0, 2)." Minutos";
			?>
			&nbsp;
		</dd>
			&nbsp;
		</dd>
		<div class="related">
	<h3><?php echo __('Horas de trabajo'); ?></h3>
	<?php if (!empty($visit['Time'])): ?>
	<table WIDTH="500px" cellpadding = "0" cellspacing = "0" border="1">
	<tr>
		
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Fin'); ?></th>
		<th><?php echo __('Fracción'); ?></th>
		
		
	</tr>
	<?php foreach ($visit['Time'] as $time): ?>
		<tr>
			
			<td align="center"><?php echo $time['start']; ?></td>
			<td align="center"><?php echo $time['end']; ?></td>
			<td align="center"><?php echo ceil($time['minute']/1800); ?></td>
			
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
			<dd>
			<?php echo h($visit['Visit']['work_hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quien Aceptó el servicio'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado del servicio'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['state']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['comment']); ?>
			&nbsp;
		</dd>
		

	</dl>
</div>


</div>
