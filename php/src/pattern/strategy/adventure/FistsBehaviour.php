<?php

namespace pattern\strategy\adventure;

class FistsBehaviour extends WeaponBehaviour
{
    public function __construct()
    {
	$this->setBehaviour("kloppt");
    }
}
