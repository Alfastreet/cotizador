<?php echo $this->element('menu'); ?>



<div class="container">
<font size="6" color="#fff">Tablero principal</font>
</div>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>

	<tr bgcolor="#CACACA">
			
			<th><?php echo $this->Paginator->sort('',''); ?></th>
			<th><?php echo $this->Paginator->sort('created','Solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('technical_id','Técnico'); ?></th>
			<th><?php echo $this->Paginator->sort('casino_id','Casino'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_id','Máquina'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id','Solicitado por'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id','Tipo de servicio'); ?></th>
			<th><?php echo $this->Paginator->sort('coment','Comentario cliente'); ?></th>
			
			<th><?php echo $this->Paginator->sort('diagnostic','Diagnostico'); ?></th>
			<th><?php echo $this->Paginator->sort('priority','Prioridad'); ?></th>
			
			
			<th><?php echo $this->Paginator->sort('visit_id','Agenda y Visitas'); ?></th>
			
			<th><?php echo $this->Paginator->sort('spending_id','Gastos asociados al servicio'); ?></th>
			
			
	</tr>
	</thead>

	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
	    <td class="actions">
			<?php echo $this->Html->link(__('Ver servicio'), array('action' => 'view', $order['Order']['id'])); ?>
			<br><br>
			
			<?php 
			   $diagnostico=$order['Order']['diagnostic'];
			   $id_order=$order['Order']['id'];
			   if($diagnostico == '' or $diagnostico == 'NULL' )
			   {
			    echo $this->Html->link(__('Tomar servicio'), array('action' => 'open', $id_order=$order['Order']['id'])); 
			   }else
			     {
					echo "<font color='green'><b>Diagnóstico realizado</b></font>";
				  }
			?>
			 
			
			
		</td>
        <td>
			<?php echo h($order['Order']['created']); ?>&nbsp;
		</td>
		
		<td>
			<?php $tecnico=$order['Order']['technical_id']; echo $this->Html->link($order['Order']['technical_name'], array('controller' => 'users', 'action' => 'view/'.$tecnico.'',)); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($order['Casino']['name'], array('controller' => 'casinos', 'action' => 'view', $order['Casino']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($order['Machine']['name'], array('controller' => 'machines', 'action' => 'view', $order['Machine']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($order['User']['name'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($order['Service']['name'], array('controller' => 'services', 'action' => 'view', $order['Service']['id'])); ?>
		</td>
		
		<td>		
			<?php
			   $comentario=$order['Order']['coment'];
			   if($comentario == '' or $comentario == '0' )
			   {
			     echo '<font color="gray">No se realizaron comentarios</font>';		  
			   }else
			     {
				    echo h($order['Order']['coment']);
			      }
			 ?>	
		</td>
		
		
		<td>
			<?php 
			   $diagnostico=$order['Order']['diagnostic'];
			   if($diagnostico == '' or $diagnostico == 'NULL' )
			   {
			    echo $this->Html->link(__('Tomar servicio'), array('action' => 'open', $order['Order']['id'])); 	  
			   }else
			     {
					echo h($order['Order']['diagnostic']);
				  }
			?>
			&nbsp;
		</td>
		
		<td>
		
			<?php
			   $prioridad=$order['Order']['priority'];
			   if($prioridad == '' or $prioridad == '0' )
			   {
			     echo '<font color="red">Servicio pendiente</font>';		  
			   }else
			     {
				    echo h($order['Order']['priority']);
			      }
			 ?>	
		</td>
		
		
	
			<?php
			   $aprobacion=$order['Order']['approved'];
			   if($aprobacion == '' or $aprobacion == '0' )
			   {
				
                $aproved=0;				
			   }else
				 {
					
					$aproved=1;
				 }
			 ?>
		
		<td>
		
			<?php if ($aproved == 0) {?>
			<font color="orange">Pendiente por aprobación de servicio</font>
			<?php }else{ ?>
			Agenda:
			<?php 
			$day=$order['Agenda']['date'];
			
			if(isset($day)){
			setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
			$fecha = strftime("%d de %B de %Y", strtotime($day));
			echo"<br>";			
			echo $this->Html->link($fecha, array('controller' => 'agendas', 'action' => 'view', $order['Agenda']['id'])); ?>
			<br>
			
			
			Visita:
			
				<?php
				$fin_de_servicio=0;
				foreach ($visita as $visitas): ?>
	
			
			<?php 
			 $id_visita=$visitas['Visit']['agenda_id'];
			  $id_agendadada=$order['Agenda']['id'];
			  if($id_visita==$id_agendadada)
			  {
			   $id_visita_agendada=$visitas['Visit']['id'];
			   $id_visita_agendada_fin=$visitas['Visit']['end'];
				
				if($id_visita_agendada_fin == NULL)
				  {
					$fin_de_servicio++;
				  }else{}
			     
			  }else{}
			   
			?>   
			   
	<?php endforeach; ?>
			<br>
			<?php 
			
			if (isset($id_visita_agendada)){
			
			
			if($fin_de_servicio > 0)
				{
				
				 echo $this->Html->link("En proceso", array('controller' => 'visits', 'action' => 'details/'.$id_visita_agendada.''));
				}else{
				
				  echo $this->Html->link("Terminada", array('controller' => 'visits', 'action' => 'details/'.$id_visita_agendada.''));
					}
			
			}else
				{
				 echo $this->Html->link("Empezar visita", array('controller' => 'visits', 'action' => 'add/'.$order['Agenda']['id'].''));
				}
			?>
			
			
			
			<?php
			}else
				{
				echo"<br>";
				echo $this->Html->link("Agendar visita", array('controller' => 'agendas', 'action' => 'add/'.$id_order.''));
				}
				 ?>

			<?php }?>
		</td>


		
		<td>
			
		<?php
			   $gastos=$order['Spending']['id'];
			   if($gastos == '' or $gastos == '0' )
			   {
				echo '<font color="gray">No aplica</font>';		  
			   }else
				 {
					echo $order['Spending']['name'];
				 }
			 ?>
		</td>
		</td>

		
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

	<!-- Contador de los resultados -->

	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, Mostrando {:current} resultados  {:count} total, comenzando en  {:start}, terminando en {:end}')
	));
	?>	</p>

	<!--Paginador-->
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior | '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' | '));
		echo $this->Paginator->next(__(' | Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>

	<!-- Parte grafica ¡Requiere Mejoras Excesivas!! -->
	</div>
              </div>
            </div>
            <div class="card-footer small text-muted">Actualizado hoy a las 11:59 PM</div>
          </div>
		            <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Tendencia en el servicio</div>
<div class="card-body">			  
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Servicios abiertos', 'Servicios Finalizados'],
			['Enero',  4,      40],
			['Febrero',  11,      46],
			['Marzo',  6,       60],
			['Abril',  5,      63],
			['Mayo',  5,      75],
			['Junio',  7,      54],
			['Julio',  2,      41],
			['Agosto',  0,      69],
			['Septiembre',  3,      83],
			['Octubre',  14,      34]
				
        ]);

        var options = {
          title: 'Comportamiento de los servicios mensuales',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 500px"></div>
  </body>
</html>

<!-- Fin de la grafica -->

 </div>
            <div class="card-footer small text-muted">Actualizado hoy a las 11:59 PM</div>
</div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Powered by WebSpot - Copyright © Alfastreet Colombia  2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>

