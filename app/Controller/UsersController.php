<?php
	class UsersController extends AppController {

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('add'); // Letting users register themselves
		}

		//Permet à l'utilisateur de se connecter en cliquant sur le bouton "me connecter" situé en haut à droite de chaque page
		public function login() {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->redirect($this->Auth->redirect());
				} else {
					$this->Session->setFlash(__("Nom d'utilisateur ou mot de passe incorrect(s). Réessayez."));
				}
			}
		}

		//Permet à l'utilisateur de se déconnecter en cliquant sur le bouton "me déconnecter" situé en haut à droite de chaque page une fois que l'utilisateur
		//s'est authentifié
		public function logout() {
			$this->redirect($this->Auth->logout());
		}

		public function index() {
			// $users = $this->User->find('all');
			// $this->set('users', $users);

			if (AuthComponent::user('role') == 'administrateur') {
				$this->User->recursive = 0;
				$this->set('users', $this->paginate());
			} elseif (AuthComponent::user('id') != null) {
				$users = $this->User->find('first', array('conditions' => array('id' => AuthComponent::user('id'))));
				$this->set('users', $users);
			}
		}

		public function view($id = null) {
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Utilisateur invalide'));
			}
			$this->set('user', $this->User->read(null, $id));
		}

		//Permet à l'tuilisateur de créer son profil en cliquant sur "créer mon profil" situé en haut à droite de chaque page 
		public function add() {
			if ($this->request->is('post')) {
				$this->set('username', $_POST['data']['User']['username']);
				$this->set('datenaissance', $_POST['data']['User']['datenaissance']);
				$this->set('taille', $_POST['data']['User']['taille']);
				$this->set('poids', $_POST['data']['User']['poids']);
				$this->set('email', $_POST['data']['User']['email']);
				$this->set('sexe', $_POST['data']['User']['sexe']);
				$this->set('enceinte', $_POST['data']['User']['enceinte']);
				$this->set('allaitante', $_POST['data']['User']['allaitante']);

				$pseudoExiste = $this->User->find('first', array('conditions' => array('username' => $this->request->data['User']['username'])));
				if (empty($pseudoExiste)) {
					$this->request->data['User']['role'] = 'utilisateur';
					$this->User->create();
					if ($this->User->save($this->request->data)) {
						$this->Session->setFlash(__("Le compte a été créé. Vous pouvez maintenant vous connecter."));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__("Erreur lors de la creation du compte. Merci de réessayer."));
					}
				} else {
					$this->Session->setFlash(__("Le nom d'utilisateur existe déjà, veuillez en choisir un autre"));
				}
			} else {
				$this->set('username', null);
				$this->set('datenaissance', null);
				$this->set('taille', null);
				$this->set('poids', null);
				$this->set('email', null);
				$this->set('sexe', null);
				$this->set('enceinte', null);
				$this->set('allaitante', null);
			}
		}

		//Permet de modfier le profil d'un utilisateur
		public function edit($id = null) {

			if (AuthComponent::user('role') != 'administrateur') {
				$id = AuthComponent::user('id');
			}

			$this->User->id = $id;

			if (!$this->User->exists()) {
				throw new NotFoundException(__('Utilisateur invalide'));
			}

			$user = $this->User->find('first', array('conditions' => array('id' => $id)));
			$this->set('username', $user['User']['username']);
			$this->set('datenaissance', $user['User']['datenaissance']);
			$this->set('taille', $user['User']['taille']);
			$this->set('poids', $user['User']['poids']);
			$this->set('email', $user['User']['email']);
			$this->set('sexe', $user['User']['sexe']);
			$this->set('enceinte', $user['User']['enceinte']);
			$this->set('allaitante', $user['User']['allaitante']);

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

		//Permet de supprimer le compte d'un utilisateur 
		public function delete($id = null) {
			
			$this->Session->setFlash('Veuillez confirmer la suppression du compte');
			
			if (AuthComponent::user('role') != 'administrateur') {
					$id = AuthComponent::user('id');
			}

			$user = $this->User->find('first', array('conditions' => array('id' => $id)));
			$this->set('user', $user);

			if ($this->request->is('post')) {
			
				if (AuthComponent::user('role') != 'administrateur') {
					$id = AuthComponent::user('id');
				}

				$this->User->id = $id;
				if (!$this->User->exists()) {
					throw new NotFoundException(__('Utilisateur invalide'));
				}
				if ($this->User->delete()) {
					$this->Session->setFlash(__('Utilisateur supprimé'));
					if (AuthComponent::user('role') != 'administrateur') {
						$this->redirect($this->Auth->logout());
					}
				}
				$this->Session->setFlash(__("L'utilisateur n'a pas pu être supprimé. Merci de réessayer."));
				$this->redirect(array('action' => 'index'));
			}
		}
	}
?>