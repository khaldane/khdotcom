<?php 

use models\Portfolio;

class PortfolioController extends BaseController {
    
    /**
	  * Get case studies
      *
	  * @return Response
	  */
	public function index()
	{
        $caseStudies = Portfolio::getCaseStudies();
		return View::make('pages.portfolio.portfolio', array('caseStudies' => $caseStudies));
	}
    
    /**
	  * Get portfolio details
      *
	  * @return Response
	  */
    public function details() {
        if($_GET) {
            $id = $_GET["id"];
            $caseStudy = Portfolio::getCaseStudy($id);
            $caseStudies = Portfolio::getCaseStudies();
            if(sizeof($caseStudy) > 0) {
                return View::make('pages.portfolio.details', array('caseStudy' => $caseStudy[0]));  
            } else {
                return View::make('pages.portfolio.portfolio', array('caseStudies' => $caseStudies));
            }
        } else {
             return View::make('pages.portfolio.portfolio', array('caseStudies' => $caseStudies));
        }       
    }
}
