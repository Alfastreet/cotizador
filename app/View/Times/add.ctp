<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
<?php  ?>
	<fieldset>
		<legend><?php echo __('Pausar ó iniciar Actividad'); ?></legend>
	
	</fieldset>
<?php 

if(isset($times['0']['Time']['id']))
{
$id_tiempo=$times['0']['Time']['id'];  
echo"<br>";
echo "Inicio: ";
echo $inicio=$times['0']['Time']['start'];  
echo"<br>";
echo "fin: ";
echo $pausa=$times['0']['Time']['end'];  
}else{
		$inicio="0000-00-00 00:00:00";  
		$pausa="0000-00-00 00:00:00";
	 }

$hoy = date("Y-m-d H:i:s");
if($inicio == "0000-00-00 00:00:00" and $pausa == "0000-00-00 00:00:00")
	{	 			
			
	}else if ($inicio <> "0000-00-00 00:00:00" and $pausa == "0000-00-00 00:00:00") 
		{
		
		
		    echo $this->Form->create('Time');
			echo $this->Form->hidden('end',array('value'=>$hoy));
			echo $this->Form->hidden('id_tiempo',array('value'=>$id_tiempo));
			echo $this->Form->end(__('Pausar Actividad'));		
			
			
		

		}else if ($inicio <> "0000-00-00 00:00:00" and $pausa <> "0000-00-00 00:00:00") 
			{
			echo $this->Form->create('Time');
			echo $this->Form->hidden('start',array('value'=>$hoy));
			echo $this->Form->hidden('end',array('value'=>""));
			echo $this->Form->end(__('Iniciar Actividad'));
			}
?> 

<br><br><br><br><br><br>
