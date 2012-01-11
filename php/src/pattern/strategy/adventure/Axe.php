<?php

namespace pattern\strategy\adventure;

class Axe extends Weapon
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Axt");
	$this->setBehaviour(new AxeBehaviour());
    }
}
