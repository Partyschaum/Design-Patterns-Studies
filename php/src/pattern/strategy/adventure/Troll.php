<?php

namespace pattern\strategy\adventure;

class Troll extends Character
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Der Troll");
	$this->setWeapon(new Axe());
    }
}

