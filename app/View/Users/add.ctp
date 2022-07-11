<?php echo $this->element('menu'); ?>
<div class="container">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="navbar-brand" >Gestionar/Usuarios</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $this->Html->url('/', true); ?>users/add">Añadir<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $this->Html->url('/', true); ?>users">Listar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
</div>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
			  
<div class="machines form">

<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		
	<?php
	    echo "<h3>Añadir usuario</h3>";
        echo "Nombres";
		echo $this->Form->input('first_name', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";

        echo "Apellidos";
		echo $this->Form->input('last_name', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Dirección";
		echo $this->Form->input('address', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Género";
		echo $this->Form->input('genere', array('options' => array('Masculino'=>'Masculino','Femenino' =>'Femenino'),'style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Teléfono";
		echo $this->Form->input('telephone', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Celular";
		echo $this->Form->input('phone1', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Empresarial";
		echo $this->Form->input('phone2', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
				
		echo "Rol";
		echo $this->Form->input('rol_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Asociado a";
		echo $this->Form->input('owner_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		 echo "<h3>Datos de autenticación</h3>";
		echo "Usuario";
		echo $this->Form->input('username', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Contraseña";
		echo $this->Form->input('password', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";

		
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear usuario')); ?>
</div>
