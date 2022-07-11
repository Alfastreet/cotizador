<?php echo $this->element('menu'); ?>
<div class="container">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="navbar-brand" >Gestionar/Empresas</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../companies/add">Añadir<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../companies">Listar</a>
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
<div class="companies form">
	<h3>Datos de la empresa</h3>
	<fieldset>
		
	<?php
			
		echo "Nombre";
		echo $this->Form->input('name', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Contácto";
		echo $this->Form->input('contact', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Teléfono";
		echo $this->Form->input('telephone', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Direcciónección";
		echo $this->Form->input('email', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Mail";
		echo $this->Form->input('serial', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Dueño";
		echo $this->Form->input('owner_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear Empresa')); ?>
</div>
