<?php

namespace Beratdogan6\WeightConversions;

class Weight {
    protected float $kilograms;

    public static function kilograms(float $kiloagrams): self
    {
        return new static($kiloagrams);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        // Conversion logic here
        return $this->kilograms * 2.20462;
    }

    public function toOunces(): float
    {
        // Conversion logic here
        return $this->kilograms * 35.274;
    }

    public function toStones(): float
    {
        // Conversion logic here
        return $this->kilograms * 0.157473;
    }
}
