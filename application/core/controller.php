<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{

        echo $_SESSION['message'] ? : ''; 
        $_SESSION['message'] = '';
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		//
	}
}
