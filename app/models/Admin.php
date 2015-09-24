<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Admin extends Eloquent  {

    /**
	  * Get all case studies
      *
	  * @return case studies array
	  */
    public static function getPortfolio() {
        return DB::table('portfolio')->orderBy('id','desc')->get();
    }
    
    /**
	  * Get a specific case study
      *
      * @param id
	  * @return case study details
	  */
    public static function getCaseStudy($id) {
        return DB::table('portfolio')->where('id', $id)->get();   
    }
    
    
    /**
	  * Get all tutorials
      *
	  * @return tutorials array
	  */
    public static function getTutorials() {
        return DB::table('tutorials')->orderBy('id','desc')->get();
    }
    
    /**
	  * Get tutorial details
      *
	  * @return tutorial
	  */
    public static function getTutorial($id) {
        return DB::table('tutorials')->where('id', $id)->get();   
    }
    
    /**
	  * Update case study
      *
	  * @return Response
	  */
    public static function updatePortfolio($id) {
        return DB::table('portfolio')->where('id', $id)->update([
            'companyName' => $_POST['companyName'],
            'shortDescription' => $_POST['shortDescription'],
            'description' => $_POST['editor1'],
            'type' => $_POST['type'],
            'languages' => $_POST['languages'],
            'frameworks' => $_POST['frameworks'],
            'features' => $_POST['features'],
            //'featuredImg' => $_POST['featuredImg'],
            //'mobileImg' => $_POST['mobileImg'],
            //'secondaryImg' => $_POST['secondaryImg'],
            //'mainImg' => $_POST['mainImg'],
            'website' => $_POST['website'],
            'tag' => $_POST['tag'],
            'tools' => $_POST['tools'],
            'secondaryDescription' => $_POST['secondaryDescription']
        ]);
    }
    
    /**
	  * Save a new tutorial
      *
	  * @return Response
	  */
    public static function saveTutorial() {
        return DB::table('tutorials')->insert([
            ['title' =>  $_POST['title'], 'type' => $_POST['type'], 'description' => $_POST['description']]
        ]);
    }
    
}