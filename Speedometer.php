<?php

class Speedometer
{
    const KMENMILES = 1.609;
    const MILESENKM = 0.621;

    public static function convertKmAMiles($kilometres): float
    {
        return $kilometres * self::MILESENKM;
    }

    public static function convertMilesAKm($miles): float
    {
        return $miles * self::KMENMILES;
    }
}