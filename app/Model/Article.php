<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 * @property Category $Category
 */
class Article extends AppModel {

	public $belongsTo = array(
		'Category' => array(
			'className' => 'Categories',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		));
}
