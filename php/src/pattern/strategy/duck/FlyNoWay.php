<?php

namespace pattern\strategy\duck;

class FlyNoWay implements FlyBehaviour
{
    public function fly()
    {
	echo "I can't fly! :-(\n";
    }
}
