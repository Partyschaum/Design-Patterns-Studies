<?php

namespace pattern\strategy\adventure;

class LongSword extends Weapon
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Langschwert");
	$this->setBehaviour(new SwordBehaviour());
    }
}
