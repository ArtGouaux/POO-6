<?php

    require_once 'Vehicle.php';
    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';
    require_once 'HighWay.php';
    require_once 'PedestrianWay.php';
    require_once 'ResidentialWay.php';
    require_once 'MotorWay.php';
    require_once 'LightableInterface.php';
    require_once 'Skateboard.php';
    require_once 'Speedometer.php';


$bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();


$bike = new Bicycle('blue', 1);

$bike->setCurrentSpeed(0);

// echo $bike->forward();
// echo '<br> Vitesse du vélo :' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo :' . $bike->getcurrentSpeed() . 'km/h' . '<br>';
// echo $bike->brake();

$rockrider = new Bicycle('yellow', 1);

$tornado = new Bicycle('black', 1);

$sedanBmw = new Car('red', 5, 'fuel');


// echo $sedanBmw->start() . '<br>';
// echo 'Vitesse de la voiture :' . $sedanBmw->getCurrentSpeed() . 'km/h' . '<br>';
// echo $sedanBmw->forward() . '<br>';
// echo $sedanBmw->getCurrentSpeed() . 'km/h' . '<br>';
// echo $sedanBmw->brake() . '<br>';
// echo 'Vitesse de la voiture :' . $sedanBmw->getCurrentSpeed() . 'km/h' . '<br>';

$coupeBmw = new Car('black', 3, 'fuel');


// echo $coupeBmw->getColor();

$car = new Car('green', 4, 'electric');
// echo $car->forward();


var_dump(Car::ALLOWED_ENERGIES);

$tankTruck = new Truck(8, 'green', 3, 'fuel');
// var_dump($tankTruck);

$tankTruck->setLoading(0);
// echo $tankTruck->getLoading() . '<br>';

// echo $tankTruck->isFull() . '<br>';
// echo $tankTruck->forward() . '<br>';
// echo 'Vitesse actuelle: ' . $tankTruck->getCurrentSpeed() . 'km/h' . '<br>';
// echo $tankTruck->brake() . '<br>';
// echo 'Vitesse actuelle: ' . $tankTruck->getCurrentSpeed() . 'km/h' . '<br>';

$vanTruck = new Truck(5, 'red', 2, 'fuel');
// var_dump($vanTruck);

$vanTruck->setLoading(0);
// echo $vanTruck->getLoading() . '<br>';

// echo $vanTruck->isFull() . '<br>';
// echo $vanTruck->forward() . '<br>';
// echo 'Vitesse actuelle: ' . $vanTruck->getCurrentSpeed() . 'km/h' . '<br>';
// echo $vanTruck->brake() . '<br>';
// echo 'Vitesse actuelle: ' . $vanTruck->getCurrentSpeed() . 'km/h' . '<br>';

$skate = new Skateboard('yellow', 1);
// var_dump($skate);

// echo $skate->forward() . '<br>';

try {
    $car->start();
} catch (Exception $e) {
    $car->setHasParkBrake(false);
}finally {
    echo "Ma voiture roule comme un donut";
}

// $coupeBmw-> switchOn();
// $coupeBmw-> switchOff();

// $bike->setCurrentSpeed(11);
// $bike-> switchOn();

echo 'Convert KM to MILES' . " = " . Speedometer::convertKmToMiles(10) . '<br>';
echo 'Convert MILES to KM' . " = " . Speedometer::convertMilesToKm(10);