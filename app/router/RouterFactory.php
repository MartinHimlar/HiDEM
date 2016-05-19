<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;

		$router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
		$router[] = new Route('uvod', 'Homepage:default');
		$router[] = new Route('dane', 'Homepage:taxation');
		$router[] = new Route('ucetnictvi', 'Homepage:accounting');
		$router[] = new Route('mzdy', 'Homepage:payroll');
		$router[] = new Route('provize', 'Homepage:commission');
		$router[] = new Route('odkazy', 'Homepage:links');
		$router[] = new Route('poloha', 'Homepage:map');
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');

		return $router;
	}

}
