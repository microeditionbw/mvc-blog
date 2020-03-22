<?php
/**
 * Article class
 */

class ArticleController extends Controller
{
    public $model;
    public $id;
    public function __construct($router) 
    {
		$this->id = $router['data'];
		$model = $router['controller'].'Model';
	    $this->model = new $model;
	    $this->view = new View($router);

    }

	function actionIndex()
	{
		echo "Все артикли";
	}

	function actionShow()
	{
		if(is_numeric($this->id))
		{
			$article = $this->model->getArticleById($this->id);
			if($this->id and $article)
			{
				$this->view->layout = 'single';
				$this->view->render($article['header'], $article);
			}else{
				View::errorCode(404);
			}
		}else
		{
			View::errorCode(404);
		}

	}
}