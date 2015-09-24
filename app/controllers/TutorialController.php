<?php

use models\Tutorials;

class TutorialController extends BaseController {
    
    /**
	  * Get tutorials
      *
	  * @return Response
	  */
	public function index() {
        $tutorials = Tutorials::getTutorialType('Cosplay');
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials, 'type' => 'cosplay'));
	}
    
    /**
	  * Get android tutorials
      *
	  * @return Response
	  */
    public function android() {
        $tutorials = Tutorials::getTutorialType('Android');
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials, 'type' => 'android'));
	}
    
    /**
	  * Get iOS tutorials
      *
	  * @return Response
	  */
    public function ios() {
        $tutorials = Tutorials::getTutorialType('iOS');
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials, 'type' => 'ios'));
	}
    
    /**
	  * Get PHP tutorials
      *
	  * @return Response
	  */
    public function php() {
        $tutorials = Tutorials::getTutorialType('PHP');
		return View::make('pages.tutorials.tutorials', array('tutorials' => $tutorials, 'type' => 'php'));
	}
    
    /**
	  * Get tutorial details
      *
	  * @return Response
	  */
    public function tutorialDetails() {
        $tutorial = Tutorials::getTutorial($_GET['id']);
        return View::make('pages.tutorials.details', array('tutorial' => $tutorial[0]));
    }

}
