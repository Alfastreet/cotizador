<!DOCTYPE html>
<html>
<style>
* {
    box-sizing: border-box;
}



.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%;
    flex: 25%;
    max-width: 25%;
    padding: 70px 20px 2px 20px;
    /* padding-top: 0; */
}

.column2 {
    -ms-flex: 25%; /* IE10 */
    flex: 50%;
    max-width: 50%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>Seleccione la máquina según el CASINO</h1>
 
</div>

<!-- Photo Grid -->
 
	
	
	

		
  
  
  <?php foreach ($casinos as $casino): ?> 
  
  <div class="row">
		<div class="column2">		  
			<h3><?php echo $name=($casino['Casino']['name']); ?></h3>
			
			<?php $id_casino_compare=($casino['Casino']['id']); ?>
			
			<img src=" <?php echo $image=($casino['Casino']['image']); ?> " border="1" alt="Casino" width="400" height="300">
		</div>
		
		 <?php
		 foreach ($machines_company as $machines_companys): 
			$casino_id_machines_compare=($machines_companys['Machine']['casino_id']);
			if($id_casino_compare == $casino_id_machines_compare){
		?>			
		  <div class="column">
			<a href="../orders/add/<?php echo $name=($machines_companys['Machine']['id']); ?>"> <?php echo "<img width='180' height='180' src=".$machines_companys['Machine']['image']."  >"; ?> </a>					
			<h4><?php echo $name=($machines_companys['Machine']['name']); ?></h4> <br> <b>serial:</b> <?php echo $name=($machines_companys['Machine']['serial']); ?> <br><br>
		  </div> 

								
		<?php
		}else{}
		?>	
		<?php endforeach; ?>
  </div>
  <hr/>
   <?php endforeach; ?>


		

</body>
</html>

		
