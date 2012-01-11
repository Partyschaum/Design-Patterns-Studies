package pattern.strategy.adventure;

public class Knight extends Character
{
    public Knight()
    {
	super();
	setName("Der Ritter");
	setWeapon(new LongSword());
    }
}
