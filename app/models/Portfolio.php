<?php 

namespace models;

use Illuminate\Support\Facades\Input;
use Eloquent, Hash, DB;

class Portfolio extends Eloquent  {

    public static function getCaseStudies() {
        return DB::table('portfolio')->orderBy('id','desc')->get();
    }
    
}