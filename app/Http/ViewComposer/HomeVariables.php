<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class HomeVariables
{

	public function compose(View $view)
	{
		$view->with('home_variable', 'Home Variable');
	}

}