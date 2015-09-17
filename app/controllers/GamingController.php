<?php

use models\Gaming;


class GamingController extends BaseController {
    
	public function index()
	{
        //https://dev.battle.net/io-docs
        $character = Gaming::getCharacter();
        
        $stats = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=stats&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        
        $equipment = Gaming::getEquipment();
        
        $characters = Gaming::getCharacters();
        
		return View::make('pages.gaming.gaming', array('character' => $character[0], 
                                                       'characters' => $characters, 
                                                       'stats' => json_decode($stats),
                                                       'equipment' => $equipment
                                                      ));
	}
    
    public function diablo() {

        $career = Gaming::getCareer();
        $characters = Gaming::getDiabloCharacters();
        $gear = Gaming::getDiabloGear();
        
        
        return View::make('pages.gaming.diablo', array('career' => $career[0], 'characters' => $characters, 'gear' => $gear));
    }
    
    public function hots() {
        return View::make('pages.gaming.hots');
    }
}
