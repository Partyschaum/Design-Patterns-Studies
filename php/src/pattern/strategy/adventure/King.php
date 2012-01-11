<?php

namespace pattern\strategy\adventure;

class King extends Character
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Der König");
	$this->setWeapon(new Sword());
    }
}
