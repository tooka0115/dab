<?php

namespace TechAcademy\RPG;

require_once'hero.php';
require_once'slime.php';

use TechAcademy\RPG\Characters\Hero;

class game{
    static function start(){
        $hero=new hero();
        $slime_A=new \techacademy\rpg\characters\slime('A');
        
        $slime_A->attack($hero);
        $hero->attack($slime_A);
        
        Hero::description();
        characters\Slime::description();
    }
}

Game::start();