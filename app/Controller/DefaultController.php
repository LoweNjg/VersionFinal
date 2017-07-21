<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		DbFactory::start();
		$utilisateurs = \ORM::for_table('t_utilisateurs')->where('id_utilisateur','1')->find_result_set();
		$loisir = \ORM::for_table('t_loisirs')->where('utilisateur_id','1')->find_result_set();
		$titres = \ORM::for_table('t_titres_cv')->where('utilisateur_id','1')->find_one();
		$formations = \ORM::for_table('t_formations')->where('utilisateur_id','1')->find_result_set();
		$this->show('default/home',['utilisateurs' => $utilisateurs, 'titres' => $titres, 'formations'=> $formations]);
	}

}
