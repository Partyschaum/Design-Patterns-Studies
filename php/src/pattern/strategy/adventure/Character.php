<?php

namespace pattern\strategy\adventure;

abstract class Character
{
    protected $_name;
    protected $_weapon;

    public function __construct()
    {
	$this->setName("Der Namenlose");
	$this->setWeapon(new Fists());
    }

    public function setName($name)
    {
	$this->_name = $name;
    }

    public function setWeapon(Weapon $weapon)
    {
	$this->_weapon = $weapon;
    }

    public function __toString()
    {
	return $this->_name;
    }

    public function fight(Character $character = null)
    {
	($character) ? $target = (string) $character : $target = '';
	echo "{$this} {$this->_weapon->fight()} {$target} mit {$this->_weapon}\n";
    }

}
