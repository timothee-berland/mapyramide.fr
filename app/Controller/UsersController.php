<?php
	class UsersController extends AppController {

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('add'); // Letting users register themselves
		}

		public function login() {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->redirect($this->Auth->redirect());
				} else {
					$this->Session->setFlash(__("Nom d'utilisateur ou mot de passe incorrect(s). Réessayez."));
				}
			}
		}

		public function logout() {
			$this->redirect($this->Auth->logout());
		}

		public function index() {
			// $users = $this->User->find('all');
			// $this->set('users', $users);

			$this->User->recursive = 0;
			$this->set('users', $this->paginate());
		}

		public function view($id = null) {
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Utilisateur invalide'));
			}
			$this->set('user', $this->User->read(null, $id));
		}

		public function add() {
			if ($this->request->is('post')) {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__("Le compte a été créé."));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__("Erreur lors de la creation du compte. Merci de réessayer."));
				}
			}
		}

		public function edit($id = null) {
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Utilisateur invalide'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__("L'utilisateur a été modifié"));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__("L'utilisateur n'a pas pu être modifié. Merci de réessayer."));
				}
			} else {
				$this->request->data = $this->User->read(null, $id);
				unset($this->request->data['User']['password']);
			}
		}

		public function delete($id = null) {
			// if (!$this->request->is('post')) {
			// 	throw new MethodNotAllowedException();
			// }
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Utilisateur invalide'));
			}
			if ($this->User->delete()) {
				$this->Session->setFlash(__('Utilisateur supprimé'));
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__("L'utilisateur n'a pas pu être supprimé. Merci de réessayer."));
			$this->redirect(array('action' => 'index'));
		}
	}
?>