<?php

namespace Beratdogan6\WeightConversions;

class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kiloagrams): self
    {
        return new static($kiloagrams);
    }

    public static function pounds(float $pounds): self
    {
        return new static($pounds / 2.20462);
    }

    public static function ounces(float $ounces): self
    {
        return new static($ounces / 35.274);
    }

    public static function stones(float $stones): self
    {
        return new static($stones / 0.157473);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toKilograms(): float
    {
        return $this->kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.20462;
    }

    public function toOunces(): float
    {
        return $this->kilograms * 35.274;
    }

    public function toStones(): float
    {
        return $this->kilograms * 0.157473;
    }
}
