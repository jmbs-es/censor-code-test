<?php

namespace Censor;

class SimpleCensor extends AbstractCensor
{

    /**
     * Simple script to replace all banned words $censoredWords by asterisk *
     * from a given text $text
     * 
     * - with the same length as the replaced word 
     * - without distinguish lower or  upper case in the text
     * 
     * @param array $censoredWords
     * @param string $text given text / paragraph
     * @return string 
     * 
     * @author Jose Miguel Bonilla Silió <info@jmbs.es>
     */
    public function __invoke(array $censoredWords, string $text): string
    {
        /*
         *  \b any word boundary. pattern /i for lower and upper case coincidence 
         *   @see http://php.net/manual/en/reference.pcre.pattern.modifiers.php
         */
        for($i = 0; $i < count($censoredWords); $i++)
        {
            $text = preg_replace('/\b' . $censoredWords[$i] . '\b/i', str_repeat('*', strlen($censoredWords[$i])), $text);
        }
        return $text;
    }

}
