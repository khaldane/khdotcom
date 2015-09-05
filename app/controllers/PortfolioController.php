<?php 

use models\Portfolio;

class PortfolioController extends BaseController {
    
	public function index()
	{
        $caseStudies = Portfolio::getCaseStudies();
		return View::make('pages.portfolio.portfolio', array('caseStudies' => $caseStudies));
	}
    
    public function details() {
        //Check if url contains a valid id
        if($_GET) {
            //Get the id
            $id = $_GET["id"];

            $caseStudy = Portfolio::getCaseStudy($id);
            if(sizeof($caseStudy) > 0) {
                return View::make('pages.portfolio.details', array('caseStudy' => $caseStudy[0]));  
            } else {
                //redirect somewhere else
            }
        } else {
             //redirect somewhere else
        }       
    }
}
