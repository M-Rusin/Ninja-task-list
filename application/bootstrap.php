<?php

// подключаем файлы ядра

spl_autoload_register(function ($class) {
    include 'core/' . strtolower($class) . '.php';
});


	function checkAuth()
	{
		$cheker = false;
		$status = $_SESSION['login_status'] ?? '';
		if($status == 'access_granted')
			$cheker = true;

		return $cheker;
	}

session_start(); 

Route::start(); // запускаем маршрутизатор
