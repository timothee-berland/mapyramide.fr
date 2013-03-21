<?php
App::uses('AppModel', 'Model');
/**
 * Aliment Model
 *
 * @property Famillealiments $Famillealiments
 * @property Donneescompilee $constituant
 */
class Aliment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nomFR';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Famillealiments' => array(
			'className' => 'Famillealiments',
			'foreignKey' => 'famillealiments_id',
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
		'Donneesaliment' => array(
			'className' => 'Donneescompilee',
			'foreignKey' => 'aliments_id',
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
