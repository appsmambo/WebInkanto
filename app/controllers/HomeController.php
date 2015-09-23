<?php

class HomeController extends BaseController {

	private $_uri;
	
	public function __construct()
	{
		$this->_uri = Request::path();
	}
	
	public function getInicio()
	{
		return View::make('inicio')->with('clase', 'inicio')->with('uri', $this->_uri);
	}
	
	public function getIlRistorante()
	{
		return View::make('il-ristorante')->with('clase', 'il-ristorante')->with('uri', $this->_uri);
	}

}
