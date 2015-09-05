<?php

class AdminController extends BaseController {
    
	public function index()
	{
		return View::make('pages.admin.login');
	}

    public function authenticate() {
        
    }
}
