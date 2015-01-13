<?php

class MainController extends Phalcon\Mvc\Controller
{
	public function indexAction()
	{
		echo 'A spaceship is coming...';
	}
	
	public function organizationAction()
	{
		$this->view->setLayout('organization');
	}
}
