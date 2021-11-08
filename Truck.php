<?php

class Truck extends Vehicle
{
    private int $loadCapacity;

    private int $loading = 0;

    public function __construct(int $loadCapacity, string $color, int $nbSeats, string $fuelType)
    {
        $this->loadCapacity = $loadCapacity;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    public function isFull(): string
    {
        $sentence = '';
        while ($this->loading < $this->loadCapacity) {
            $this->loading++;
            $sentence .= 'Filling...';
        }
        $sentence .= 'Full';
        return $sentence;
    }

    public function getloadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setloadCapacity(int $loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}
