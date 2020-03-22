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
		echo "hi register!";
		debug($this->view->route);
	}
}