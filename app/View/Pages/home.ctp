
<?php
$rol=$current_user['rol_id'];
if($rol=='1' or $rol=='2' )
{
?>
<script type="text/javascript">

  function redirection(){  

  window.location ="http://localhost/servicio/orders";

  }  setTimeout ("redirection()", 1); //tiempo en milisegundos

  </script>
  
  
<?php
}
else
{
?>
<script type="text/javascript">

  function redirection(){  

  window.location ="http://localhost/servicio/orders/service";

  }  setTimeout ("redirection()", 1); //tiempo en milisegundos

  </script>
<?php  
}
?>  