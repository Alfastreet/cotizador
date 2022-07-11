<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<h1><?php echo __('Abrir Servicio'); ?></h1>
		
		
		
		
<div class="container">
  <div class="row">
    <div class="col-sm">
      	<?php
		echo $this->Form->input('id');
		
		echo "<h2><font Color='#856404'>".$datos['Company']['name']."</font></h2>";
		echo '<br>';
		echo "<h5><font Color='#856404'>".$datos['Casino']['name']."</font></h5>";
		echo '<br>';
		echo '<br>';
		echo "<img width='300' src=".$datos['Machine']['image']."  >"; 
		echo '<br>';
		echo "<font Color='#856404'><b>Modelo: </b></font>".$datos['Machine']['name'];
		echo '<br>';
		echo "<font Color='#856404'><b>Serial: </b></font>".$datos['Machine']['serial'];
			
	?>
    </div>
    <div class="col-sm">
<table style="width:100%">
  <tr>
    <td><b>Fecha y hora de solicitud:</b></td>
    <td><?php echo $datos['Order']['created'];	?></td>    
  </tr>
  <tr>
    <td><b>Comentarios del cliente:</b></td>
    <td><?php echo $datos['Order']['coment']; ?></td> 
    
  </tr>
  <tr>
    <td><b>Técnico Asignado</b></td>
    <td><?php echo $this->Form->input('technical_id', array('style'=>'width:300px;','label' => '','options' => $technical)); ?></td>    
  </tr>
  
    <tr>
    <td><b>Tipo de servicio</b></td>
    <td><?php  echo $this->Form->input('service_id', array('style'=>'width:300px;','label' => '')); ?></td> 
    
  </tr>
  
    <tr>
    <td><b>Diagnostico técnico</b></td>
	
    <td><?php echo $this->Form->input('diagnostic', array('style'=>'width:300px; height:200px;','type' => 'textarea', 'label' => '')); ?></td> 
    
  </tr>
  
    <tr>
		<td><b>Prioridad</b></td>
		<td><?php echo $this->Form->input('priority', array('style'=>'width:300px;','label' => '','options' => array('Alta' => 'Alta','Media' => 'Media','Baja' => 'Baja'))); ?></td>    
    </tr>
	
	    <tr>
		<td><b>Gastos de desplazamiento</b></td>
		<td><?php echo $this->Form->input('spending_id',array('style'=>'width:300px;','label' => ' ','empty' => 'Sin gastos')); ?></td>   
       		
    </tr>
  
    </tr>	
	    <tr>
		<td><br><?php echo $this->Form->end(__('Generar servicio')); ?></td>
		<td></td>    
    </tr>
	
</table>
    	
    </div>
 
  </div>
</div>
		

	</fieldset>

</div>

