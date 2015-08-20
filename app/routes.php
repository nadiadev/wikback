<?php
	
	$w_routes = array(
		//accueil de l'admin (affiche tous les termes)
		['GET', '/admin/termes/', 'Term#showAll', 'show_all_terms'],

		//efface un terme
		['GET', '/admin/termes/delete/[i:id]', 'Term#delete', 'delete'],

		//modifie un terme
		['GET|POST', '/admin/termes/modification/[i:id]', 'Term#edit', 'edit_term'],

		//change le mot du jour
		['GET', '/admin/termes/nouveau-mdj/[i:id]', 'Term#changeWotd', 'change_wotd'],

		//crée un nouvel administrateur
		['GET|POST', '/admin/administrateurs/inscription/', 'User#register', 'register_administrator'],
	);