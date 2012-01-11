<?php

namespace pattern\strategy\adventure;

class Fists extends Weapon
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Fäuste");
	$this->setBehaviour(new FistsBehaviour());
    }
}
