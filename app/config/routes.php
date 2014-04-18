<?php

$router = new Phalcon\Mvc\Router();
$router->removeExtraSlashes(true);

$router->add('/login',array(
				'controller'=>'session',
				'action'	=>'login',
			));
$router->add('/view/{id:[0-9]+}/{slug}', array(
	'controller' => 'posts',
	'action' => 'show'
));
//set languages
$router->add("/set-language/{language:[a-zA-Z\_]+}", array(
    'controller' => 'index',
    'action' => 'setLanguage'
));
//display all articles via category
$router->add('/category/{categoryId:[0-9]+}/{userId:[0-9]+}', array(
	'controller' => 'posts',
	'action' => 'show'
));

return $router;