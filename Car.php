<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private bool $isEngineOn = false;

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function HasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if($this->hasParkBrake=true){
            throw new  Exception("Le frein à main est actif");
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->setEnergy($energy);
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        echo "Les feux sont allumés !" . '<br>';
        return true;
    }
    public function switchOff(): bool
    {
        echo "Les feux sont éteints !" . '<br>';
        return false;
    }
}
