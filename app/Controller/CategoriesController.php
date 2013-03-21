<?php

App::uses('AppController', 'Controller');

class CategoriesController extends AppController {

	public function index() {

		$categories = $this->Category->find('all');
		debug($categories);

	}


}