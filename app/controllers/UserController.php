<?php
/**
 * User class
 */

class UserController extends Controller
{
	function actionIndex()
	{
		echo "hi index!";
	}

	function actionRegister()
	{
		$this->view->layout = 'info';
		$this->view->render("Регистрация");
		debug($this->view->route);
	}
}