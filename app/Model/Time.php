<?php
App::uses('AppModel', 'Model');
/**
 * Time Model
 *
 * @property Visit $Visit
 */
class Time extends AppModel {

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
		'Visit' => array(
			'className' => 'Visit',
			'foreignKey' => 'visit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
