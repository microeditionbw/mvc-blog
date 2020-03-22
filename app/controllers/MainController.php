<?php
/**
 * Main class
 */

class MainController extends Controller
{
    public $model;
    public function __construct($router) {
    	$model = $router['controller'].'Model';
        $this->model = new $model;
        $this->view = new View($router);
    }

	function actionIndex()
	{
		$this->ArticlesNav();
	}

	function actionAbout()
	{
		$this->view->layout = 'info';
		$this->view->render("Главная");
	}

	function ArticlesNav()
	{
		$articles = new ArticleModel();
		$interval = 5;
		$page = 0;
		if(isset($_GET['p']) and $_GET['p'] > 0)
		{
			$page = Dev::XSSClear($_GET['p']);
		}
		if($page >= 0 )
		{
			$article = $articles->getArticlesPage($page, $interval);
			$nextExist = count($articles->getArticlesPage($page+1, 5));
			if(count($article)>0)
			{
				$this->view->render("Главная", array('article' => $article, 'page' => $page, 'nextExist' => $nextExist));
			}else{
				View::errorCode(404);
			}
		}
	}

	function search($s)
	{
		$size = mb_strlen($s, 'UTF-8');
		if($size < 100) //max $s.size < 100
		{
			$articles = new ArticleModel();
			$interval = 5;
			$page = 0;
			if(isset($_GET['p']) and $_GET['p'] > 0)
			{
				$page = Dev::XSSClear($_GET['p']);
			}
			if($page >= 0 )
			{
				$article = $articles->getSearchArticle($page, $interval, $s);
				$nextExist = count($articles->getSearchArticle($page+1, 5, $s));
				if(count($article)>0)
				{
					$this->view->render("Главная", array('article' => $article, 'page' => $page, 'nextExist' => $nextExist, 'query' => $s));

				}else{
					$this->view->render("Главная", array('article' => ""));
				}
			}
		}else{
			View::errorCode(404);
		}
	}
	
	function actionSearch()
	{
		if(isset($_GET['query']) and !empty($_GET['query']))
		{
			$this->search($_GET['query']);
			exit;
		}else{
			$this->ArticlesNav();
		}
	}

}