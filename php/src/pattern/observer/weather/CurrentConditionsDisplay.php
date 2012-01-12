<?php

namespace pattern\observer\weather;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    protected $_temperature;
    protected $_humidity;
    protected $_weatherData;

    public function __construct(Observable $weatherData)
    {
	$this->_weatherData = $weatherData;
	$weatherData->registerObserver($this);
    }

    public function update(Observable $o, $arg = null)
    {
	if ($o instanceof WeatherData) {
	    $this->_temperature = $o->GetTemperature();
	    $this->_humidity = $o->getHumidity();
	    $this->display();
	}
    }

    public function display()
    {
	echo "Current conditions: {$this->_temperature}F degrees"
	    . " and {$this->_humidity}% humidity\n";
    }
}
