<body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">

<?php 
echo $this->Form->create('Agenda'); ?>
	<fieldset>
		<legend><?php echo __('Agendar visita técnica'); ?></legend>
	<?php
		echo"Fecha";
		echo $this->Form->input('date', array('label' => ''));
		echo"<br>";
		
		echo"Jornada laboral  de la visita";
		echo $this->Form->input('timezone', array('options' => array('Mañana' => 'Mañana', 'Tarde' => 'Tarde', 'Noche' => 'Noche'),'label' => ''));
		echo"<br>";
		
		echo"Comentarios por parte del cliente";
		echo $this->Form->input('comentsclient', array('style'=>'width:700px; height:100px;','type' => 'textarea', 'label' => ''));
		
		echo"<br>";
		
		echo"Comentarios por parte del técnico";
		echo $this->Form->input('comentstechnical', array('style'=>'width:700px; height:100px;','type' => 'textarea', 'label' => ''));
		echo"<br>";
		
		echo $this->Form->input('order_id', array('type' => 'hidden','value'=> $id));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agendar')); ?>
</div>
</div>
