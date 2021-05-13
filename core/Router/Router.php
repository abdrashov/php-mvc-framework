<?php

namespace Core\Router;

use Core\View\View;

class Router
{
	protected $routes = [];
	protected $params = [];

	public function __construct()
	{
		$routes = require __DIR__ . '/../../routes.php';
		foreach ($routes as $route => $params) {
			$this->apply($route, $params);
		}
	}

	private function apply($route, $params)
	{
		$this->routes['#^'.$route.'$#'] = $params;
	}

	private function match()
	{
		$url = trim($_SERVER['REQUEST_URI'], '/');
		foreach ($this->routes as $route => $params) {
			if (preg_match($route, $url, $match)) {
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	public function run()
	{
		if (!$this->match()) {
			return abort(404);
		}

		$controller = 'App\\Controller\\' . $this->params['controller'];
		$action = $this->params['action'];

		if (!class_exists($controller)) {
			return dd('Class Not Found');
		}

		if (!method_exists($controller, $action)) {
			return dd('Method Not Found');
		}

		return (new $controller($this->params))->$action();
	}

}