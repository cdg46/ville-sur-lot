<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bootstrap_package".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Ville sur Lot',
	'description' => 'Modele 2 colonnes et 3 lignes basé sur Bootstrap Package pour Typo3 6.2',
	'category' => 'templates',
	'version' => '6.2.9-dev',
	'dependencies' => '',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => 1,
	'author' => 'Claire HARLEZ',
	'author_email' => 'claire.harlez@cdgfpt46.fr',
	'author_company' => 'CDG46',
	'constraints' => array(
		'depends' =>
		array(
			'typo3' => '6.2.6-7.99.99',
			'css_styled_content' => '6.2.0-7.99.99',
		),
		'conflicts' =>
		array(
		),
		'suggests' =>
		array(
			'realurl' => '1.12.8-1.12.99',
		)
	),
);
