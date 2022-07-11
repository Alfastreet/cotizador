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
            <li class="nav-item ">
              <a class="nav-link" href="../casinos/add">Añadir</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../casinos">Listar<span class="sr-only">(current)</span></a>
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
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('technical','Contácto técnico'); ?></th>
			<th><?php echo $this->Paginator->sort('accounting','Contácto contabilidad'); ?></th>
			<th><?php echo $this->Paginator->sort('payment','Autorización de pagos'); ?></th>			
			<th><?php echo $this->Paginator->sort('company_id','Empresa'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_id','Dueño'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($casinos as $casino): ?>
	<tr>
		
		<td><?php echo h($casino['Casino']['name']); ?>&nbsp;</td>
		<td><?php echo $casino['Casino']['address']; echo "<br>"; echo $casino['City']['name']."-"; echo $casino['State']['name'];   ?>&nbsp;</td>
		<td>Nombre: <?php echo h($casino['Casino']['technical']); ?><br>Teléfono: <?php echo h($casino['Casino']['technicaltelephone']); ?> <br> mail: <?php echo h($casino['Casino']['technicalemail']); ?>        </td>
		<td>Nombre: <?php echo h($casino['Casino']['accounting']); ?><br>Teléfono: <?php echo h($casino['Casino']['accountingphone']); ?><br>mail: <?php echo h($casino['Casino']['accountingemail']); ?></td>
		<td>Nombre: <?php echo h($casino['Casino']['payment']); ?><br>Teléfono: <?php echo h($casino['Casino']['paymentphone']); ?><br>Mail:<?php echo h($casino['Casino']['paymentemail']); ?></td>
		<td>
			<?php echo $this->Html->link($casino['Company']['name'], array('controller' => 'companies', 'action' => 'view', $casino['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($casino['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $casino['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($casino['State']['name'], array('controller' => 'states', 'action' => 'view', )); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $casino['Casino']['id'])); ?>
			<br>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $casino['Casino']['id'])); ?>
			<br>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $casino['Casino']['id']), array('confirm' => __('Está seguro de borrar el regístro # %s?', $casino['Casino']['id']))); ?>
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