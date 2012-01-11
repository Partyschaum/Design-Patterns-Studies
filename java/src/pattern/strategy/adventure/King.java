package pattern.strategy.adventure;

public class King extends Character
{
    public King()
    {
	super();
	setName("Der König");
	setWeapon(new Sword());
    }
}
