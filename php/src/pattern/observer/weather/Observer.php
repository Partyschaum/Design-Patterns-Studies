<?php

namespace pattern\observer\weather;

interface Observer
{
    public function update(Observable $o, $arg = null);
}
