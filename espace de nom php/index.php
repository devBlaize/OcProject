<?php
	declare(strict_types=1);

	//require_once("App/Domaine/autoload.php");
	

	use src\Domaine\forum\Message;
	use src\Domaine\User\user;
	
	$utilisateur = new user;
	$utilisateur->name = 'Greg';

	$forumMessage = new Message($utilisateur, 'J\'aime les pates.');

	var_dump($forumMessage);