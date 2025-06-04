<?php

namespace Beratdogan6\WeightConversions\Tests;

use Beratdogan6\WeightConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_converts_kilograms_to_pounds()
    {
        $pounds = Weight::kilograms(1)->toPounds();
        $this->assertEqualsWithDelta(2.20462, $pounds, 0.00001);
    }

    /** @test */
    public function it_converts_pounds_to_kilograms()
    {
        $kilograms = Weight::pounds(1)->toKilograms();
        $this->assertEqualsWithDelta(0.453592, $kilograms, 0.000001);
    }
}
