package pattern.strategy.duck;

public class MallardDuck extends Duck
{
    public MallardDuck()
    {
	super.Duck();
	flyBehaviour = new FlyWithWings();
	quackBehaviour = new Quack();
    }

    public void display()
    {
	System.out.println("I'm a real Mallard duck!");
    }
}
