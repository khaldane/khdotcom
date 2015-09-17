<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Tutorials extends Eloquent  {

    public static function getTutorials() {
        return DB::table('tutorials')->orderBy('id','asc')->get();
    }
    
    public static function getTutorial($id) {
        return DB::table('tutorials')->where('id',$id)->get();
    }
    
        public static function getTutorialType($type) {
        return DB::table('tutorials')->where('type',$type)->get();
    }
}