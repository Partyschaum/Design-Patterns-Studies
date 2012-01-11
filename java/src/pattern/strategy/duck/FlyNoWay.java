package pattern.strategy.duck;

public class FlyNoWay implements FlyBehaviour
{
    public void fly()
    {
	System.out.println("I can't fly! :-(");
    }
}
