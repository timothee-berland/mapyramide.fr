<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 * @property Category $Category
 */
class Article extends AppModel {

	public $belongsTo ='Category';
}
