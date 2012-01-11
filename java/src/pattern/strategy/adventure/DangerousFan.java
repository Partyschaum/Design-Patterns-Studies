package pattern.strategy.adventure;

public class DangerousFan extends Weapon
{
    public DangerousFan()
    {
	super();
	setName("gefährlicher Fächer des Todes");
	setBehaviour(new FanBehaviour());
    }
}
