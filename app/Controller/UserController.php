<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller
{

	public function register()
	{
		//formulaire d'inscription soumis ?
		if (!empty($_POST)){
			//ninja shit
			foreach($_POST as $k => $v){
				//crée une variable $username, $email, $password, etc...
				$$k = trim(strip_tags($v));
			}

		//validation
			//username assez long

			//email valide

			//mots de passe correspondent ?

		//si valide...
			//hacher le mot de passe
			//insérer en base
			//afficher bravo ou rediriger ou faire quelque chose de bien

		//si invalide..
			//envoyer les erreurs et les données soumises à la vue
		}
		$dataToPassToTheView = [];

		$this->show('user/register_administrator', $dataToPassToTheView);
		
	}

}