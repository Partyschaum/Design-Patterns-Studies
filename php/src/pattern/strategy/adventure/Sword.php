<?php

namespace pattern\strategy\adventure;

class Sword extends Weapon
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Schwert");
	$this->setBehaviour(new SwordBehaviour());
    }
}
