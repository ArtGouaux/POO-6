<?php

class Speedometer
{
    public const KM = 0.621;
    public const MILE = 1.609;


    public static function convertKmToMiles(int $km): ?float
    {
        return $km * self::KM;
    }

    public static function convertMilesToKm(int $mile): ?float
    {
        return  $mile * self::MILE;
    }
}