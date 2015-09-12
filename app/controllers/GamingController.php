<?php

use models\Gaming;


class GamingController extends BaseController {
    
	public function index()
	{
        //https://dev.battle.net/io-docs
        $character = Gaming::getCharacter();
        $stats = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=stats&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        $gear = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=items&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        $equipment = Gaming::getEquipment();
        $feed = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=feed&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        
        $characters = Gaming::getCharacters();
        
        $achievements = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=achievements&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        
        $pets = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=pets&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        $mounts = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=mounts&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');       
        
		return View::make('pages.gaming.gaming', array('character' => $character[0], 
                                                       'characters' => $characters, 
                                                       'gear' => json_decode($gear), 
                                                       'feed' => json_decode($feed), 
                                                       'stats' => json_decode($stats), 
                                                       'pets' => json_decode($pets), 
                                                       'mounts' => json_decode($mounts), 
                                                       'achievements' => json_decode($achievements),
                                                       'equipment' => $equipment
                                                      ));
	}
    
    public function diablo() {
        //"http://media.blizzard.com/d3/icons/<type>/<size>/<icon>.png"
        
        //My data
        $data = file_get_contents('https://us.api.battle.net/d3/profile/maiomi-1598/?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        
//        //Character data
//        $character = file_get_contents('https://us.api.battle.net/d3/profile/maiomi-1598/hero/40496088?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        return View::make('pages.gaming.diablo', array('data' => json_decode($data)));
    }
    
    public function hots() {
        return View::make('pages.gaming.hots');
    }
}
