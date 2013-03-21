<?php
App::uses('AppController', 'Controller');
/**
 * Imcenfants Controller
 *
 * @property Imcenfant $Imcenfant
 */
class ImcenfantsController extends AppController {
	public function index()
	{
		# Nothing to do here...
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

			$this->set('imc', $imc);
			$this->set('imcMin', $imcMin);
			$this->set('imcMax', $imcMax);
		}
	}
}
