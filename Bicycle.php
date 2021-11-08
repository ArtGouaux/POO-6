<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        $currentSpeed = $this->getCurrentSpeed();
        if ($currentSpeed > 10) {
            echo "Les feux sont allumés car la vitesse est de  $currentSpeed  km/h" .'<br>';
        }
        return true;
    }
    public function switchOff(): bool
    {
        echo "Les feux sont éteints ! " .'<br>';;
        return false;
    }
}