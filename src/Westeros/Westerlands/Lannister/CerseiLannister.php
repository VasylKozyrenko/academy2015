<?php

namespace Westeros\Westerlands\Lannister;

class CerseiLannister
{
    public static function whoami()
    {
        list($world, $land, $lord) = explode('\\', get_called_class());
        return "I'm $lord from $land";
    }
}
