<?php 

use models\Portfolio;

class PortfolioController extends BaseController {
    
	public function index()
	{
        $caseStudies = Portfolio::getCaseStudies();
		return View::make('pages.portfolio', array('caseStudies' => $caseStudies));
	}

}
