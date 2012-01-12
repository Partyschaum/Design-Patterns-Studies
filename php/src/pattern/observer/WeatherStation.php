<?php

namespace pattern\observer;

use pattern\observer\weather;

include 'weather/Observer.php';
include 'weather/Observable.php';
include 'weather/ObservableAbstract.php';

include 'weather/DisplayElement.php';
include 'weather/CurrentConditionsDisplay.php';
include 'weather/ForecastDisplay.php';
include 'weather/StatisticsDisplay.php';
include 'weather/HeatIndexDisplay.php';

include 'weather/WeatherData.php';

WeatherStation::run();

class WeatherStation
{
    public static function run()
    {
	$weatherData = new weather\WeatherData();

	$currentConditionsDisplay = new weather\CurrentConditionsDisplay($weatherData);
	$statisticsDisplay = new weather\StatisticsDisplay($weatherData);
	$forecastDisplay = new weather\ForecastDisplay($weatherData);
	$heatIndexDisplay = new weather\HeatIndexDisplay($weatherData);

	$weatherData->setMeasurements(80, 65, 30.4);
	$weatherData->setMeasurements(82, 70, 29.2);
	$weatherData->setMeasurements(78, 90, 29.2);
    }
}
