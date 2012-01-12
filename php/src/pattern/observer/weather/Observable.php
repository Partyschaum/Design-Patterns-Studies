<?php

namespace pattern\observer\weather;

interface Observable
{
    public function registerObserver(Observer $o);

    public function removeObserver(Observer $o);

    public function notifyObservers();
}
