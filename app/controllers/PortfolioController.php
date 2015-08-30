<?php 

use models\Portfolio;

class PortfolioController extends BaseController {
    
	public function index()
	{
        $caseStudies = Portfolio::getCaseStudies();
		return View::make('pages.portfolio.portfolio', array('caseStudies' => $caseStudies));
	}
    
    public function details() {
        return View::make('pages.portfolio.details');
    }
}
