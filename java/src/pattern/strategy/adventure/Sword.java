package pattern.strategy.adventure;

public class Sword extends Weapon
{
    public Sword()
    {
	super();
	setName("Schwert");
	setBehaviour(new SwordBehaviour());
    }
}
