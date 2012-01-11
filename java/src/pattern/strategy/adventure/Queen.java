package pattern.strategy.adventure;

public class Queen extends Character
{
    public Queen()
    {
	super();
	setName("Die Königin");
	setWeapon(new DangerousFan());
    }
}
