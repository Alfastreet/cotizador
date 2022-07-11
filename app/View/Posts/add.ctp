<?php
	echo $this->Form->input('category_id');
	echo $this->Form->input('subcategory_id');
	echo $this->Form->input('title');
?>
<?php	
	$this->Js->get('#PostCategoryId')->event('change', 
	$this->Js->request(array(
		'controller'=>'subcategories',
		'action'=>'getByCategory'
		), array(
		'update'=>'#PostSubcategoryId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>