<?php
App::uses('AppModel', 'Model');
/**
 * Stat Model
 *
 */
class Stat extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'stat';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ip';

}
