package pattern.strategy.duck;

public class RubberDuck extends Duck
{
    public RubberDuck()
    {
	super.Duck();
	flyBehaviour = new FlyNoWay();
	quackBehaviour = new Squeak();
    }

    public void display()
    {
	System.out.println("I'm a cute yellow rubber duck...");
    }
}
