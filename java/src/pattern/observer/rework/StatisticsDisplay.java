package pattern.observer.rework;

import java.util.Observable;
import java.util.Observer;

public class StatisticsDisplay implements Observer, DisplayElement
{
    private float maxTemperature = 0.0f;
    private float minTemperature = 200;
    private float temperatureSum = 0.0f;
    private int numReadings;
    private Observable observable;

    public StatisticsDisplay(Observable observable)
    {
	this.observable = observable;
	observable.addObserver(this);
    }

    public void update(Observable obs, Object arg)
    {
	if (obs instanceof WeatherData) {
	    WeatherData weatherData = (WeatherData)obs;
	    float temperature = weatherData.getTemperature();
	    temperatureSum += temperature;
	    numReadings++;

	    if (temperature > maxTemperature) {
	        maxTemperature = temperature;
	    }

	    if (temperature < minTemperature) {
	        minTemperature = temperature;
	    }

	    display();
	}
    }

    public void display()
    {
	System.out.println("Avg/Max/Min temperature = " + (temperatureSum /
	    numReadings) + " / " + maxTemperature + " / " + minTemperature);
    }
}
