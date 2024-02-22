<?php

namespace Unit;

use SomeLibrary\Lib;
use Tests\Support\UnitTester;

class LibTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->tester->assertEquals('baz', Lib::bar());
    }
}
