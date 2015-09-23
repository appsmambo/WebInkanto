<?php

class HomeController extends BaseController {

	public function getInicio()
	{
		return View::make('inicio')->with('clase', 'inicio');
	}
	
	public function getIlRistorante()
	{
		return View::make('il-ristorante')->with('clase', 'il-ristorante');
	}

}
