<?php

namespace pattern\strategy\adventure;

abstract class WeaponBehaviour
{
    protected $_behaviour;

    public function setBehaviour($behaviour)
    {
	$this->_behaviour = $behaviour;
    }

    public function __toString()
    {
	return $this->_behaviour;
    }
}
