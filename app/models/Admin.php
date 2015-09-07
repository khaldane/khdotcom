<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Admin extends Eloquent  {

    public static function getPortfolio() {
        return DB::table('portfolio')->orderBy('id','desc')->get();
    }
    
    public static function getCaseStudy($id) {
        return DB::table('portfolio')->where('id', $id)->get();   
    }
    
    public static function getTutorials() {
        return DB::table('tutorials')->orderBy('id','desc')->get();
    }
    
    public static function getTutorial($id) {
        return DB::table('tutorials')->where('id', $id)->get();   
    }
    
    public static function saveTutorial() {
        return DB::table('tutorials')->insert([
            ['title' =>  $_POST['title'], 'type' => $_POST['type'], 'description' => $_POST['description']]
        ]);
    }
}