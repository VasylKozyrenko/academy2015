<?php

namespace Westeros\Crownlands\BaratheonOfKingsLanding;

class TommenBaratheon
{
    public static function whoami()
    {
        list($world, $land, $lord) = explode('\\', get_called_class());
        return "I'm $lord from $land";
    }
}
