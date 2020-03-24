<?php
/**
 * Nav class
 */

class NavController
{
	public $menu;
	private $path;

	function __construct()
	{
		$this->menu = 'mainmenu';
		$path = "app/config/navigation.php";
		if(file_exists($path))
		{
			$this->urls = require_once $path;
		}else { exit; }
	}

	function instance()
	{
		$this->nav($this->urls, $this->menu);
	}

	function nav($urls, $menu)
	{
		foreach ($urls as $key => $value) {
			if($key == $menu)
			{
				foreach ($value as $key => $link) {
					echo '<li><a href="'. URLROOT . $key.'">'.$link["title"]."</a></li>";
				}
			}
		}
	}
}