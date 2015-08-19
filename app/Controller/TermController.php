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
		$terms = $termManager->findAll();

		
		$this->show('term/show_all_terms', ['terms' => $terms]);
	}

}