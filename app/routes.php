<?php
	
	$w_routes = array(
		//accueil de l'admin (affiche tous les termes)
		['GET', '/admin/termes/', 'Term#showAll', 'show_all_terms'],


		['GET', '/admin/termes/delete/[i:id]', 'Term#delete', 'delete'],
		['GET|POST', '/admin/termes/modification/[i:id]', 'Term#edit', 'edit_term'],
		['GET', '/admin/termes/nouveau-mdj/[i:id]', 'Term#changeWotd', 'change_wotd'],
	);