<?php

namespace Tests;

use Censor\LoopLessCensor;
use PHPUnit\Framework\TestCase;

class LoopLessCensorTest extends TestCase
{

    private $container;

    public function setUp()
    {
        $this->container = new \DI\Container();
    }

    /**
     * @test
     * @dataProvider \Tests\TextProvider::get
     */
    public function doTest(
    array $censoredWords, string $text, string $validCensoredText
    )
    {
        $censor       = $this->container->get(LoopLessCensor::class);
        $censoredText = $censor->__invoke($censoredWords, $text);
        $this->assertEquals($censoredText, $validCensoredText);
    }

}
