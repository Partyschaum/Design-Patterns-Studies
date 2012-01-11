package pattern.observer.weather;

public class StatisticsDisplay implements Observer, DisplayElement
{
    private float maxTemperature = 0.0f;
    private float minTemperature = 200;
    private float temperatureSum = 0.0f;
    private int numReadings;
    private WeatherData weatherData;

    public StatisticsDisplay(WeatherData weatherData)
    {
	this.weatherData = weatherData;
	weatherData.registerObserver(this);
    }

    public void update(float temperature, float humidity, float pressure)
    {
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

    public void display()
    {
	System.out.println("Avg/Max/Min temperature = " + (temperatureSum /
	    numReadings) + " / " + maxTemperature + " / " + minTemperature);
    }
}
