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
	
	public function getLaCucina()
	{
		return View::make('la-cucina-peruviana')->with('clase', 'la-cucina-peruviana')->with('uri', $this->_uri);
	}
	
	public function getIlMenu()
	{
		return View::make('il-menu')->with('clase', 'il-menu')->with('uri', $this->_uri);
	}
	
	public function getGallery()
	{
		return View::make('gallery')->with('clase', 'gallery')->with('uri', $this->_uri);
	}
	
	public function getPreNota()
	{
		return View::make('prenota')->with('clase', 'prenota')->with('uri', $this->_uri);
	}
	
	public function getContatti()
	{
		return View::make('contatti')->with('clase', 'contatti')->with('uri', $this->_uri);
	}
	
}
