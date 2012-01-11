package pattern.strategy.duck;

public class DecoyDuck extends Duck
{
    public DecoyDuck()
    {
	super.Duck();
	flyBehaviour = new FlyNoWay();
	quackBehaviour = new MuteQuack();
    }

    public void display()
    {
	System.out.println("I'm just a decoy duck!");
    }
}
