<?php

trait RandomQuote
{
    public $quotes =
        [
            "Don't cry because it's over, smile because it happened",
            "You only live once, but if you do it right, once is enough.",
            "In three words I can sum up everything I've learned about life: it goes on.",
            "To live is the rarest thing in the world. Most people exist, that is all.",
            "It does not do to dwell on dreams and forget to live."
        ];
    public function getRandomQuote()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}
