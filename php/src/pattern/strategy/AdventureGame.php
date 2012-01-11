<?php

namespace pattern\strategy;

use pattern\strategy\adventure;

include 'adventure/WeaponBehaviour.php';
include 'adventure/Weapon.php';

include 'adventure/AxeBehaviour.php';
include 'adventure/SwordBehaviour.php';
include 'adventure/FistsBehaviour.php';
include 'adventure/DangerousFanBehaviour.php';

include 'adventure/Axe.php';
include 'adventure/Sword.php';
include 'adventure/LongSword.php';
include 'adventure/Fists.php';
include 'adventure/DangerousFan.php';

include 'adventure/Character.php';

include 'adventure/King.php';
include 'adventure/Queen.php';
include 'adventure/Knight.php';
include 'adventure/Troll.php';

AdventureGame::run();

class AdventureGame
{
    public static function run()
    {
	$king = new adventure\King();
	$queen = new adventure\Queen();
	$knight = new adventure\Knight();
	$troll = new adventure\Troll();

	$king->fight();
	$queen->fight();
	$knight->fight();
	$troll->fight();

	$king->fight($troll);
	$queen->fight($king);
	$knight->fight($troll);
	$troll->fight($king);
	$king->setWeapon(new adventure\Fists());
	$king->fight($troll);
    }
}


