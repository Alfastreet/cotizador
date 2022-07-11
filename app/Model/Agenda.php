<?php
App::uses('AppModel', 'Model');
/**
 * Agenda Model
 *
 * @property Order $Order
 * @property Visit $Visit
 */
class Agenda extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'test';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Visit' => array(
			'className' => 'Visit',
			'foreignKey' => 'agenda_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
