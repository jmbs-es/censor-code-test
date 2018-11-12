<?php

namespace Tests;

use Censor\SimpleCensor;
use PHPUnit\Framework\TestCase;

class SimpleCensorTest extends TestCase
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
        $censor       = $this->container->get(SimpleCensor::class);
        $censoredText = $censor->__invoke($censoredWords, $text);
        $this->assertEquals($censoredText, $validCensoredText);
    }

}
