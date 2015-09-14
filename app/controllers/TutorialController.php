<?php

use models\Tutorials;

class TutorialController extends BaseController {
    
	public function index() {
        $tutorials = Tutorials::getTutorials();
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials));
	}
    
    public function android() {
        
	}
    
    public function ios() {
        
	}
    
    public function php() {
        
	}
    
    public function tutorialDetails() {
        return View::make('pages.tutorials.details');
    }

}
