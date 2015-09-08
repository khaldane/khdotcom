<?php

use models\Tutorials;

class TutorialController extends BaseController {
    
	public function index() {
        $tutorials = Tutorials::getTutorials();
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials));
	}

}
