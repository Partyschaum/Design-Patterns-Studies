package pattern.strategy.duck;

public class Squeak implements QuackBehaviour
{
    public void quack()
    {
	System.out.println("Squeak");
    }
}
