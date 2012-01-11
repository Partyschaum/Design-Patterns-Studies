package pattern.strategy.duck;

public class MuteQuack implements QuackBehaviour
{
    public void quack()
    {
	System.out.println("<< silence >>");
    }
}
