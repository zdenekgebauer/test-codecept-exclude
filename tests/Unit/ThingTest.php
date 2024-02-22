<?php

namespace Unit;

use Some\Thing;
use Tests\Support\UnitTester;

class ThingTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->tester->assertEquals('baz', Thing::bar());
    }
}
