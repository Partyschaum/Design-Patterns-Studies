<?php

namespace pattern\strategy\duck;

class FlyWithWings implements FlyBehaviour
{
    public function fly()
    {
	echo "I'm flying!!\n";
    }
}
