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
              <a class="nav-link" href="http://localhost/services/add">Añadir<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/services">Listar</a>
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
<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Editar Servicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo "Nombre";
		echo $this->Form->input('name', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "valor";
		echo $this->Form->input('value', array('style'=>'width:400px;', 'label' => ''));
		echo "<br>";
		
		echo "Comentario";
		echo $this->Form->input('coments', array('style'=>'width:400px; height:100px;','type' => 'textarea', 'label' => ''));
		
		echo "<br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar servicio')); ?>
</div>

