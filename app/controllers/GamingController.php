<?php

class GamingController extends BaseController {
    
	public function index()
	{
         $khaazix = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
        
        $character = json_decode($khaazix);
        
		return View::make('pages.gaming.gaming', array('character' => $character));
	}
    
    
//    //https://dev.battle.net/io-docs
//    public function warcraftCharacterObject() {
//        
//        //Get my main character
//        $khaazix = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Stats
//        $stats = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=stats&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Items/Gear
//        $items = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=items&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Activity Feed
//        $feed = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=feed&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Acheivements 
//        $achievements = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=achievements&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Mounts
//        $mounts = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=mounts&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Quests
//        $quests = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=quests&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Pets
//        $pets = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Khaazix?fields=pets&locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        
//        
//        //--------------------------------------------------------------------------------------
//        
//        //Get Secondary Characters
//        $maiomi = file_get_contents('https://us.api.battle.net/wow/character/Bloodhoof/Maiomi?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Aakali
//        $aakali = file_get_contents('https://us.api.battle.net/wow/character/Arthas/aakali?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Chirubi
//        $chirubi = file_get_contents('https://us.api.battle.net/wow/character/Bloodhoof/Chirubi?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Gaarä
//        $gaara = file_get_contents('https://us.api.battle.net/wow/character/Bloodhoof/Gaarä?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Dansugo
//        $dansugo = file_get_contents('https://us.api.battle.net/wow/character/Bloodhoof/Dansugo?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Minkx
//        $minkx = file_get_contents('https://us.api.battle.net/wow/character/Bloodhoof/Minkx?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Yoruichï 
//        $yoruichi = file_get_contents('https://us.api.battle.net/wow/character/Bloodhoof/Yoruichï?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Maiomi 
//        $maiomi-shaman = file_get_contents('https://us.api.battle.net/wow/character/Arthas/Maiomi?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//    }
//    
//    public function diabloCharacterObject() {
//        //"http://media.blizzard.com/d3/icons/<type>/<size>/<icon>.png"
//        
//        //My data
//        $diablo = file_get_contents('https://us.api.battle.net/d3/profile/maiomi-1598/?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        //Character data
//        $character = file_get_contents('https://us.api.battle.net/d3/profile/maiomi-1598/hero/40496088?locale=en_US&apikey=qw33hgtgns7p72d8vyn5psspsg7vgr43');
//        
//        
//    }

}
