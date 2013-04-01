<?php
App::uses('AppController', 'Controller');
/**
 * Stats Controller
 *
 * @property Stat $Stat
 */
class StatsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('visite'); // Letting users register themselves
		}
	public function visite() {
		//on recupere l adresse ip du visiteur
		if($_SERVER) 	{
		  			if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		      				$adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    			elseif(isset($_SERVER['HTTP_CLIENT_IP']))
		      				$adress = $_SERVER['HTTP_CLIENT_IP'];
		    			else
		      				$adress = $_SERVER['REMOTE_ADDR'];
		  		}
		 else 		{
		    			if(getenv('HTTP_X_FORWARDED_FOR'))
		      				$adress = getenv('HTTP_X_FORWARDED_FOR');
		    			elseif(getenv('HTTP_CLIENT_IP'))
		      				$adress = getenv('HTTP_CLIENT_IP');
		    			else
		      				$adress = getenv('REMOTE_ADDR');
		  		}

		//on verifie si on a pas changé de jour et on recupere le chiffre du compteur
		$ligne = $this->Stat->find('first', array('conditions' => array('id' => 'compteur')));
		$date = new DateTime();

		//on convertit l heure courante en minute d une journee
		$time=(date("H") * 60) + date("i");

		//on recupere le compteur courant et le temps t
		$compteur=$ligne['Stat']['compteur'];
		$t=$ligne['Stat']['time']; //temps de connexion de reference
		$d=$ligne['Stat']['duree']; //duree de renouvellement de reference

		//on test si on a changé de jour
		if ($date->format('Y-m-d') != $ligne['Stat']['date'])
		{
			//on met a jour la nouvelle date dans la table
			$date2 = $date->format('Y-m-d');
			$this->Stat->query("update stat set date='$date2';");
			//On soustrait 3 mois pour la limite des statistiques
			$date2 = $date->sub(new DateInterval('P31D'));
			$date2 = $date2->format('Y-m-d');
			//on vide toutes les addresses ip enregistrées dans la table qui sont trop vieilles
			$this->Stat->deleteAll(array('id !=' => 'compteur', 'date <' => '$date2'));
		}

		//on stoque la date d'aujourd'hui
		$date = $date->format('Y-m-d');

		//on verifie l'adresse ip du visiteur et aussi son heure de passage
		$ligne = $this->Stat->find('first', array('conditions' => array('id' => $adress)));
		if (empty($ligne))
		{
			//on enregistre l adresse ip si elle est inconnu et on incremente le compteur
			$this->Stat->query("insert into stat (id,time,duree, date, compteur) values ('$adress','$time','$time', '$date', '1');");
			$compteur+=1;

			$this->Stat->query("update stat set compteur=$compteur where id='compteur';");
		}
		else
		{
			//si l'adresse ip est connue alors on verifie si sa connexion precedente est superieur a la durée
			//de renouvellement et si son heure de passage precedente incremente ou pas les connectés
			$time1=$ligne['Stat']['time']; //on recupere l'heure de sa precedente connexion de notre connecté
			$duree1=$ligne['Stat']['duree']; //on recupere l'heure de sa precedente connexion de notre connecté
			
			// on verifie si sa derniere connexion ne date pas de plus que la duree de reference (2h)
			if ($t * 10 < ($time - ($time1)))
			{
				//si la duree de reference est depassée alors notre connecté est comptablisé 
				//comme nouvelle visite et on met a jour sa nouvelle heure de passage
				$this->Stat->query("update stat set time=$time,duree=$time where id='$adress';");
				
				//on cree une ligne fictive pour pouvoir le comptabilisé dans les visites du jour
				$adress1=$adress.".".$compteur;
				$this->Stat->query("insert into stat (id,time,duree, date, compteur) values ('$adress1','$time','$time', '$date', '1');");
				
				//et on increment le compteur de visite
				$compteur+=1;
				$this->Stat->query("update stat set compteur=$compteur where id='compteur';");
			}
		}


		//on compte le nb de visites de la journée
		$compteur_j = $this->Stat->find('count', array('conditions' => array('date' => $date, 'id !=' => 'compteur')));

		//on compte le nb de visites
		$time-=$t;
		$compteur_c = $this->Stat->find('count', array('conditions' => array('date' => $date, 'time >=' => $time, 'id !=' => 'compteur')));

		//on fait un tableau avec toutes les visites
		$visites = $this->Stat->find('all', array(
			'fields' => array( 'date'), 
			'order' => array('date' => 'asc'),
			'conditions' => array('id !=' => 'compteur')));
		
		//on met les données en forme
		$dateVisite = new DateTime();
		$dateVisite = $dateVisite->sub(new DateInterval('P31D'));
		for ($dateVisite ; $dateVisite <= new DateTime(); $dateVisite->add(new DateInterval('P1D'))) { 
				$nbUserTab[$dateVisite->format('Y-m-d')]=0;
		}

		$dateActuelle = $visites[0]['Stat']['date'];
		$nbUserTab[$dateActuelle] = 1;
		foreach ($visites as $visite) {
			$nbUserTab[$visite['Stat']['date']] += 1;
		}

		$donnees['nbUserTab'] = $nbUserTab;
		$donnees['nbUserToday'] = $compteur_j;
		$donnees['nbUserNow'] = $compteur_c;
		$donnees['nbUser'] = $compteur;
		$this->set('donnees', $donnees);
	}     

}
