<?php

namespace Controller;

use \W\Controller\Controller;

class TermController extends Controller
{



	/**
	 * Page d'accueil par défaut
	 */
	public function showAll()
	{

		$termManager = new \Manager\termManager();
		$terms = $termManager->findAll("modifiedDate", "DESC");



		
		$this->show('term/show_all_terms', ['terms' => $terms]);
	}

	public function delete($id)
	{
		$termManager = new \Manager\termManager();
		$termManager->delete($id);
		$this->redirectToRoute('show_all_terms');
	}

	public function edit($id)
	{
		$termManager = new \Manager\termManager();
		//si le formulaire est soumis...($_POST n'est pas vide)
		if (!empty($_POST)){

			//
			$name = trim($_POST['name']);

		//valider...au moins 1 minimum
			if (strlen($name) > 1){
				
		//sauvegarder les modifications avec ->update() du TermManager
				$date = [
				"name" => $name,
				"modifiedDate" => date("Y-m-d H:i:s"),
				];
				$termManager->update($date, $id);

				$this->redirectToRoute('show_all_terms');

			}
		}


		//récupérer en bdd le terme à modifier
		//grâce au TermManager et à l'id
		$term = $termManager->find($id);

		//debug($term);

		//passer le terme à la vue, afin de rendre la variable disponible
		$this->show('term/edit_terms', ["term" => $term]);
	}

	public function changeWotd($id)
	{
		$termManager = new \Manager\TermManager();
		//sélectionner le mot du jour actuel	
		$wotd = $termManager->getCurrentWordOfTheDay();

		//faire un update sur l'ancien mot du jour pour le mettre à 0
		$termManager->update(["is_wotd" => 0], $wotd['id']);

		//faire un update sur le nouveau mot du jour pour le mettre à 1
		$termManager->update(["is_wotd" => 1], $id);

		//rediriger vers la page d'accueil
		$this->redirectToRoute('show_all_terms');
		

	}

}