<?php

namespace Beratdogan6\WeightConversions;

class Weight
{
    public static function kilograms(float $kiloagrams): self
    {
        return new static($kiloagrams);
    }

    public function __construct(protected float $kilograms)
    {
        // Constructor code here
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
