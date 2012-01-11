<?php

namespace pattern\strategy;

use pattern\strategy\duck;

include 'duck/FlyBehaviour.php';
include 'duck/QuackBehaviour.php';

include 'duck/FlyWithWings.php';
include 'duck/FlyNoWay.php';
include 'duck/Quack.php';
include 'duck/MuteQuack.php';
include 'duck/Squeak.php';

include 'duck/Duck.php';
include 'duck/MallardDuck.php';
include 'duck/DecoyDuck.php';
include 'duck/RubberDuck.php';

MiniDuckSimulator::run();

class MiniDuckSimulator
{
    public static function run()
    {
	$mallard = new duck\MallardDuck();
	$mallard->display();
	$mallard->quack();
	$mallard->fly();
	$mallard->swim();

	$decoy = new duck\DecoyDuck();
	$decoy->display();
	$decoy->quack();
	$decoy->fly();
	$decoy->swim();

	$rubber = new duck\RubberDuck();
	$rubber->display();
	$rubber->quack();
	$rubber->fly();
	$rubber->swim();

	// Make the rubber duck fly!
	$rubber->setFlyBehaviour(new duck\FlyWithWings());
	$rubber->fly();
    }
}

