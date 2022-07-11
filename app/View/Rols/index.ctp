<?php echo $this->element('menu'); ?>
<div class="container">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="navbar-brand" >Gestionar/Roles</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="http://localhost/rols/add">Añadir</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/rols">Listar<span class="sr-only">(current)</span></a>
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
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th style="text-align:center;"><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th style="text-align:center;"><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th style="text-align:center;" class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rols as $rol): ?>
	<tr>
		
		<td style="text-align:center;"><?php echo h($rol['Rol']['name']); ?>&nbsp;</td>
		<td style="text-align:center;"><?php echo h($rol['Rol']['created']); ?>&nbsp;</td>
		<td style="text-align:center;" class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $rol['Rol']['id'])); ?>
			<br>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $rol['Rol']['id']), array('confirm' => __('Está seguro de borrar el registro # %s?', $rol['Rol']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, Mostrando {:current} resultados  {:count} total, comenzando en  {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior | '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' | '));
		echo $this->Paginator->next(__(' | Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
