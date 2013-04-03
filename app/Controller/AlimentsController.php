<?php
App::uses('AppController', 'Controller');
/**
 * Donneescompilees Controller
 *
 * @property Donneescompilee $Donneescompilee
 */
class AlimentsController extends AppController {

	// Pour utiliser des modèles spécifiques
	public $uses = array('Aliment', 'Constituantaliment', 'Donneescompilee', 'Famillealiment');

	public function beforeFilter() {
			$this->Auth->allow('index');
		}

	public function index($id1=NULL, $id2=NULL) {
		if ($this->request->is('post')) {
			if (!empty ($_POST['zone-aliment'])) {
				$aRechercher = $_POST['zone-aliment'];
				$resultats = $this->Aliment->find('all', array('conditions' => array('OR' => array(
																				array('Aliment.nomFR LIKE' => '%'. ucfirst(strtolower($aRechercher)) .'%'),
																				array('Aliment.nomFR LIKE' => '%'. strtolower($aRechercher) .'%')))));
				$this->set('resultats', $resultats);
			}
		}
		
		if ($id1 != NULL) {
			$aliment1 = $this->Aliment->find('first', array('conditions' => array('Aliment.id' => $id1)));
			
			for ($i=0; sizeof($aliment1['Donneesaliment']) > $i; $i++) {
				$listeConstituants[$i] = $aliment1['Donneesaliment'][$i]['constituantaliments_id'];
			}
				
			$constituantsAliment1 = $this->Donneescompilee->Constituantaliments->find('all', 
				array(
					'conditions' => array(
						'Constituantaliments.id' => $listeConstituants)
					));
			$this->set('aliment1', $aliment1);
			$this->set('constituantsAliment1', $constituantsAliment1);
			
			//On récupère la quantité du premier aliment que l'utilisateur souhaite comparer
			if (isset($_POST['quantite'])) {
				$quantiteAliment1 = $_POST['quantite'];
				$this->set('quantiteAliment1', $quantiteAliment1);
			} elseif (! isset($quantiteAliment1)) {
				$this->set('quantiteAliment1', 1);
			}
			
			//On récupère la portion du premier aliment que l'utilisateur souhaite comparer
			if (isset($_POST['portion'])) {
				$quantitePortion1 = $_POST['portion'];
				$this->set('quantitePortion1', $quantitePortion1);
			} else {
				$this->set('quantitePortion1', 'quantiteMoyennePortion');
			}

		}

		if ($id2 != NULL) {
			$aliment2 = $this->Aliment->find('first', array('conditions' => array('Aliment.id' => $id2)));
			for ($i=0; sizeof($aliment2['Donneesaliment']) > $i; $i++) {
				$listeConstituants[$i] = $aliment2['Donneesaliment'][$i]['constituantaliments_id'];
			}
				
			$constituantsAliment2 = $this->Donneescompilee->Constituantaliments->find('all', 
				array(
					'conditions' => array(
						'Constituantaliments.id' => $listeConstituants)
					));
			$this->set('aliment2', $aliment2);
			$this->set('constituantsAliment2', $constituantsAliment2);

			//On récupère la quantité du deuxième aliment que l'utilisateur souhaite comparer
			if (isset($_POST['quantite2'])) {
				$quantiteAliment2 = $_POST['quantite2'];
				$this->set('quantiteAliment2', $quantiteAliment2);
			} elseif (! isset($quantiteAliment2)) {
				$this->set('quantiteAliment2', 1);
			}
			
			//On récupère la portion du deuxième aliment que l'utilisateur souhaite comparer
			if (isset($_POST['portion2'])) {
				$quantitePortion2 = $_POST['portion2'];
				$this->set('quantitePortion2', $quantitePortion2);
			} else {
				$this->set('quantitePortion2', 'quantiteMoyennePortion');
			}
		}
	}

}
