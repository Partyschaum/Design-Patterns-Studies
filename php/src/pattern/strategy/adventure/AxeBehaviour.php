<?php

namespace pattern\strategy\adventure;

class AxeBehaviour extends WeaponBehaviour
{
    public function __construct()
    {
	$this->setBehaviour("hackt");
    }
}
