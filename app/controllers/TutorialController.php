<?php

class TutorialController extends BaseController {
    
	public function index()
	{
		return View::make('pages.tutorials.tutorials');
	}

}
