<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="loader-page"></div>
<div style=" left:1em; top:2em; " class="">	<img width="400" src="../../app/webroot/img/Imagen1.png" alt=""> </div></strong>
<body id="page-top">
</div>
<?php 
$id_ultimo_ticket=$_GET["edsdeferdede"];
$total_ultimo_ticket=$_GET["edefffsdfsd"];
$service=$_GET["ererffdg"];
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
<h1> Transferencia</h1>

<h3><font color="#a88750">Detalles de la transferencia</font></h3>
<br>
  <b><font size="5" color="#a88750">Número de servicio: </font></b><?php echo $id_ultimo_ticket; ?>
<br>
<b><font size="5" color="#a88750">Tipo de servicio: </font></b><?php echo  $service; ?>
<br> 
<b><font size="5" color="#a88750">Valor de la transferencia: </font></b>$<?php echo number_format($total_ultimo_ticket, 0, '', '.');   ?> COP
	<fieldset>
<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		
	<?php
		echo $this->Form->input('id');
		?> <b><font size="5" color="#a88750">Banco al cúal realizo la transferencia</font></b> <?php
		echo "<br>";
		echo $this->Form->input('bank', array('style'=>'width:400px;','options' => array('Banco BBVA'=>'Banco BBVA', 'Banco de Occidente'=>'Banco de Occidente'),'label' => ''));
		
		?> <b><font size="5" color="#a88750">Referencia de la transacción</font></b> <?php
		echo $this->Form->input('autcode',array('style'=>'width:400px;','label' => ''));

		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Confirmar transferencia')); ?>
</div>
