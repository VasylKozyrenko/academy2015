<?php

namespace Westeros\Riverlands\Harrenhal;

class PetyrBaelish
{
    public static function whoami()
    {
        list($world, $land, $lord) = explode('\\', get_called_class());
        return "I'm $lord from $land";
    }
}
