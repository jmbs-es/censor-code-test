<?php

namespace Censor;

/**
 * 
 */
class LoopLessCensor extends AbstractCensor
{

    /**
     * Replace all banned words $censoredWords by asterisk *
     * from a given text $text same as SimpleCensor class but without loops
     * 
     * @param array $censoredWords
     * @param string $text
     * @return string
     * 
     * @author Jose Miguel Bonilla Silió <info@jmbs.es>
     */
    public function __invoke(array $censoredWords, string $text): string
    {

        $text = preg_replace_callback('~\b(?:' . implode('|', $censoredWords) . ')\b~i', function($bannedWord) {
            return str_repeat('*', strlen($bannedWord[0]));
        }, $text);

        return $text;
    }

}
