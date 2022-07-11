<?php echo $this->element('menu'); ?>
<div class="container">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="navbar-brand" >Gestionar/Máquinas</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="http://localhost/machines/add">Añadir<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/machines">Listar</a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="">Editar</a>
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
<?php echo $this->Form->create('Machine'); ?>
	<fieldset>
		<h1>Editar máquina </h1>
	<?php
		echo $this->Form->input('id');
				echo "Serial";
		echo $this->Form->input('serial', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
	    echo "Modelo";
		echo $this->Form->input('name', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		
		
		echo "Fecha de instalación";
		echo $this->Form->input('installed', array('style'=>'width:130px;', 'label' => ''));
		echo "<br>";
		
		echo "Tecnología";
		echo $this->Form->input('tech', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		
		
		
		echo "Alto";
		echo $this->Form->input('high', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Ancho";
		echo $this->Form->input('width', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Largo";
		echo $this->Form->input('length', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Peso";
		echo $this->Form->input('weight', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "<h3>Contacto</h3>";
		echo "<b>Responsable principal</b>";
		echo $this->Form->input('response1', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Cargo";
		echo $this->Form->input('response1position', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";

		echo "Teléfono";
		echo $this->Form->input('response1tel', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";

		echo "<b>Responsable secundario</b>";
		echo $this->Form->input('response2', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
	    echo "Cargo";
		echo $this->Form->input('response2position', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Teléfono";
		echo $this->Form->input('response2tel', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
	echo "<h3>Datos de ubicación y pertenencia</h3>";		
				
		echo "Dueño";
		echo $this->Form->input('owner_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Compañía";
		echo $this->Form->input('company_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Casino";
		echo $this->Form->input('casino_id', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
