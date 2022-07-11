<?php echo $this->element('menu'); ?>
<div class="container">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="navbar-brand" >Gestionar/Casinos</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../casinos/add">Añadir<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../casinos">Listar</a>
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
<div class="casinos form">
<?php echo $this->Form->create('Casino'); ?>
	<fieldset>
		<h3>Datos del Casino</h3>
	<?php
	
	    echo "Nombre";
		echo $this->Form->input('name', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
	    echo "Dirección";
		echo $this->Form->input('address', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "<b>Ubicación</b><br>";
		echo "Municipio";
		echo $this->Form->input('state_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Ciudad";
		echo $this->Form->input('city_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		

		echo "<h3>Datos de contácto</h3>";
		echo "<b>Técnico</b><br>";
	    echo "Nombre";
		echo $this->Form->input('technical', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
	    echo "Teléfono";
		echo $this->Form->input('technicaltelephone', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Mail";
		echo $this->Form->input('technicalemail', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "<b>Contabilidad</b><br>";
		
		echo "Nombre";
		echo $this->Form->input('accounting', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
	    echo "Teléfono";
		echo $this->Form->input('accountingphone', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Mail";
		echo $this->Form->input('accountingemail', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "<b>Autorización de pagos</b><br>";
		
		echo "Nombre";
		echo $this->Form->input('payment', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Teléfono";
		echo $this->Form->input('paymentphone', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Mail";
		echo $this->Form->input('paymentemail', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "<h3>Datos de pertenencia</h3>";
		
		echo "Empresa";
		echo $this->Form->input('company_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Dueño";
		echo $this->Form->input('owner_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		
	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear Casino')); ?>
</div>

