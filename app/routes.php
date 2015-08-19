<?php
	
	$w_routes = array(
		['GET', '/admin/termes/', 'Term#showAll', 'show_all_terms'],
		['GET', '/admin/termes/delete/[i:id]', 'Term#delete', 'delete'],
		['GET|POST', '/admin/termes/modification/[i:id]', 'Term#edit', 'edit_term'],
	);