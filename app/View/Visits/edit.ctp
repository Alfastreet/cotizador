<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<?php echo $this->Form->create('Visit'); ?>
<fieldset>
<h2><?php echo __('Terminar servicio'); ?></h2>
<?php echo $this->Form->input('id'); ?>
	<dl>
		<dt><?php echo __('Inicio del servicio'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin del servicio '); ?></dt>
		<dd>
			<?php  $hoy = date("Y-m-d H:i:s"); ?>
			&nbsp;
		</dd>
		<dd>
			<b>Total tiempo visita:</b>
			<br>
			<dd>
			
			<?php 
			$hoy = date("Y-m-d H:i:s");
			$inicio_visit=$visit['Visit']['start']; ?>
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
	<?php

	foreach ($visit['Time'] as $time): ?>
		<tr>
			<?php if($time['minute']==0)
			{
			
			
	        $date11=$time['start'];
			$date22=$hoy; 

			$timestamp11 = strtotime($date11);
			$timestamp22 = strtotime($date22);

			$timestamp1122=$timestamp22-$timestamp11;
			$total122=$timestamp1122/1800;		
			?>
			
				<td align="center"><?php echo $time['start']; ?></td>
				<td align="center"><?php echo $hoy; ?></td>
				<td align="center">
				<?php echo $totalminute=ceil($total122); ?>
			<?php }else
				{ ?>
					<td align="center"><?php echo $time['start']; ?></td>
					<td align="center"><?php echo $time['end']; ?></td>
					<td align="center">
					<?php echo $totalminute=ceil($time['minute']/1800); ?>
			<?php	} ?>
			
			</td>
			
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	<?php
		echo"<br>";
		echo"<br>";
		echo "<b>Estado del servicio</b>";
		
		echo $this->Form->input('state', array('style'=>'width:400px;','options' => array('Cerrado'=>'Cerrado', 'Abierto'=>'Abierto'),'label' => ''));
		echo "<br>";		
		echo "Nombre y cargo quien recibe el servicio ";
		echo "<br>";
		echo $this->Form->input('name',array('style'=>'width:400px;','label' => ''));
		$hoy = date("Y-m-d H:i:s");
		echo $this->Form->text('end', array('type' => 'hidden','value'=> $hoy));
		echo "<br>";
	    echo "Firma de aceptación de servicio";	
		echo "<br>";		
	?>	
		<iframe src="http://alfastreet.co/signature.html"  
		marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0"  
		frameborder="0" width="800" height="250"> 
		</iframe> 
	<?php
	    echo "<br>";
	    echo "Añanadir Al comentario inicial";
		echo $this->Form->input('comment', array('style'=>'width:400px; height:150px;','type' => 'textarea', 'label' => ''));
		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Finalizar servicio')); ?>








</div>

