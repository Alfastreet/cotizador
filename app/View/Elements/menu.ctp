<?php
$rol=$current_user['rol_id'];
if($rol=='1' or $rol=='2' )
{
}
else
{
?>
<script type="text/javascript">

  function redirection(){  

  window.location ="<?php echo $this->Html->url('/', true); ?>orders/service";

  }  setTimeout ("redirection()", 1); //tiempo en milisegundos

  </script>
<?php  
}
?>  
  <header>
      <div class="collapse bg-dark" id="navbarHeader">
    
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">      
        <div class="p-2 text-dark" ><b>Administración</b></div>
		<div class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestionar<span class="caret"></span></a>
		<ul class="dropdown-menu">
	
		<li><a href="<?php echo $this->Html->url('/', true); ?>machines">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Máquinas</a></li>
		<li role="separator" class="divider"></li>
		<li><a href="<?php echo $this->Html->url('/', true); ?>casinos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Casinos</a></li>
		<li role="separator" class="divider"></li>
		<li><a href="<?php echo $this->Html->url('/', true); ?>companies">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Empresas</a></li>
		<li role="separator" class="divider"></li>
		<li><a href="<?php echo $this->Html->url('/', true); ?>owners">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dueños</a></li>
		<li role="separator" class="divider"></li>
		</ul>
		<a class="p-2 text-dark" href="<?php echo $this->Html->url('/', true); ?>users">Usuarios</a>
		<a class="p-2 text-dark" href="<?php echo $this->Html->url('/', true); ?>rols">Roles</a>
		<a class="p-2 text-dark" href="<?php echo $this->Html->url('/', true); ?>services">Servicios</a>
		
		</div>       
	  
		

		
      
      </h5>
    
    </div> 
	
	
	   <div class="container">
		
          <div class="row">
            <div class="col-sm-12 col-md-17 py-12">
              <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-wrench"></i>
                  </div>
                  <div class="mr-5">Servicios</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo $this->Html->url('/', true); ?>orders">
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
                  <div class="mr-5">Agendas de servicio</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo $this->Html->url('/', true); ?>agendas">
                  <span class="float-left">Más detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fab fa-buromobelexperte"></i>
                  </div>
                  <div class="mr-5">Visitas</div>
                </div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo $this->Html->url('/', true); ?>visits">
                
                  <span class="float-left">Más detalles</span>
                  <span class="float-right">
				  <i class="far fa-clock"></i>
                   
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                     <i class="fas fa-file-invoice-dollar"></i>
                  </div>
				  <div class="mr-5">Contabilidad</div>
                  
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo $this->Html->url('/', true); ?>orders/accounting">
                  <span class="float-left">Más detalles</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
		  
         </div>
            
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="<?php echo $this->Html->url('/', true); ?>/orders" class="navbar-brand d-flex align-items-center">
            <img width="100%" src="<?php echo $this->Html->url('/', true); ?>/app/webroot/img/icon.png" >
         
           
          </a>
         
		<nav style="left:29em; top:-1em; " class="navbar navbar-expand navbar-dark bg-dark static-top">
           
			<br>
			<li class="nav-item dropdown no-arrow">
			  <a class="nav-link dropdown-toggle" href="<?php echo $this->Html->url('/', true); ?>/users/logout" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user-circle  fa-2x"></i>
				 
			  </a>
			 
			  <font color="#fff"><?php echo $rol=$current_user['first_name']; ?></font>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?php echo $this->Html->url('/', true); ?>/users/view/ <?php echo $rol=$current_user['id']; ?>">Mi perfil</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
			  </div>
			</li>
		</nav>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span ><i class="fas fa-arrows-alt-v"></i></span>
          </button>
        </div>
      </div>
	  
	  
    </header>
	
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
            <a class="btn btn-primary" href="<?php echo $this->Html->url('/', true); ?>users/logout">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>
