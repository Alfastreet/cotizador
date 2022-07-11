<div style=" left:1em; top:2em; " class="">	<img width="400" src="../../app/webroot/img/Imagen1.png" alt=""> </div></strong>
<body id="page-top">
</div>
<?php 
?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
<div class="container">
<a href="../accounting" class="btn btn-warning" role="button"><< Volver</a>



<?php 
 

?>
<table >

<tr>

<td>

</td>

<td>
<h1> Transferencia</h1>

<h3><font color="#a88750">Detalles de la transferencia</font></h3>

	<fieldset>
<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		
	<?php
		echo $this->Form->input('id');
		
		?> <b><font size="5" color="#a88750">Banco al cúal realizo la transferencia</font></b> <?php
		echo "<br>";
		echo $this->Form->input('bank', array('style'=>'width:400px;','options' => array('Banco BBVA'=>'Banco BBVA', 'Banco de Occidente'=>'Banco de Occidente','Payu'=>'Payu'),'label' => ''));
		
		?> <b><font size="5" color="#a88750">Referencia de la transacción</font></b> <?php
		echo $this->Form->input('autcode',array('style'=>'width:400px;','label' => ''));

		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Confirmar transferencia')); ?>
</div>
