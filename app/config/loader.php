<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
	'PhalconBook\Models' => $config->application->modelsDir,
	'PhalconBook\Controllers' => $config->application->controllersDir,
	
))->register();








/**
 * Nếu bạn muốn chạy namespace thì thây code này ở trên
 */
/*$loader->registerNamespaces(array(
	'PhalconBook\Models' => $config->application->modelsDir,
	'PhalconBook\Controllers' => $config->application->controllersDir,
	
)->register();*/