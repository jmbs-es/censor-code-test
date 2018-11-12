<?php

namespace Censor;

abstract class AbstractCensor
{

    protected $censoredWords;

    abstract public function __invoke(array $censoredWords, string $text): string;
}
