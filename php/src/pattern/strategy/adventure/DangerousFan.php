<?php

namespace pattern\strategy\adventure;

class DangerousFan extends Weapon
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("gefährlicher Fächer des Todes");
	$this->setBehaviour(new DangerousFanBehaviour());
    }
}
