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
              <a class="nav-link" href="http://localhost/machines/add">Añadir</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/machines">Listar<span class="sr-only">(current)</span></a>
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
			
			<th style="text-align:center;><?php echo $this->Paginator->sort('serial','Serial'); ?></th>
			<th style="text-align:center;><?php echo $this->Paginator->sort('model','Modelo'); ?></th>
			<th style="text-align:center;><?php echo $this->Paginator->sort('client','Cliente'); ?></th>
			<th style="text-align:center;><?php echo $this->Paginator->sort('installed','Instalación'); ?></th>
			<th style="text-align:center;><?php echo $this->Paginator->sort('tech','Técnología'); ?></th>
				
			
			<th style="text-align:center;><?php echo $this->Paginator->sort('owner_id','Dueño'); ?></th>
			<th style="text-align:center;><?php echo $this->Paginator->sort('company_id', 'Compañía'); ?></th>
			<th style="text-align:center;><?php echo $this->Paginator->sort('casino_id','Casino'); ?></th>
			<th style="text-align:center;> class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($machines as $machine): ?>
	<tr>
		<td style="text-align:center;"><?php echo h($machine['Machine']['serial']); ?>&nbsp;</td>
		<td style="text-align:center;"><?php echo h($machine['Machine']['model']); ?>&nbsp;</td>
		<td style="text-align:center;"><?php echo h($machine['Machine']['client']); ?>&nbsp;</td>
		<td style="text-align:center;"><?php echo h($machine['Machine']['installed']); ?>&nbsp;</td>
		<td style="text-align:center;"><?php echo h($machine['Machine']['tech']); ?>&nbsp;</td>
		
		
		
		<td style="text-align:center;">
			<?php echo $this->Html->link($machine['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $machine['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($machine['Company']['name'], array('controller' => 'companies', 'action' => 'view', $machine['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($machine['Casino']['name'], array('controller' => 'casinos', 'action' => 'view', $machine['Casino']['id'])); ?>
		</td>
		<td style="text-align:center;">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $machine['Machine']['id'])); ?>
			<br>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $machine['Machine']['id'])); ?>
			<br>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $machine['Machine']['id']), array('confirm' => __('Está seguro de borrar el registro # %s?', $machine['Machine']['id']))); ?>
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

