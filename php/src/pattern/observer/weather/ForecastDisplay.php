<?php

namespace pattern\observer\weather;

class ForecastDisplay implements Observer, DisplayElement
{
    protected $_currentPressure;
    protected $_lastPressure;
    protected $_weatherData;

    public function __construct(Observable $weatherData)
    {
	$this->_weatherData = $weatherData;
	$weatherData->registerObserver($this);
    }

    public function update(Observable $o, $arg = null)
    {
	if ($o instanceof WeatherData) {
	    $this->_lastPressure = $this->_currentPressure;
	    $this->_currentPressure = $o->getPressure();

	    $this->display();
	}
    }

    public function display()
    {
	echo "Forecast: ";
	if ($this->_currentPressure > $this->_lastPressure) {
	    echo "Improving weather on the way!\n";
	} else if ($this->_currentPressure == $this->_lastPressure) {
	    echo "More of the same\n";
	} else if ($this->_currentPressure < $this->_lastPressure) {
	    echo "Watch out for cooler, rainy weather\n";
	}
    }
}
