<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Gaming extends Eloquent  {

    public static function getCharacter() {
        return DB::table('wowcharacters')->where('name', 'Khaazix')->get();
    }
    
    public static function getCharacters() {
        return DB::table('wowcharacters')->skip(1)->take(7)->get(); 
    }
}