<?php

namespace pattern\strategy\adventure;

class SwordBehaviour extends WeaponBehaviour
{
    public function __construct()
    {
	$this->setBehaviour("schwingt");
    }
}
