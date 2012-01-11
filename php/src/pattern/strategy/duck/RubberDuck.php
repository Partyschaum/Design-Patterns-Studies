<?php

namespace pattern\strategy\duck;

class RubberDuck extends Duck
{
    public function __construct()
    {
	parent::__construct();
	$this->_flyBehaviour = new FlyNoWay();
	$this->_quackBehaviour = new Squeak();
    }

    public function display()
    {
	echo "I'm a cute yellow rubber duck...\n";
    }
}
