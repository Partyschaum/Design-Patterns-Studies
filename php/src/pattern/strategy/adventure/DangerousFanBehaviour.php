<?php

namespace pattern\strategy\adventure;

class DangerousFanBehaviour extends WeaponBehaviour
{
    public function __construct()
    {
	$this->setBehaviour("fächert");
    }
}
