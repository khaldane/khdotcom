<?php

use models\Gaming;

class GamingController extends BaseController {

    /**
	  * Get warcraft character info
      *
	  * @return Response
	  */
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
                                                       'equipment' => $equipment,
                                                       'type' => 'warcraft'
                                                      ));
	}
    
    /**
	  * Get diablo character info
      *
	  * @return Response
	  */
    public function diablo() {
        $career = Gaming::getCareer();
        $characters = Gaming::getDiabloCharacters();
        $gear = Gaming::getDiabloGear();
        
        return View::make('pages.gaming.gaming', array('career' => $career[0], 
                                                       'characters' => $characters, 
                                                       'gear' => $gear,
                                                       'type' => 'diablo'
                                                      ));
    }
    
    /**
	  * Get hots
      *
	  * @return Response
	  */
    public function hots() {
        return View::make('pages.gaming.gaming', array('type' => 'hots'));
    }
}
