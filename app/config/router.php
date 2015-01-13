<?php

$router = new Phalcon\Mvc\Router(false);

$router->add('/', [
	'controller'	=> 'main',
	'action'		=> 'index'
])->setName('home');

$router->add('/organization', [
	'controller'	=> 'main',
	'action'		=> 'organization'
])->setName('organization');

$router->add('/bridge-view', [
	'controller'	=> 'organization',
	'action'		=> 'bridgeView'
])->setName('bridgeView');

$router->add('/controlCenter-view', [
	'controller'	=> 'organization',
	'action'		=> 'controlCenterView'
])->setName('controlCenterView');

$router->add('/crewCabin-view', [
	'controller'	=> 'organization',
	'action'		=> 'crewCabinView'
])->setName('crewCabinView');

$router->add('/observationRoom-view', [
	'controller'	=> 'organization',
	'action'		=> 'observationRoomView'
])->setName('observationRoomView');

$router->add('/Wardroom-view', [
	'controller'	=> 'organization',
	'action'		=> 'wardroomView'
])->setName('wardroomView');

$router->add('/auxiliaryControlCenter-view', [
	'controller'	=> 'organization',
	'action'		=> 'auxiliaryControlCenterView'
])->setName('auxiliaryControlCenterView');

$router->add('/engineControlCenter-view', [
	'controller'	=> 'organization',
	'action'		=> 'engineControlCenterView'
])->setName('engineControlCenterView');

