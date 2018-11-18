<?php

	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'dashboard'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the default routes. 
 */
	require CAKE . 'Config' . DS . 'routes.php';
