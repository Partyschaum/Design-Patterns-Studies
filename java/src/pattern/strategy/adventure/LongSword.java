package pattern.strategy.adventure;

public class LongSword extends Weapon
{
    public LongSword()
    {
	super();
	setName("Langschwert");
	setBehaviour(new SwordBehaviour());
    }
}
