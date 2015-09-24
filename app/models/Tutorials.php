<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Tutorials extends Eloquent  {

    /**
	  * Get all tutorials
      *
	  * @return tutorials array
	  */
    public static function getTutorials() {
        return DB::table('tutorials')->orderBy('id','asc')->get();
    }
    
    
     /**
	  * Get a specific tutorial
      *
      * @params tutorial id
	  * @return tutorial details
	  */
    public static function getTutorial($id) {
        return DB::table('tutorials')->where('id',$id)->get();
    }
    
    /**
	  * Get tutorial by type
      *
      * @param tutorial type (eg. cosplay, android, php, ios)
	  * @return tutorials array
	  */
    public static function getTutorialType($type) {
        return DB::table('tutorials')->where('type',$type)->orderBy('id','desc')->get();
    }
}