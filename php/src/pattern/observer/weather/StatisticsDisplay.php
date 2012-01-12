<?php

namespace pattern\observer\weather;

class StatisticsDisplay implements Observer, DisplayElement
{
    protected $_maxTemperature = 0;
    protected $_minTemperature = 200;
    protected $_temperatureSum = 0;
    protected $_numReadings;
    protected $_weatherData;

    public function __construct(Observable $weatherData)
    {
	$this->_weatherData = $weatherData;
	$weatherData->registerObserver($this);
    }

    public function update(Observable $o, $arg = null)
    {
	if ($o instanceof WeatherData) {
	    $this->_temperatureSum += $o->getTemperature();
	    $this->_numReadings++;

	    if ($o->getTemperature() > $this->_maxTemperature) {
		$this->_maxTemperature = $o->getTemperature();
	    }

	    if ($o->getTemperature() < $this->_minTemperature) {
		$this->_minTemperature = $o->getTemperature();
	    }

	    $this->display();
	}
    }

    public function display()
    {
	echo "Avg/Max/Min temperature = "
	    . ($this->_temperatureSum / $this->_numReadings)
	    . " / {$this->_maxTemperature} / {$this->_minTemperature}\n";
    }
}
