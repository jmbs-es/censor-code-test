<?php

namespace Censor\Classes;

/*
 * String obtect that represents the censored words.
 */

class Word
{

    protected $word;

    /**
     * 
     * @return string in lowercase to avoid comparison problems
     */
    public function __toString(): string
    {
        return strtolower($this->word);
    }

}
