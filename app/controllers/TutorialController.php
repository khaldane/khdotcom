<?php

use models\Tutorials;

class TutorialController extends BaseController {
    
	public function index() {
        $tutorials = Tutorials::getTutorialType('Cosplay');
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials));
	}
    
    public function android() {
        $tutorials = Tutorials::getTutorialType('Android');
		return View::make('pages.tutorials.android', array('tutorials' => $tutorials));
	}
    
    public function ios() {
        $tutorials = Tutorials::getTutorialType('iOS');
		return View::make('pages.tutorials.ios', array('tutorials' => $tutorials));
	}
    
    public function php() {
         $tutorials = Tutorials::getTutorialType('PHP');
		return View::make('pages.tutorials.php', array('tutorials' => $tutorials));
	}
    
    public function tutorialDetails() {
        $tutorial = Tutorials::getTutorial($_GET['id']);
        return View::make('pages.tutorials.details', array('tutorial' => $tutorial[0]));
    }

}
