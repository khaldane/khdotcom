<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Gaming extends Eloquent  {

    /**
	  * Get character details
      *
	  * @return Response
	  */
    public static function getCharacter() {
        return DB::table('wowcharacters')
            ->where('wowcharacters.name', 'Khaazix')
            ->join('gender', 'wowcharacters.gender', '=', 'gender.genderId')
            ->join('wowrace', 'wowcharacters.race', '=', 'wowrace.raceId')
            ->join('wowclass', 'wowcharacters.class', '=', 'wowclass.classId')
            ->select('wowcharacters.*', 'wowclass.name AS className', 'wowrace.name AS raceName', 'gender.type')
            ->get();
    }
    
    /**
	  * Get wow characters
      *
	  * @return Response
	  */
    public static function getCharacters() {
        return DB::table('wowcharacters')
            ->join('gender', 'wowcharacters.gender', '=', 'gender.genderId')
            ->join('wowrace', 'wowcharacters.race', '=', 'wowrace.raceId')
            ->join('wowclass', 'wowcharacters.class', '=', 'wowclass.classId')
            ->select('wowcharacters.*', 'wowclass.name AS className', 'wowrace.name AS raceName', 'gender.type')
            ->orderby('id', 'asc')
            ->get(); 
    }
    
    /**
	  * Get wow stats
      *
	  * @return Response
	  */
    public static function getStats() {
         return DB::table('wowstats')->get(); 
    }
    
    /**
	  * Get wow equipment
      *
	  * @return Response
	  */
    public static function getEquipment() {
        return DB::table('equipment')->get();   
    }
       
    /**
	  * Get diablo career
      *
	  * @return Response
	  */
    public static function getCareer() {
        return DB::table('diablocareer')->get();   
    }
    
    /**
	  * Get diablo characters
      *
	  * @return Response
	  */
    public static function getDiabloCharacters() {
        return DB::table('diablocharacters')->get();   
    }
    
    /**
	  * Get diablo gear
      *
	  * @return Response
	  */
    public static function getDiabloGear() {
        return DB::table('diablogear')->get();   
    }
}