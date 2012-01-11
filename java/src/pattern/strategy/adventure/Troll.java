package pattern.strategy.adventure;

public class Troll extends Character
{
    public Troll()
    {
	super();
	setName("der Troll");
	setWeapon(new Axe());
    }
}
