<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{
		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];

			if($login=="admin" && $password=="123")
			{
				$data["login_status"] = "access_granted";
				echo $_SESSION['message'] = "Добро пожаловать, Каге!";
			}
			else
			{
				$data["login_status"] = "access_denied";
				echo $_SESSION['message'] = "Шпионам здесь не место!";
			}

			$_SESSION['login_status'] = $data["login_status"];
			if( $data["login_status"] == "access_granted")
				header('Location:/todo/');
		}
		
		$this->view->generate('login_view.php', 'template_view.php');
	}

	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}
	
}
