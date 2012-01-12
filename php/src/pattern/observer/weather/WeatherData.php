<?php

namespace pattern\observer\weather;

class WeatherData extends ObservableAbstract
{
    protected $_temperature;
    protected $_humidity;
    protected $_pressure;

    public function measurementsChanged()
    {
	$this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
	$this->_temperature = $temperature;
	$this->_humidity = $humidity;
	$this->_pressure = $pressure;
	$this->measurementsChanged();
    }

    public function getTemperature()
    {
	return $this->_temperature;
    }

    public function getHumidity()
    {
	return $this->_humidity;
    }

    public function getPressure()
    {
	return $this->_pressure;
    }
}
