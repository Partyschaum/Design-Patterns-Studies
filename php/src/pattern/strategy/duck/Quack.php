<?php

namespace pattern\strategy\duck;

class Quack implements QuackBehaviour
{
    public function quack()
    {
	echo "Quack\n";
    }
}
