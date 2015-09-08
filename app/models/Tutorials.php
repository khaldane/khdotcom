<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Tutorials extends Eloquent  {

    public static function getTutorials() {
        return DB::table('tutorials')->orderBy('id','desc')->get();
    }
    
    public static function getTutorial($id) {
        return DB::table('tutorials')->where('id',$id)->get();
    }
}