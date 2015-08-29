<?php

class PortfolioController extends BaseController {
    
	public function index()
	{
		return View::make('pages.portfolio');
	}

}
