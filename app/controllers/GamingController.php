<?php

use models\Gaming;


class GamingController extends BaseController {
    
	public function index()
	{
        //https://dev.battle.net/io-docs
        $character = Gaming::getCharacter();
        $stats = Gaming::getStats();
        $equipment = Gaming::getEquipment();
        $characters = Gaming::getCharacters();
        
		return View::make('pages.gaming.gaming', array('character' => $character[0], 
                                                       'characters' => $characters, 
                                                       'stats' => $stats[0],
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
