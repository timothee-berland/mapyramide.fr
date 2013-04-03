<?php

App::uses('AppController', 'Controller');

class ArticlesController extends AppController {
	var $helpers = array('Html', 'Form', 'Ck', 'Js'); 

	// Pour utiliser des modèles spécifiques
	public $uses = array('Article', 'Category', 'Form', 'Ck');

	public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('article', 'recherche'); // Letting non-users see public articles
		}

	//Permet d'afficher l'ensemble des articles
	public function index() {

		$articles = $this->Article->find('all');
		$this->set('articles', $articles);
	}

	public function article($id = null) {
		if ($id != null) {
			$article = $this->Article->find('first', array('conditions' => array('Article.id' => $id)));
				$this->set('article', $article);
		} else {
			$article = $this->Article->find('all');
				$this->set('article', $article);
		}
	}

	
	public function recherche() {
		$termes = str_replace(" ", "%", $_GET['s']);
		$articles = $this->Article->find('all', array(
			'conditions' => array('content LIKE' => '%' . $termes . '%')));
		$this->set('articles', $articles);
	}

	//Permet d'effectuer les modifications concernant un article 
	public function edit($id=null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Article invalide'));
		}

		$this->set('id', $id);

		$article = $this->Article->find('first', array('conditions' => array('Article.id' => $id)));
		$this->set('titre', $article['Article']['title']);
		$this->set('idCategorie', $article['Article']['category_id']);
		$this->set('contenu', $article['Article']['content']);
		$this->set('categories', $this->Category->find('all'));

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__("L'article a été modifié"));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("L'article n'a pas pu être modifié. Merci de réessayer."));
			}
		}
	}

	//Permet d'ajouter un article
	public function add() {
		$this->set('categories', $this->Category->find('all'));

		if ($this->request->is('post')) {
				$this->Article->create();
				if ($this->Article->save($this->request->data)) {
					$this->Session->setFlash(__("L'article a été ajouté"));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__("Erreur lors de la creation de l'article. Merci de réessayer."));
				}
			}
	}

	//Permet de supprimer un article 
		public function delete($id = null) {
			
			$this->Session->setFlash("Veuillez confirmer la suppression de l'article");
			
			if (AuthComponent::user('role') == 'administrateur') {
				$article = $this->Article->find('first', array('conditions' => array('Article.id' => $id)));
				$this->set('article', $article);

				if ($this->request->is('post')) {
					$this->Article->id = $id;
					if (!$this->Article->exists()) {
						throw new NotFoundException(__('Article invalide'));
					}
					if ($this->Article->delete()) {
						$this->Session->setFlash(__('Article supprimé'));
						$this->redirect(array('action' => 'index'));
					}
					$this->Session->setFlash(__("L'article n'a pas pu être supprimé. Merci de réessayer."));
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__("Vous n'avez pas accès à cette page"));
				$this->redirect(array('action' => 'index'));
			}
		}
}
