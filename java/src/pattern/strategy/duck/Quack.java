package pattern.strategy.duck;

public class Quack implements QuackBehaviour
{
    public void quack()
    {
	System.out.println("Quack");
    }
}
