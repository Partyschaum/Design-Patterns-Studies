<?php

namespace pattern\strategy\adventure;

class Knight extends Character
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Der Ritter");
	$this->setWeapon(new LongSword());
    }
}
