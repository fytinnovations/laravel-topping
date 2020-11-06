<?php

namespace Fytinnovations\LaravelTopping\Tests;

use Fytinnovations\LaravelTopping\Tests\Fixtures\PersonModel;
use Orchestra\Testbench\TestCase;

class HumanAttributesTest extends TestCase
{
    public function testAgeCanBeCalculated()
    {
        $person = new PersonModel();
        $person1 = new PersonModel();
        $person2 = new PersonModel();

        $person->date_of_birth = "1997-07-17";
        $person1->date_of_birth = "1961-02-16";

        $this->assertEquals(23, $person->age);
        $this->assertEquals(59, $person1->age);
        $this->assertEquals(0, $person2->age);
    }
}
