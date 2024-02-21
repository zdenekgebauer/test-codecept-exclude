<?php


namespace Tests\Unit;

use Site\Dummy;
use Tests\Support\UnitTester;

class DummyTest extends \Codeception\Test\Unit
{

    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->tester->assertEquals('bar', Dummy::foo());
    }
}
