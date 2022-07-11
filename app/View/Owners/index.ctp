<?php echo $this->element('menu'); ?>
<div class="container">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="navbar-brand" >Gestionar/Dueños</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="../owners/add">Añadir</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../owners">Listar<span class="sr-only">(current)</span></a>
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
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('contact','Contácto'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Mail'); ?></th>
			<th><?php echo $this->Paginator->sort('genere','Género'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone','Teléfono'); ?></th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($owners as $owner): ?>
	<tr>
		
		<td><?php echo h($owner['Owner']['name']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['contact']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['address']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['email']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['genere']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['telephone']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $owner['Owner']['id'])); ?>
			<br>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $owner['Owner']['id'])); ?>
			<br>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $owner['Owner']['id']), array('confirm' => __('Está seguro de borrar el registro # %s?', $owner['Owner']['id']))); ?>
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

