<?php echo $this->element('menu'); ?>
<font size="6" color="#fff">Contabilidad</font>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>

	<tr bgcolor="#CACACA">
			
			<th><?php echo $this->Paginator->sort('',''); ?></th>
			<th><?php echo $this->Paginator->sort('created','Solicitud'); ?></th>		
			<th><?php echo $this->Paginator->sort('casino_id','Casino'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_id','Máquina'); ?></th>
			
			<th><?php echo $this->Paginator->sort('bank','Entidad'); ?></th>
			<th><?php echo $this->Paginator->sort('autcode','Código de Autorización'); ?></th>
			<th><?php echo $this->Paginator->sort('helisa','Factura'); ?></th>
			
			<th><?php echo $this->Paginator->sort('service_id','Tipo de servicio'); ?></th>
			<th><?php echo $this->Paginator->sort('spending_id','Gastos asociados al servicio'); ?></th>
			
			
	</tr>
	</thead>

	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
	    <td tyle="text-align:center;" class="actions">
			<?php echo $this->Html->link(__('Ver servicio'), array('action' => 'view', $order['Order']['id'])); ?>
			
			 
			
			
		</td>
        <td style="text-align:center;">
			<?php echo h($order['Order']['created']); ?>&nbsp;
		</td>
				
		<td style="text-align:center;">
			<?php echo $this->Html->link($order['Casino']['name'], array('controller' => 'casinos', 'action' => 'view', $order['Casino']['id'])); ?>
		</td>
		
		<td style="text-align:center;">
			<?php echo $this->Html->link($order['Machine']['name'], array('controller' => 'machines', 'action' => 'view', $order['Machine']['id'])); ?>
		</td>
		
		<td style="text-align:center;">
			<?php
			     $banco=$order['Order']['bank'];
			   if($banco == '' or $banco == '0' )
			   {
				echo '<font color="red">pediente de pago</font>';		  
			   }else
				 {
					echo $order['Order']['bank'];
				 }
			 ?>
		</td>
		
		<td style="text-align:center;">
			<?php
			     $codigo_a=$order['Order']['autcode'];
			   if($codigo_a == '' or $codigo_a == '0' )
			   {
				 echo $this->Html->link("Ingresar Código", array('controller' => 'orders', 'action' => 'transfer_accounting', $order['Order']['id']));  
			   }else
				 {
					echo $order['Order']['autcode'];
				 }
			 ?>
		</td>
		
		<td style="text-align:center;">
			<?php
			     $helisa=$order['Order']['helisa'];
			   if($helisa == '' or $helisa == '0' )
			   {
				 echo $this->Html->link("Ingresar factura", array('controller' => 'orders', 'action' => 'invoice_accounting', $order['Order']['id']));  
			   }else
				 {
					echo $order['Order']['helisa'];
				 }
			 ?>
		</td>
		
		<td style="text-align:center;">
			<?php echo $this->Html->link($order['Service']['name'], array('controller' => 'services', 'action' => 'view', $order['Service']['id'])); ?>
		</td>
		
	
		<td style="text-align:center;">
			
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
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
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

