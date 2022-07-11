<?php
App::uses('AppModel', 'Model');
/**
 * Keyword Model
 *
 * @property Code $Code
 * @property Visit $Visit
 */
class Keyword extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'test';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Code' => array(
			'className' => 'Code',
			'foreignKey' => 'code_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Visit' => array(
			'className' => 'Visit',
			'foreignKey' => 'visit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
