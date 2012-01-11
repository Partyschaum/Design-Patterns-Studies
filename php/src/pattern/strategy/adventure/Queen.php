<?php

namespace pattern\strategy\adventure;

class Queen extends Character
{
    public function __construct()
    {
	parent::__construct();
	$this->setName("Die Königin");
	$this->setWeapon(new DangerousFan());
    }
}
