<?php

use models\Admin;

class AdminController extends BaseController {
    
	public function __construct() {
		$this->beforeFilter('auth');
	}
    
	public function index() {
        $portfolio = Admin::getPortfolio();
        $tutorials = Admin::getTutorials(); 
		return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
	}
    
    public function portfolioCreate() {
        return View::make('pages.admin.admin-portfolio');
    }
    
    
    public function portfolioEdit() {        
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
    
    
    public function portfolioDelete() {        
        if($_GET) {
            $id = $_GET['id'];
             
        } else {
            $portfolio = Admin::getPortfolio();
            $tutorials = Admin::getTutorials(); 
            return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
        }
    }
    
    public function portfolioSave() {
        
    }
    

    public function tutorialCreate() {
        return View::make('pages.admin.admin-tutorial');
    }
    
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
    
    public function tutorialSave() {
        $save = Admin::saveTutorial();
        $portfolio = Admin::getPortfolio();
        $tutorials = Admin::getTutorials(); 
        return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
    }
}
