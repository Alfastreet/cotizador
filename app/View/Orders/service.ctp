<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo $this->Html->url('/', true); ?>/orders/service"><img src="<?php echo $this->Html->url('/', true); ?>/app/webroot/img/icon.png" ></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
         
          <div class="input-group-append">
         
          </div>
        </div>
      </form>
	  

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
          
          </a>
          
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          
        </li>
        <li class="nav-item dropdown no-arrow">
			  <a class="nav-link dropdown-toggle" href="<?php echo $this->Html->url('/', true); ?>users/logout" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user-circle  fa-2x"></i>
			  </a>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?php echo $this->Html->url('/', true); ?>users/view/<?php echo $rol=$current_user['id']; ?>">Mi perfil</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
			  </div>
			</li>
      </ul>

    </nav>



      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Tablero</a>
            </li>
            <li class="breadcrumb-item active">Principal</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-wrench"></i>
                  </div>
                  <div class="mr-5">2 servicios por aprobar</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Más detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">3 proximas visitas </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Más detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="far fa-calendar-alt"></i>
                  </div>
                  <div class="mr-5">Tickets</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Más detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
           
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <h2><i class="fas fa-wrench"></i>
              Solicitud de servicio</h2></div>

          

        
          <div class="card mb-3">
			<div style="padding:0.01em 16px">
				<?php echo $this->Form->create('Order'); ?>
					<fieldset>
						<legend><?php echo __('Para nosotros es un gusto poder brindarle el soporte que usted necesita'); ?></legend>
					<td>
					<div style="float: left; font-size:1.2em;">
					<div><h3>Seleccione la empresa</h3></div>
					
					<div style="background-color: #fafafa; margin: 1rem; padding: 1rem; border: 2px solid #ccc; text-align: center;"><?php echo $this->Form->input('company_id', array('empty' => 'Seleccione uno','label' => '')); ?><div>
					</div>
					</td>
					
					<td>
					<div id='imgcargas' style="float: left">
					
					</div>
					</td>	
					
					<td>
					<div id='imgcargando' style="float: left">
					
					</div>
					</td>	
					</fieldset>
			
				</div>
				
            
          </div>
        <br><br><br><br><br>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
      

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  <footer>
  <img src="<?php echo $this->Html->url('/', true); ?>/app/webroot/img/pie.PNG" alt="" width="100%">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <font color="#ffffff"><span>Powered by WebSpot - Copyright © Alfastreet Colombia 2018</font></span>
            </div>
          </div>
        </footer>
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
            <a class="btn btn-primary" href="<?php echo $this->Html->url('/', true); ?>/users/logout">Cerrar sesión</a>
          </div>
        </div>
      </div>
	 
    </div>


   
  </body>

</html>




