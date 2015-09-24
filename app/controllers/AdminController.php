<?php

use models\Admin;

class AdminController extends BaseController {
    
    /**
	  * Make sure the user is authenticated
      */
	public function __construct() {
		$this->beforeFilter('auth');
	}
    
    /**
	  * Get all editable content
	  *
	  * @return Response
	  */
	public function index() {
        $portfolio = Admin::getPortfolio();
        $tutorials = Admin::getTutorials(); 
		return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
	}
    
    /**
	  * Create new portfolio item
      *
	  * @return Response
	  */
    public function portfolioCreate() {
        return View::make('pages.admin.admin-create-portfolio');
    }
    
    /**
	  * Edit portfolio item
      *
	  * @return Response 
	  */
    public function portfolioEdit() {        
        if($_GET) {
            $id = $_GET['id'];
            $caseStudy = Admin::getCaseStudy($_GET['id']);
            return View::make('pages.admin.admin-edit-portfolio', array('caseStudy' => $caseStudy[0]));
        } else {
            $portfolio = Admin::getPortfolio();
            $tutorials = Admin::getTutorials(); 
            return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
        }
    }
    
    /**
	  * Update portfolio item
      *
	  * @return Response
	  */
    public function portfolioUpdate() {
        $update = Admin::updatePortfolio($_POST['id']);
        $portfolio = Admin::getPortfolio();
        $tutorials = Admin::getTutorials(); 
        return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
    }
    
    /**
	  * Delete portfolio item
      *
	  * @return Response
	  */
    public function portfolioDelete() {        
        if($_GET) {
            $id = $_GET['id'];
        } else {
            $portfolio = Admin::getPortfolio();
            $tutorials = Admin::getTutorials(); 
            return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
        }
    }
    
    /**
	  * Save portfolio item
      *
	  * @return Response
	  */
    public function portfolioSave() {
        
    }
    
    /**
	  * Create new tutorial item
      *
	  * @return Response
	  */
    public function tutorialCreate() {
        return View::make('pages.admin.admin-tutorial');
    }
    
    /**
	  * Edit tutorial item
      *
	  * @return Response
	  */
    public function tutorialEdit() {
        if($_GET) {
            $id = $_GET['id'];
            $tutorial = Admin::getTutorial($_GET['id']);
            return View::make('pages.admin.admin-tutorial', array('tutorial' => $tutorial[0]));  
        } else {
            $portfolio = Admin::getPortfolio();
            $tutorials = Admin::getTutorials(); 
            return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
        }
    }
    
    /**
	  * Delete tutorial item
      *
	  * @return Response
	  */
    public function tutorialDelete() {
        if($_GET) {
            $id = $_GET['id'];
            $caseStudy = Admin::getCaseStudy($_GET['id']);
            return View::make('pages.admin.admin-portfolio', array('caseStudy' => $caseStudy[0]));
        } else {
            $portfolio = Admin::getPortfolio();
            $tutorials = Admin::getTutorials(); 
            return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
        }
    }
    
    /**
	  * Save tutorial item
      *
	  * @return Response
	  */
    public function tutorialSave() {
        $save = Admin::saveTutorial();
        $portfolio = Admin::getPortfolio();
        $tutorials = Admin::getTutorials(); 
        return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
    }
}
