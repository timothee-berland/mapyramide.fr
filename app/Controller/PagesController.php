<?php
	/**
	 * Static content controller.
	 *
	 * This file will render views from views/pages/
	 *
	 * PHP 5
	 *
	 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
	 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
	 *
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 *
	 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
	 * @link          http://cakephp.org CakePHP(tm) Project
	 * @package       app.Controller
	 * @since         CakePHP(tm) v 0.2.9
	 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
	 */

	App::uses('AppController', 'Controller');

	/**
	 * Static content controller
	 *
	 * Override this controller by placing a copy in controllers directory of an application
	 *
	 * @package       app.Controller
	 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
	 */
	class PagesController extends AppController {

	/**
	 * Controller name
	 *
	 * @var string
	 */
		public $name = 'Pages';

	// Pour utiliser des modèles spécifiques
	public $uses = array('Article', 'Aliment', 'Famillealiment');

	/**
	 * Displays a view
	 *
	 * @param mixed What page to display
	 * @return void
	 */
		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('display'); // Letting non-users see public pages
		}

		//Permet l'affichage des éléments dans les différentes catégories
		public function display() {

			$derniersArticles = $this->Article->find('all', array(
				'fields' => array('id', 'title', 'content'),
				'order' => 'created DESC'));
			$this->set('derniersArticles', $derniersArticles);

			$fruits = $this->Famillealiment->find('all', array('conditions' => array('name' => 'Fruits')));
			$this->set('fruits', $fruits);

			$legumes = $this->Famillealiment->find('all', array('conditions' => array('name' => 'Légumes')));
			$this->set('legumes', $legumes);
			
			$grains = $this->Famillealiment->find('all', array('conditions' => array('name' => 'Céréales')));
			$this->set('grains', $grains);

			$pdtProteines = $this->Famillealiment->find('all', array('conditions' => array('name' => 'Produits protéinés')));
			$this->set('pdtProteines', $pdtProteines);
			
			$pdtLaitiers = $this->Famillealiment->find('all', array('conditions' => array('name' => 'Produits laitiers')));
			$this->set('pdtLaitiers', $pdtLaitiers);
			
			$matGrasses = $this->Famillealiment->find('all', array('conditions' => array('name' => 'Matières grasses')));
			$this->set('matGrasses', $matGrasses);
			


			$path = func_get_args();

			$count = count($path);
			if (!$count) {
				$this->redirect('/');
			}
			$page = $subpage = $title_for_layout = null;

			if (!empty($path[0])) {
				$page = $path[0];
			}
			if (!empty($path[1])) {
				$subpage = $path[1];
			}
			if (!empty($path[$count - 1])) {
				$title_for_layout = Inflector::humanize($path[$count - 1]);
			}
			$this->set(compact('page', 'subpage', 'title_for_layout'));
			$this->render(implode('/', $path));
		}
	}
?>