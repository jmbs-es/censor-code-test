<?php

namespace Censor;

use Censor\Classes\Word;

class ObjectCensor extends AbstractCensor
{

    /**
     * Converts word to censure from array to object and it returns the text 
     * with the censored words replaced by asterisks 
     * 
     * Keeping code as simple as possible
     * 
     * @param array $censoredWords
     * @param string $text
     * @return string
     * 
     * @author Jose Miguel Bonilla Silió <info@jmbs.es>
     */
    public function __invoke(array $censoredWords, string $text): string
    {
         $objectCensoredWords = new Word();
         // It converts all arrays and sub arrays into objects
         $objectCensoredWords = json_decode(json_encode($censoredWords), FALSE);
        
        foreach($objectCensoredWords as $word)
        {
            $text = preg_replace('/\b' . $word . '\b/i', str_repeat('*', strlen($word)), $text);
        }

        return $text;
    }

}
