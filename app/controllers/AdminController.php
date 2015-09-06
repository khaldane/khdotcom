<?php

use models\User;

class AdminController extends BaseController {
    
	public function __construct()
	{
		$this->beforeFilter('auth');
	}
    
	public function index()
	{
		return View::make('pages.admin.admin-panel');
	}
}
