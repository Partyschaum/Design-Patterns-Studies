<?php

namespace pattern\strategy\duck;

class DecoyDuck extends Duck
{
    public function __construct()
    {
	parent::__construct();
	$this->_flyBehaviour = new FlyNoWay();
	$this->_quackBehaviour = new MuteQuack();
    }

    public function display()
    {
	echo "I'm just a decoy duck!\n";
    }
}
