<div style=" left:1em; top:2em; " class="">	<img width="400" src="../app/webroot/img/Imagen1.png" alt=""> </div></strong>
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
<h1> Transacción en línea</h1>

<h3><font color="#a88750">Detalles de la transacción</font></h3>
<br>
  <b><font size="5" color="#a88750">Número de servicio: </font></b><?php echo $id_ultimo_ticket; ?>
<br>
<b><font size="5" color="#a88750">Tipo de servicio: </font></b><?php echo  $service; ?>
<br> 
<b><font size="5" color="#a88750">Valor total a pagar: </font></b>$<?php echo number_format($total_ultimo_ticket, 0, '', '.');   ?> COP
  
  
<?php							
$description= "Pago de ticket".$id_ultimo_ticket;
$amount = $total_ultimo_ticket;    
$amountmostrar = $total_ultimo_ticket; 

$amount = str_replace(".", "", $amount);


	$name="pago";
	$id_producto=$id_ultimo_ticket;
	$serialdeseguridad=rand(0,10000000);
	$ApiKey='iEieK8NJ3NSqBX8Fmg27LnsFTg';
	$merchantId='760321';
	$referenceCode=$name.$id_producto.$serialdeseguridad;
	$currency='COP';

 $signature=$ApiKey.'~'.$merchantId.'~'.$referenceCode.'~'.$amount.'~'.$currency;
	
 $signature = Security::hash($signature, 'md5');



?>                             
  <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway"> 
  <input name="merchantId"    type="hidden"  value="<?php echo $merchantId; ?>"   >
  <input name="accountId"     type="hidden"  value="766782" >
  <input name="ApiKey"        type="hidden"  value="<?php echo $ApiKey; ?>" >
  <input name="description"   type="hidden"  value="<?php echo $description; ?>"  >
  <input name="referenceCode" type="hidden"  value="<?php echo $referenceCode ?>" >
  <input name="amount"        type="hidden"  value="<?php echo $amount ?>"   >
  <input name="tax"           type="hidden"  value="0"  >
  <input name="taxReturnBase" type="hidden"  value="0" >
  <input name="currency"      type="hidden"  value="COP" >
  <input name="signature"     type="hidden"  value="<?php echo $signature ?>"  >
    <font size="5" color="#a88750"><b>Nombre de quien realiza la transacción:</b></font>
	<br>
    <input size="55" name="payerFullName"   type="text"  value=""  >
	<br>
	<font size="5" color="#a88750"><b>Correo electrónico de contacto:</b></font>
	<br>
	<input size="55" name="buyerEmail" class="form-control" type="email" name="email"  >
	<input name="responseUrl"    type="hidden"  value="http://payu.muscleology.com.co/pagos.php" >
	<input name="confirmationUrl"    type="hidden"  value="http://payu.muscleology.com.co/pagos.php" >
	
	<div class="col-sm-10 col-sm-offset-1 xs-text-center cbx-submit-area">
	<br>
	
	<button type="submit" name="submit" class="btn btn-primary"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pagar &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font></button>

	</div>
	
</form>
							

</div>
  
   <td WIDTH="150"></td>
    <td valign="top"></strong><img width="420" src="../app/webroot/img/pay.jpg" alt=""></td>
 
</tr>
</table>

</div>	
</div>
							
