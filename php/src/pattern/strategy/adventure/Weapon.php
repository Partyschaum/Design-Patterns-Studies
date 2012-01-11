<?php

namespace pattern\strategy\adventure;

abstract class Weapon
{
    protected $_name;
    protected $_behaviour;

    public function __construct()
    {
    }

    public function setName($name)
    {
	$this->_name = $name;
    }

    public function setBehaviour(WeaponBehaviour $behaviour)
    {
	$this->_behaviour = $behaviour;
    }

    public function fight()
    {
	return (string) $this->_behaviour;
    }

    public function __toString()
    {
	return $this->_name;
    }

}
