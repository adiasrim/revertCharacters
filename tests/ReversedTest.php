<?php

namespace Tests;

use App\Characters;
use PHPUnit\Framework\TestCase;

class ReversedTest extends TestCase
{
    public function test_is_reversed_text()
    {
        $reverser = new Characters();
        $result = $reverser->revertCharacters('hello world');
        $this->assertEquals('olleh dlrow', $result);
    }
}