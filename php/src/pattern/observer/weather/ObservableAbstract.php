<?php

namespace pattern\observer\weather;

abstract class ObservableAbstract implements Observable
{
    protected $_observers = array();

    public function registerObserver(Observer $o)
    {
	$objectId = spl_object_hash($o);
	$this->_observers[$objectId] = $o;
    }

    public function removeObserver(Observer $o)
    {
	$objectId = spl_object_hash($o);
	if (isset($this->_observers[$objectId])) {
	    unset($this->_observers[$objectId]);
	}
    }

    public function notifyObservers($arg = null)
    {
	foreach ($this->_observers as $o) {
	    $o->update($this, $arg);
	}
    }
}
