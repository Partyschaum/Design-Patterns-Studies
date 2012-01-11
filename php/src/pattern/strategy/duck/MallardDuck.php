<?php

namespace pattern\strategy\duck;

class MallardDuck extends Duck
{
    public function __construct()
    {
	parent::__construct();
	$this->_flyBehaviour = new FlyWithWings();
	$this->_quackBehaviour = new Quack();
    }

    public function display()
    {
	echo "I'm a real Mallard duck!\n";
    }
}
