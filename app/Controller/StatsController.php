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
		$date = date("Y-m-d");

		//on convertit l heure courante en minute d une journee
		$time=(date("H") * 60) + date("i");

		//on recupere le compteur courant et le temps t
		$compteur=$ligne['Stat']['compteur'];
		$t=$ligne['Stat']['time']; //temps de connexion de reference
		$d=$ligne['Stat']['duree']; //duree de renouvellement de reference

		//on test si on a changé de jour
		if ($date!=$ligne['Stat']['date'])
		{
			//on vide toutes les addresses ip enregistrées dans la table lors du changement de jour
			$this->Stat->deleteAll(array('id !=' => 'compteur'));
			//on met a jour la nouvelle date dans la table
			$this->Stat->query("update stat set date='$date';");
		}

		//on verifie l'adresse ip du visiteur et aussi son heure de passage
		$ligne = $this->Stat->find('first', array('conditions' => array('id' => $adress)));
		if (empty($ligne))
		{
			//on enregistre l adresse ip si elle est inconnu et on incremente le compteur
			$sql="insert into stat (id,time,duree) values ('$adress','$time','$time')";
			$this->Stat->create();
			$this->Stat->set('id', $adress);
			$this->Stat->set('time', $time);
			$this->Stat->set('duree', $time);
			$this->Stat->save($this->request->data);
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
				
				//on cree une ligne fictive pour pouvoir le comptabilisé dans les connectés de jour
				$adress1=$adress.".".$compteur;
				$this->Stat->create();
				$this->Stat->set('id', $adress1);
				$this->Stat->set('time', $time);
				$this->Stat->set('duree', $time);
				$this->Stat->save($this->request->data);
				
				//et on increment le compteur de visite
				$compteur+=1;
				$this->Stat->query("update stat set compteur=$compteur where id='compteur';");
			}
			else
			{
				//on met a jour son heure de passage si elle est superieure a t
				if ($time > $time1 + $t)
				{
					$this->Stat->query("update stat set time=$time where id='$adress';");
				}
			}
		}


		//on compte le nb de connecté de la journée
		$compteur_j = $this->Stat->find('count') - 1;

		//on compte le nb de connecté
		$time-=$t;
		$compteur_c = $this->Stat->find('count', array('conditions' => array('time >=' => $time, 'id !=' => 'compteur')));
		$this->set('nbUser', $compteur);
		$this->set('nbUserToday', $compteur_j);
		$this->set('nbUserNow', $compteur_c);
	}

}
