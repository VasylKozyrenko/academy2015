<?php

class Greeting
{
    use RandomQuote;

    public function say($name)
    {
        echo sprintf("Hi, %s! There is a new quote for you: %s", $name, $this->getRandomQuote());
    }
}