<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Portfolio extends Eloquent  {

    /**
	  * Get all case studies
      *
	  * @return case studies
	  */
    public static function getCaseStudies() {
        return DB::table('portfolio')->orderBy('id','desc')->get();
    }
    
    /**
	  * Get a specific case study
      *
      * @param case study id
	  * @return details
	  */
    public static function getCaseStudy($id) {
        return DB::table('portfolio')->where('tag', $id)->get();
    }
    
}