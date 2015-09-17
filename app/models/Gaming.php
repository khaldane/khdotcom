<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Gaming extends Eloquent  {

    public static function getCharacter() {
        return DB::table('wowcharacters')
            ->where('wowcharacters.name', 'Khaazix')
            ->join('gender', 'wowcharacters.gender', '=', 'gender.genderId')
            ->join('wowrace', 'wowcharacters.race', '=', 'wowrace.raceId')
            ->join('wowclass', 'wowcharacters.class', '=', 'wowclass.classId')
            ->select('wowcharacters.*', 'wowclass.name AS className', 'wowrace.name AS raceName', 'gender.type')
            ->get();
    }
    
    public static function getCharacters() {
        return DB::table('wowcharacters')
            ->join('gender', 'wowcharacters.gender', '=', 'gender.genderId')
            ->join('wowrace', 'wowcharacters.race', '=', 'wowrace.raceId')
            ->join('wowclass', 'wowcharacters.class', '=', 'wowclass.classId')
            ->select('wowcharacters.*', 'wowclass.name AS className', 'wowrace.name AS raceName', 'gender.type')
            ->orderby('id', 'asc')
            ->get(); 
    }
    
    public static function getEquipment() {
        return DB::table('equipment')->get();   
    }
       
    public static function getCareer() {
        return DB::table('diablocareer')->get();   
    }
    
    public static function getDiabloCharacters() {
        return DB::table('diablocharacters')->get();   
    }
    
    public static function getDiabloGear() {
        return DB::table('diablogear')->get();   
    }
}