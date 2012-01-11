<?php

namespace pattern\strategy\duck;

class MuteQuack implements QuackBehaviour
{
    public function quack()
    {
	echo "<< silence >>\n";
    }
}
