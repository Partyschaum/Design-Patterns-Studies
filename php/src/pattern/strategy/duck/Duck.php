<?php

namespace pattern\strategy\duck;

abstract class Duck
{
    protected $_flyBehaviour;
    protected $_quackBehaviour;

    public function __construct()
    {
    }

    public function quack()
    {
	$this->_quackBehaviour->quack();
    }

    public function fly()
    {
	$this->_flyBehaviour->fly();
    }

    public abstract function display();

    public function swim()
    {
	echo "All ducks float, even decoys!\n";
    }

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour)
    {
	$this->_flyBehaviour = $flyBehaviour;
    }

    public function setQuackBehaviour(QuackBehaviour $quackBehaviour)
    {
	$this->_quackBehaviour = $quackBehaviour;
    }
}
