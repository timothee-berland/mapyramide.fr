<?php
App::uses('AppController', 'Controller');
/**
 * Imcenfants Controller
 *
 * @property Imcenfant $Imcenfant
 */
class ImcenfantsController extends AppController {

	// Pour utiliser des modèles spécifiques
	public $uses = array('Imcenfant', 'User');

	public function index()
	{
		$id = AuthComponent::user('id');
		if ($id != null) {
			$user = $this->User->find('first', array('conditions' => array('id' => $id)));
			$this->set('datenaissance', $user['User']['datenaissance']);
			$this->set('taille', $user['User']['taille']);
			$this->set('poids', $user['User']['poids']);
			$this->set('sexe', $user['User']['sexe']);
			$this->set('enceinte', $user['User']['enceinte']);
			$this->set('allaitante', $user['User']['allaitante']);
		} else {
			$this->set('noPost', 1);
		}
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('calcul'); // Letting non-users see these pages
	}

	//Permet de calculer l'IMC d'une personne
	public function calcul() {
		//On récupère les informations concernant le poids et la taille de la personne
		//Par la suite, on applique la formule poids/taille²
		if ($this->request->is('post')) {
			$imc=($_POST['zt_poids']/($_POST['zt_taille']*$_POST['zt_taille']))*10000;
			//Si l'utilisateur est un enfant (age <=18)
			if ($_POST['zt_age']<18) {
				$imcenfants = $this->Imcenfant->find('first', array('conditions' => array(
					'Imcenfant.id' => $_POST['zt_age'])));
				//Que l'enfant soit un garçon & une fille, on recherche dans la bdd le poids minimal et le poids maximal correspondant à son âge et à son sexe
				if ($_POST['sexe'] == 'homme') {
					$imcMin = $imcenfants['Imcenfant']['ming'];
					$imcMax = $imcenfants['Imcenfant']['maxg'];
				} else {
					$imcMin = $imcenfants['Imcenfant']['minf'];
					$imcMax = $imcenfants['Imcenfant']['maxf'];
				}
			//Si l'utilisateur est un adulte, son IMC doit être compris entre 18.5 et 24.9 inclus
			} else {
				$imcMin = 18.5;
				$imcMax = 24.9;
			}

			if ($_POST['sexe'] == 'homme') {
				switch ($_POST['AP']) {
					case 1: 
						$AP = 1.0;
						break;
					case 2: 
						$AP = 1.11;
						break;
					case 3: 
						$AP = 1.25;
						break;
					case 4: 
						$AP = 1.48;
				}

				$BEE = round(864 - 9.72 * $_POST['zt_age'] + $AP * (14.2 * $_POST['zt_poids'] + 503 * $_POST['zt_taille'] / 100));

			} else {
				switch ($_POST['AP']) {
					case 1: 
						$AP = 1.0;
						break;
					case 2: 
						$AP = 1.12;
						break;
					case 3: 
						$AP = 1.27;
						break;
					case 4: 
						$AP = 1.45;
				}

				$BEE = round(387 - 7.31 * $_POST['zt_age'] + $AP * (10.9 * $_POST['zt_poids'] + 660.7 * $_POST['zt_taille'] / 100));

			}

			$this->set('imc', $imc);
			$this->set('imcMin', $imcMin);
			$this->set('imcMax', $imcMax);
			$this->set('BEE', $BEE);
		}
	}
}
