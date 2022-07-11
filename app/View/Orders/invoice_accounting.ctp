<div style=" left:1em; top:2em; " class="">	<img width="400" src="../../app/webroot/img/Imagen1.png" alt=""> </div></strong>
<body id="page-top">
</div>
<?php 
?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
<div class="container">




<?php 
 

?>
<table >

<tr>

<td>

</td>

<td>

<a href="../accounting" class="btn btn-warning" role="button"><< Volver</a>
<h1> Facturación</h1>

<h3><font color="#a88750">Añadir factura</font></h3>

	<fieldset>
<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		
	<?php
		echo $this->Form->input('id');		
		?> <b><font size="5" color="#a88750">Consecutivo de la factura emitida</font></b> <?php
		echo $this->Form->input('helisa',array('style'=>'width:400px;','label' => ''));

		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('enviar')); ?>
</div>
