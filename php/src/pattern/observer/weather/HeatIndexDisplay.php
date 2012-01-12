<?php

namespace pattern\observer\weather;

class HeatIndexDisplay implements Observer, DisplayElement
{
    protected $_heatIndex;
    protected $_weatherData;

    public function __construct(Observable $weatherData)
    {
	$this->_weatherData = $weatherData;
	$weatherData->registerObserver($this);
    }

    public function update(Observable $o, $arg = null)
    {
	if ($o instanceof WeatherData) {
	    $this->_heatIndex = $this->_computeHeatIndex($o->getTemperature(), $o->getHumidity());
	    $this->display();
	}
    }

    protected function _computeHeatIndex($t, $rh)
    {
	$index = (float)((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) 
		+ (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) 
		+ (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh))
		+ (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t))
		+ (0.0000291583 * ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh))
		+ (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh))
		+ 0.000000000843296 * ($t * $t * $rh * $rh * $rh)) - (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
	return $index;
    }

    public function display()
    {
	echo "Heat index is {$this->_heatIndex}\n";
    }
}
