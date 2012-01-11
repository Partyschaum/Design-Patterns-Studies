package pattern.strategy;

import pattern.strategy.duck.*;

public class MiniDuckSimulator
{
    public static void main(String[] args)
    {
	Duck mallard = new MallardDuck();
	mallard.display();
	mallard.quack();
	mallard.fly();
	mallard.swim();

	Duck decoy = new DecoyDuck();
	decoy.display();
	decoy.quack();
	decoy.fly();
	decoy.swim();

	Duck rubber = new RubberDuck();
	rubber.display();
	rubber.quack();
	rubber.fly();
	rubber.swim();

	// Make the rubber duck fly!
	rubber.setFlyBehaviour(new FlyWithWings());
	rubber.fly();
    }
}
