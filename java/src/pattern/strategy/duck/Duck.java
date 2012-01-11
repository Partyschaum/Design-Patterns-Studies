package pattern.strategy.duck;

public abstract class Duck
{
    protected FlyBehaviour flyBehaviour;
    protected QuackBehaviour quackBehaviour;

    public void Duck()
    {
    }

    public void quack()
    {
	quackBehaviour.quack();
    }

    public void fly()
    {
	flyBehaviour.fly();
    }

    public abstract void display();

    public void swim()
    {
	System.out.println("All ducks float, even decoys!");
    }

    public void setFlyBehaviour(FlyBehaviour flyBehaviour)
    {
	this.flyBehaviour = flyBehaviour;
    }

    public void setQuackBehaviour(QuackBehaviour quackBehaviour)
    {
	this.quackBehaviour = quackBehaviour;
    }
}
