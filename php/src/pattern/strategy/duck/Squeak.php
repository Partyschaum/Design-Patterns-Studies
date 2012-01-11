<?php

namespace pattern\strategy\duck;

class Squeak implements QuackBehaviour
{
    public function quack()
    {
	echo "Squeak\n";
    }
}
